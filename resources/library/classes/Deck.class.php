<?php

require_once('config.php');

class Deck {
    protected $deckid = "";
    protected $name = "";
    protected $userid = "";
    protected $usercopename = "";
    protected $description = "";
    protected $icon = "";
    protected $games = array();
    
    function __construct($constructDeckid) {
        $data = Database::runQuery(
            "SELECT deckid, name, userid, deck.description, deck.icon, user.copename, user.username, GROUP_CONCAT(game.gameid) AS games
            FROM deck
            LEFT OUTER JOIN game USING (deckid)
            LEFT OUTER JOIN user USING (userid)
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
        if($data['copename']) {
            $this->usercopename = $data['copename'];
        } else {
            $this->usercopename = $data['username'];
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
    public function getUsercopename() {
        return $this->usercopename;
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
    
    public static function getDecks($userid = "any", $search = null, $limit = 100, $offset = 0) {
        $limit = (int) $limit;
        $offset = (int) $offset;
        $where = "";
        $where_used = false;
        $bind_array = array();
        
        if($userid != 'any') {
            $where .= "userid = :userid ";
            $bind_array['userid'] = $userid;
            $where_used = true;
        }
        if($search != null) {
            $search = "%$search%";
            if($where_used) {
                $where .= "AND ";
            }
            $where .= "name LIKE :search1 OR description LIKE :search2 ";
            $bind_array['search1'] = $search;
            $bind_array['search2'] = $search;
            $where_used = true;
        }
        if($where_used == true) {
            $where = "WHERE " . $where;
        }
        $decks = array();
        $data = Database::runQuery("SELECT deckid FROM deck {$where}LIMIT $limit OFFSET $offset", $bind_array);
        foreach($data as $deck) {
            $decks[] = new Deck((int) $deck['deckid']);
        }
        return $decks;
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
    
    public static function editDeck($deckDetails) {
        $return = array();
        if(!is_array($deckDetails)) {
            $return['status'] = 'error';
            $return['message'] = 'Expecting an Array';
            return $return;
        }
    
        try {
            Database::runQuery("UPDATE deck
                                SET name = :name,
                                    description = :description,
                                    icon = :icon
                                WHERE deckid = :deckid"
                               , array(
                                   "name" => $deckDetails['name'],
                                   "description" => $deckDetails['description'], 
                                   "icon" => $deckDetails['icon'],
                                   "deckid" => $deckDetails['deckid']
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
    
    public static function getDeckName($deckid) {
        $data = Database::runQuery("SELECT name FROM deck WHERE deckid = :deckid", array("deckid" => $deckid));
        return $data[0]['name'];
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