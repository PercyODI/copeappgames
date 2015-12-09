<?php

require_once("config.php");

class Game {
    // An instance must be given a gameid's to work
    
    protected $gameid = "";
    protected $userid = "";
    protected $deckid = "";
    protected $icon = "gamepad";
    protected $title = "No Title Listed";
    protected $description = "No Description Listed";
    protected $instruction = "No Instructions Listed";
    protected $discussion = "No Discussion Listed";
    protected $createdby = "";
    protected $equipment = "No Equipment Listed";
    protected $primary_type = null;
    protected $secondary_type = null;
    protected $gametypes = null;
    protected $gametags = null;
    protected $gamepictures = null;
    protected $gamevideos = null;
    
    function __construct($constructGameid) {
        $data = Database::runQuery(
            "SELECT gameid,
                   game.icon,
                   title,
                   game.description,
                   game.instruction,
                   game.discussion,
                   primary_type,
                   secondary_type,
                   deckid,
                   deck.userid,
                   GROUP_CONCAT(DISTINCT gtag.keyword) as gametags,
                   GROUP_CONCAT(DISTINCT gpic.link) as gamepictures,
                   GROUP_CONCAT(DISTINCT gvid.link) as gamevideos,
                   GROUP_CONCAT(DISTINCT `type`.keyword) as gametypes
            FROM game 
            LEFT OUTER JOIN (SELECT *
                             FROM game_tag 
                             JOIN tag
                             USING (tagid)
                            ) AS gtag USING (gameid)
            LEFT OUTER JOIN type ON game.primary_type=`type`.typeid OR game.secondary_type=`type`.typeid
            LEFT OUTER JOIN picture AS gpic USING (gameid)
            LEFT OUTER JOIN video AS gvid USING (gameid)
            LEFT OUTER JOIN deck USING (deckid)
            WHERE gameid = :gameid
            GROUP BY gameid"
            , array("gameid" => $constructGameid)
        );
        $data = $data[0];
        if(isset($data['gameid'])) {
            $this->gameid = $data['gameid'];
        }
        if(isset($data['userid'])) {
            $this->userid = $data['userid'];
        }
        if(isset($data['title'])) {
            $this->title = $data['title'];
        }
        if(isset($data['description'])) {
            $this->description = $data['description'];
        }
        if(isset($data['instruction'])) {
            $this->instruction = $data['instruction'];
        }
        if(isset($data['discussion'])) {
            $this->discussion = $data['discussion'];
        }
        if(isset($data['icon'])) {
            $this->icon = $data['icon'];
        }
        if(isset($data['deckid'])) {
            $this->deckid = $data['deckid'];
        }
        if(isset($data['primary_type'])) {
            $this->primary_type = $data['primary_type'];
        }
        if(isset($data['secondary_type'])) {
            $this->secondary_type = $data['secondary_type'];
        }
        if(isset($data['gametags'])) {
            $this->gametags = explode(",", $data['gametags']);
        }
        if(isset($data['gamepictures'])) {
            $this->gamepictures = explode(",", $data['gamepictures']);
        }
        if(isset($data['gamevideos'])) {
            $this->gamevideos = explode(",", $data['gamevideos']);
        }
        if(isset($data['gametypes'])) {
            $this->gametypes = explode(",", $data['gametypes']);
        }
    }
    
    function getUserid() {
        return $this->userid;
    }
    function getGameid () {
        return $this->gameid;
    }
    
    function getTitle () {
        return $this->title;
    }
    
    function getDescription () {
        return $this->description;
    }
    
    function getInstruction () {
        return $this->instruction;
    }
    
    function getDiscussion () {
        return $this->discussion;
    }
    
    function getIcon () {
        return $this->icon;
    }
    
    function getDeckid () {
        return $this->deckid;
    }
    
    function getCreatedby () {
        return $this->createdby;
    }
    
    function getPicLinks () {
        return $this->pic_links;
    }
    
    function getTypeKeywords () {
        return $this->type_keywords;
    }
    
    function getTagKeywordds () {
        return $this->tag_keywords;
    }
    
    function getPrimary_type () {
        return $this->primary_type;
    }
    
    function getSecondary_type () {
        return $this->secondary_type;
    }
    
    public static function getGames($limit = 100, $offset = 0) {
        $limit = (int) $limit;
        $offset = (int) $offset;
        $games = array();
        $data = Database::runQuery("SELECT gameid FROM game LIMIT $limit OFFSET $offset");
        foreach($data as $game) {
            $games[] = new Game((int) $game['gameid']);
        }
        return $games;
    }
    
    function smartyCard($template) {
        global $config;
        foreach(get_object_vars($this) as $key => $val) {
            $config['smarty']->assign($key, $val);
        }
        echo $config['smarty']->fetch($template);
    }
    
    function displayFullGameSmarty($template) {
        global $config;
        foreach(get_object_vars($this) as $key => $val) {
            $config['smarty']->assign($key, $val);
        }
        echo $config['smarty']->display($template);
        
    }
    
    public static function newGame($gameDetails) {
        $return = array();
        if(!is_array($gameDetails)) {
            $return['status'] = 'error';
            $return['message'] = 'Expecting an Array';
            return $return;
        }
        $primaryInsert = "";
        $primaryVal = "";
        $secondaryInsert = "";
        $secondaryVal = "";
        $bind_array = array(    "deckid" => $gameDetails['deckid'], 
                                "title" => $gameDetails['title'], 
                                "description" => $gameDetails['description'], 
                                "instruction" => $gameDetails['instruction'], 
                                "discussion" => $gameDetails['discussion'], 
                                "icon" => $gameDetails['icon'] );
        
        if($gameDetails['primary_type'] == "None") {
            $gameDetails['primary_type'] = "NULL";
        } else {
            $primaryInsert = ", primary_type";
            $primaryVal = ", :primary_type";
            $bind_array['primary_type'] = $gameDetails['primary_type'];
        }
        
        if($gameDetails['secondary_type'] == "None") {
            $gameDetails['secondary_type'] = "NULL";
        } else {
            $secondaryInsert = ", secondary_type";
            $secondaryVal = ", :secondary_type";
            $bind_array['secondary_type'] = $gameDetails['secondary_type'];
        }
        
        if($gameDetails['primary_type'] != 'NULL' or $gameDetails['secondary_type'] != "NULL") {
            if($gameDetails['primary_type'] == $gameDetails['secondary_type']) {
                $return['status'] = 'error';
                $return['message'] = "Primary Type and Secondary Type Must Be Different";
            }
        }
        
        try {
            Database::runQuery("INSERT INTO game (deckid, title, description, instruction, discussion{$primaryInsert}{$secondaryInsert}, icon) 
                                VALUES (:deckid, :title, :description, :instruction, :discussion{$primaryVal}{$secondaryVal}, :icon)"
                               , $bind_array);
            $return['status'] = 'success';
            return $return;
        } catch (Exception $e) {
            $return['status'] = 'error';
            $return['message'] = 'Database Error';
            return $return;
        }
    }
    
    public static function updateOneField($gameid, $field, $data) {
        if(!in_array($field, array("description", "instruction", "discussion"))) {
            $return['status'] = 'error';
            $return['message'] = 'Expecting description, instruction, or discussion as a field';
            return $return;
            exit();
        }
        
        try {
            Database::runQuery("UPDATE game
                                SET $field = :data
                                WHERE gameid = :gameid",
                                array("data" => $data, "gameid" => $gameid));
            $return['status'] = 'success';
            return $return;
        } catch (Exception $e) {
            $return['status'] = 'error';
            $return['message'] = 'Database Error';
            return $return;
        }
        
    }
    
     public static function editGame($gameDetails) {
        $return = array();
        if(!is_array($gameDetails)) {
            $return['status'] = 'error';
            $return['message'] = 'Expecting an Array';
            return $return;
        }
        $primaryInsert = "";
        $primaryVal = "";
        $secondaryInsert = "";
        $secondaryVal = "";
        $bind_array = array("title" => $gameDetails['title'], 
                            "description" => $gameDetails['description'], 
                            "instruction" => $gameDetails['instruction'], 
                            "discussion" => $gameDetails['discussion'], 
                            "icon" => $gameDetails['icon'],
                            "gameid" => $gameDetails['gameid']);
        
        if($gameDetails['primary_type'] == "None") {
            $gameDetails['primary_type'] = "NULL";
            $primaryUpdate = ", primary_type = NULL";
        } else {
            $primaryUpdate = ", primary_type = :primary_type";
            $bind_array['primary_type'] = $gameDetails['primary_type'];
        }
        
        if($gameDetails['secondary_type'] == "None") {
            $gameDetails['secondary_type'] = "NULL";
            $secondaryUpdate = ", secondary_type = NULL";
        } else {
            $secondaryUpdate = ", secondary_type = :secondary_type";
            $bind_array['secondary_type'] = $gameDetails['secondary_type'];
        }
        
        if($gameDetails['primary_type'] != 'NULL' or $gameDetails['secondary_type'] != "NULL") {
            if($gameDetails['primary_type'] == $gameDetails['secondary_type']) {
                $return['status'] = 'error';
                $return['message'] = "Primary Type and Secondary Type Must Be Different";
            }
        }
        try {
            Database::runQuery("UPDATE game 
                                SET icon = :icon, 
                                    title = :title, 
                                    description = :description, 
                                    instruction = :instruction, 
                                    discussion = :discussion
                                    {$primaryUpdate} 
                                    {$secondaryUpdate}
                                WHERE gameid = :gameid"
                               , $bind_array);
            $return['status'] = 'success';
            return $return;
        } catch (Exception $e) {
            $return['status'] = 'error';
            $return['message'] = 'Database Error';
            return $return;
        }
    }
    
}