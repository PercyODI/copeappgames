<?php

require_once("config.php");

class User {
    protected $userid = "";
    protected $username = "";
    protected $fname = "";
    protected $lname = "";
    protected $copename = "";
    protected $decks = array();
    
    function __construct($constructUserid) {
        $data = Database::runQuery(
            "SELECT userid,
                    username,
                    password,
                    fname,
                    lname,
                    copename,
                    GROUP_CONCAT(deck.deckid) as decks
            FROM user
            LEFT OUTER JOIN deck USING (userid)
            WHERE userid = :userid
            GROUP BY userid"
            , array("userid" => $constructUserid)
        );
        $data = $data[0];
        if(isset($data['userid'])) {
            $this->userid = $data['userid'];
        }
        if(isset($data['username'])) {
            $this->username = $data['username'];
        }
        if(isset($data['fname'])) {
            $this->fname = $data['fname'];
        }
        if(isset($data['lname'])) {
            $this->lname = $data['lname'];
        }
        if(isset($data['copename'])) {
            $this->copename = $data['copename'];
        }
        if(isset($data['decks'])) {
            $this->decks = explode(",", $data['decks']);
        }
    }
    
    function getUserid() {
        return $this->userid;
    }
    function getUsername() {
        return $this->username;
    }
    function getFname() {
        return $this->fname;
    }
    function getLname() {
        return $this->lname;
    }
    function getCopename() {
        return $this->copename;
    }
    function getDecks() {
        return $this->decks;
    }
}