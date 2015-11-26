<?php

require_once("config.php");

class Game {
    // An instance must be given a gameid's to work
    
    protected $gameid = "";
    protected $icon = "gamepad";
    protected $title = "No Title Listed";
    protected $description = "No Description Listed";
    protected $instructions = "No Instructions Listed";
    protected $discussion = "No Discussion Listed";
    protected $createdby = "";
    protected $equipment = "No Equipment Listed";
    protected $primary_type = null;
    protected $secondary_type = null;
    protected $gametags = array("No Game Tags");
    protected $gamepictures = array();
    protected $gamevideos = array();
    
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
                   GROUP_CONCAT(gtag.keyword) as gametags,
                   GROUP_CONCAT(gpic.link) as gamepictures,
                   GROUP_CONCAT(gvid.link) as gamevideos
            FROM game 
            LEFT OUTER JOIN (SELECT *
                             FROM game_tag 
                             JOIN tag
                             USING (tagid)
                            ) AS gtag USING (gameid)
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
        if(isset($data['instructions'])) {
            $this->instruction = $data['instructions'];
        }
        if(isset($data['discussion'])) {
            $this->discussion = $data['discussion'];
        }
        if(isset($data['icon'])) {
            $this->icon = $data['icon'];
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
    
    /**
     *  $templateFile must be a valid template file, with #variable# replace strings
     * 
     *  $replaceArr must contain an associative array in the following format
     *  array("#stringToReplace#" => "property");
     * 
     *  For example
     *  array("#icon#" => "icon", "#title#" => "title", "#description#" => "description")
     */
    function createFromTemplate($templateFile, $replaceArr) {
        if(file_exists($templateFile)) {
            $template = file_get_contents($templateFile);
            $returnStr = str_replace(array_keys($replaceArr), array_values($replaceArr), $template);
        } 
        elseif(file_exists(TEMPLATES_PATH . $templateFile)) {
            $template = file_get_contents(TEMPLATES_PATH . $templateFile);
            $returnStr = str_replace(array_keys($replaceArr), array_values($replaceArr), $template);
        }
        else {
            throw new Exception("Invalid template file.");
        }
    }
    
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