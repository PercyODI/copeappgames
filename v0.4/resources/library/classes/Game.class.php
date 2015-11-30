<?php

require_once("config.php");

class Game {
    // An instance must be given a gameid's to work
    
    protected $gameid = "";
    protected $deckid = "";
    protected $icon = "gamepad";
    protected $title = "No Title Listed";
    protected $description = "No Description Listed";
    protected $instructions = "No Instructions Listed";
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
                   GROUP_CONCAT(gtag.keyword) as gametags,
                   GROUP_CONCAT(gpic.link) as gamepictures,
                   GROUP_CONCAT(gvid.link) as gamevideos,
                   GROUP_CONCAT(`type`.keyword) as gametypes
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
        if(isset($data['title'])) {
            $this->title = $data['title'];
        }
        if(isset($data['description'])) {
            $this->description = $data['description'];
        }
        if(isset($data['instruction'])) {
            $this->instructions = $data['instruction'];
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
    
    function getGameid () {
        return $this->gameid;
    }
    
    function getTitle () {
        return $this->title;
    }
    
    function getDescription () {
        return $this->description;
    }
    
    function getInstructions () {
        return $this->instructions;
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
    
    public static function newDeck($deckDetails) {
        $return = array();
        if(!is_array($deckDetails)) {
            $return['status'] = 'error';
            $return['message'] = 'Expecting an Array';
            return $return;
        }
    
        try {
            Database::runQuery("INSERT INTO deck (name, description, icon, userid) 
                                VALUES (:name, :description, :icon, :userid)"
                               , array(
                                   "name" => $deckDetails['name'],
                                   "description" => $deckDetails['description'], 
                                   "icon" => $deckDetails['icon'],
                                   "userid" => $deckDetails['userid']
                                   )
                              );
            $return['status'] = 'success';
            return $return;
        } catch (Exception $e) {
            $return['status'] = 'error';
            $return['message'] = 'Database Error';
            return $return;
        }
    }
    
}