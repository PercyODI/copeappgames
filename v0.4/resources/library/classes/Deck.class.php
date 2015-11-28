<?php

require_once('config.php');

class Deck {
    protected $deckid = "";
    protected $name = "";
    protected $userid = "";
    protected $description = "";
    protected $icon = "";
    protected $games = array();
    
    function __construct($constructDeckid) {
        $data = Database::runQuery(
            "SELECT deckid, name, userid, deck.description, deck.icon, GROUP_CONCAT(game.gameid) AS games
            FROM deck
            LEFT OUTER JOIN game USING (deckid)
            WHERE deckid = :deckid
            GROUP BY deckid"
           , array("deckid" => $constructDeckid)
        );
        $data = $data[0];
        if(isset($data['deckid'])) {
            $this->deckid = $data['deckid'];
        }
        if(isset($data['name'])) {
            $this->name = $data['name'];
        }
        if(isset($data['userid'])) {
            $this->userid = $data['userid'];
        }
        if(isset($data['description'])) {
            $this->description = $data['description'];
        }
        if(isset($data['icon'])) {
            $this->icon = $data['icon'];
        }
        if(isset($data['games'])) {
            $gameids = explode(',', $data['games']);
            foreach($gameids as $gameid) {
                $this->games[] = new Game($gameid);
            }
        }
    }
    
    public function getDeckid() {
        return $this->deckid;
    }
    public function getName() {
        return $this->name;
    }
    public function getUserid() {
        return $this->userid;
    }
    public function getDescription() {
        return $this->description;
    }
    public function getIcon() {
        return $this->icon;
    }
    public function getGames() {
        return $this->games;
    }
    
    public static function getDecks($limit = 100, $offset = 0) {
        $limit = (int) $limit;
        $offset = (int) $offset;
        $decks = array();
        $data = Database::runQuery("SELECT deckid FROM deck LIMIT $limit OFFSET $offset");
        foreach($data as $deck) {
            $decks[] = new Deck((int) $deck['deckid']);
        }
        return $decks;
    }
    
    public function getDeckGames($limit = 100, $offset = 0) {
        $limit = (int) $limit;
        $offset = (int) $offset;
        $games = array();
        $data = Database::runQuery("SELECT gameid FROM game WHERE deckid = $this->deckid LIMIT $limit OFFSET $offset");
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
}

?>