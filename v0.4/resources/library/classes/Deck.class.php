<?php

require_once('config.php');

class Deck {
    protected $deckid = "";
    protected $name = "";
    protected $userid = "";
    protected $games = array();
    
    function __construct($constructDeckid) {
        $data = Database::runQuery(
            "SELECT deckid, name, userid, GROUP_CONCAT(game.gameid) AS games
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
        if(isset($data['games'])) {
            $gameids = explode(',', $data['games']);
            foreach($gameids as $gameid) {
                $this->games[] = new Game($gameid);
            }
        }
    }
}

?>