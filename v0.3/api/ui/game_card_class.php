<?php

require_once("../connect.php");

class game_card_class {
    // An instance must be given a gameid's to work
    
    protected $gameid = "";
    protected $icon = "gamepad";
    protected $title = "No Title Listed";
    protected $description = "No Description Listed";
    protected $instructions = "No Instructions Listed";
    protected $discussion = "No Discussion Listed";
    protected $createdby = "";
    protected $equipment = "No Equipment Listed";
    protected $gametypes = array("No Game Types");
    protected $gametags = array("No Game Tags");
    protected $gamepictures = array();
    protected $gamevideos = array();
    
    function __construct($constructGameid) {
        global $db;
        if($constructGameid != null) {
            try {
                $stmt = $db->prepare("
                    SELECT gameid, 
                           title, 
                           description, 
                           instructions, 
                           discussion, 
                           icon, 
                           createdby, 
                           GROUP_CONCAT(DISTINCT gpic.link) AS pic_links, 
                           GROUP_CONCAT(DISTINCT gtype.keyword) AS type_keywords, 
                           GROUP_CONCAT(DISTINCT gtag.keyword) AS tag_keywords,
                           GROUP_CONCAT(DISTINCT gvid.link) as vid_links
                    FROM game 
                    LEFT OUTER JOIN (SELECT *
                                     FROM games_types
                                     JOIN game_type
                                     USING (typeid)
                                    ) AS gtype USING (gameid)
                    LEFT OUTER JOIN (SELECT *
                                     FROM games_tags
                                     JOIN game_tag
                                     USING (tagid)
                                    ) AS gtag USING (gameid)
                    LEFT OUTER JOIN game_pictures AS gpic USING (gameid)
                    LEFT OUTER JOIN game_videos AS gvid USING (gameid)
                    WHERE gameid = :gameid
                    GROUP BY gameid");
                $stmt->execute(array("gameid" => $constructGameid));
                $data = $stmt->fetchAll(PDO::FETCH_ASSOC);
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
                    $this->instructions = $data['instructions'];
                }
                if(isset($data['discussion'])) {
                    $this->discussion = $data['discussion'];
                }
                if(isset($data['icon'])) {
                    $this->icon = $data['icon'];
                }
                if(isset($data['createdby'])) {
                    $this->createdby = $data['createdby'];
                }
                if(isset($data['pic_links'])) {
                    $this->gamepictures = explode(",", $data['pic_links']);
                }
                if(isset($data['type_keywords'])) {
                    $this->gametypes = explode(",", $data['type_keywords']);
                }
                if(isset($data['tag_keywords'])) {
                    $this->gametags = explode(",", $data['tag_keywords']);
                }
                if(isset($data['vid_links'])) {
                    $this->gamevideos = explode(",", $data['vid_links']);
                }
            } catch(Exception $e) {
                echo "Error: " . $e->getMessage();
            }
        } else {
            throw new Exception("game_card_class requires a gameid.");
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
    
    function getCardFrontHTML() {
        $template = file_get_contents("game_card_front.tpl");
        $replaceArr = array(
            "#gameid#" => $this->gameid,
            "#icon#" => $this->icon,
            "#title#" => $this->title,
            "#description#" => $this->description);
        $returnStr = str_replace(array_keys($replaceArr), array_values($replaceArr), $template);
        return $returnStr;
    }
    
    function getFullCardHTML() {
        $template = file_get_contents("game_card_full.tpl");
        $replaceArr = array(
            "#gameid#" => $this->gameid,
            "#icon#" => $this->icon,
            "#title#" => $this->title,
            "#description#" => $this->description,
            "#instructions#" => $this->instructions,
            "#discussion#" => $this->discussion,
            "#createdby#" => $this->createdby,
            "#equipment#" => $this->equipment,
            "#gametypes#" => "<li>".implode("</li><li>", $this->gametypes)."</li>",
            "#gametags#" => "<li>".implode("</li><li>", $this->gametags)."</li>",
            "#gamepictures#" => "<div class='owl-item'><img src='".implode("'></div><div class='owl-item'><img src='", $this->gamepictures)."'></div>",
            "#gamevideos#" => "<div class='owl-item'>".implode("</div><div class='owl-item'>", $this->gamevideos)."</div>");
        $returnStr = str_replace(array_keys($replaceArr), array_values($replaceArr), $template);
        return $returnStr;
    }
    
}

// $test = new game_card_class(1);

// // print_r($test);

// // echo $test->getGameid() . ": ";
// // echo $test->getTitle() . "\n\n";
// // print_r($test->getTypeKeywords());

// echo $test->getCardFrontHTML();
// echo $test->getFullCardHTML();