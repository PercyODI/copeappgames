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
                   icon,
                   title,
                   description,
                   instruction,
                   discussion,
                   primary_type,
                   secondary_type,
                   deckid,
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
/**
 * $replaceVals needs to be a key => value pair of the variables
 * 
 * $key is the name of the smarty variable
 * $val is the name of the class variable you want to access
 * 
 * Ex.
 * $replaceVals = array('title' => 'title', 'foo' => 'gamepictures');
 */
    // function returnSmartyTemplate($smarty, $template) {

    //     foreach(get_object_vars($this) as $key => $val) {
    //         $smarty->assign($key, $val);
    //     }
        
    //     return $smarty->fetch($template);
    // }
    
    // function getCardFrontHTML() {
    //     $template = file_get_contents("/home/ubuntu/workspace/v0.3/api/ui/game_card_front.tpl");
    //     $replaceArr = array(
    //         "#gameid#" => $this->gameid,
    //         "#icon#" => $this->icon,
    //         "#title#" => $this->title,
    //         "#description#" => $this->description);
    //     $returnStr = str_replace(array_keys($replaceArr), array_values($replaceArr), $template);
    //     return $returnStr;
    // }
    
    // function getFullCardHTML() {
    //     $template = file_get_contents("/home/ubuntu/workspace/v0.3/api/ui/game_card_full.tpl");
    //     $replaceArr = array(
    //         "#gameid#" => $this->gameid,
    //         "#icon#" => $this->icon,
    //         "#title#" => $this->title,
    //         "#description#" => $this->description,
    //         "#instructions#" => $this->instructions,
    //         "#discussion#" => $this->discussion,
    //         "#createdby#" => $this->createdby,
    //         "#equipment#" => $this->equipment,
    //         "#gametypes#" => "<li>".implode("</li><li>", $this->gametypes)."</li>",
    //         "#gametags#" => "<li>".implode("</li><li>", $this->gametags)."</li>",
    //         "#gamepictures#" => "<div class='owl-item'><img src='".implode("'></div><div class='owl-item'><img src='", $this->gamepictures)."'></div>",
    //         "#gamevideos#" => "<div class='owl-item'>".implode("</div><div class='owl-item'>", $this->gamevideos)."</div>");
    //     $returnStr = str_replace(array_keys($replaceArr), array_values($replaceArr), $template);
    //     return $returnStr;
    // }
    
}