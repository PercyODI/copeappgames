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
    
    public static function validateUser($username, $password) {
        $data = Database::runQuery("SELECT * FROM user WHERE username = :username",
                                   array('username' => $username));
        if(count($data) == 1) {
            if(password_verify($password, $data[0]['password'])) {
                return new User($data[0]['userid']);
            } else {
                return false;
            }
        } else {
            return false;
        }
    }
    
    public static function newUser($userDetails) {
        $return = array();
        if(!is_array($userDetails)) {
            $return['status'] = 'error';
            $return['message'] = 'Expecting an Array';
            return $return;
        }
        
        if($userDetails['password'] != $userDetails['confirmpassword']) {
            $return['status'] = 'error';
            $return['message'] = 'Passwords Don\'t Match';
            return $return;
        }
        try {
            $usernameTest = Database::runQuery("SELECT * FROM user WHERE username = :username"
                                               , array("username" => $userDetails['username']));
            if(count($usernameTest) > 0) {
                $return['status'] = 'error';
                $return['message'] = 'Username Taken';
                return $return;
            }
        } catch (Exception $e) {
            $return['status'] = 'error';
            $return['message'] = 'Database Error';
            return $return;
        }
        
        // Convert password to hash
        $userDetails['password'] = password_hash($userDetails['password'], PASSWORD_DEFAULT);
        try {
            Database::runQuery("INSERT INTO user (username, password, fname, lname, copename, create_date, last_modified) 
                                VALUES (:username, :password, :fname, :lname, :copename, CURDATE(), NOW())"
                               , array(
                                   "username" => $userDetails['username'],
                                   "password" => $userDetails['password'], 
                                   "fname" => $userDetails['fname'], 
                                   "lname" => $userDetails['lname'], 
                                   "copename" => $userDetails['copename'])
                               );
            $return['status'] = 'success';
            return $return;
        } catch (Exception $e) {
            $return['status'] = 'error';
            $return['message'] = 'Database Error';
            return $return;
        }
    }
    
    public static function getCopenameFromId($userid) {
        try {
            $data = Database::runQuery("SELECT username, copename FROM user WHERE userid = :userid", array("userid" => $userid));
            if($data[0]['copename']) {
                return $data[0]['copename'];
            } else {
                return $data[0]['username'];
            }
            
        } catch (Exception $e) {
            echo "getCopenameFromId Error: " . $e->getMessage();
        }
    }
}