<?php

require_once("/home/ubuntu/workspace/v0.3/api/connect.php");
require_once("group_game_card_class.php");
require_once("instructor_class.php");
require_once("scout_class.php");

class group_class {
    protected $groupid = "";
    protected $camp = "No Camp Selected";
    protected $dateformed = "0000-00-00";
    protected $name = "No Name Selected";
    protected $scouts = array();
    protected $instructors = array();
    protected $gamequeue = array();
    protected $stats = array();
    
    function __construct($constructGroupid) {
        global $db;
        try {
            $stmt = $db->prepare("
                SELECT groupid,
                       camp,
                       dateformed,
                       name,
                       GROUP_CONCAT(DISTINCT scoutid) as scouts,
                       GROUP_CONCAT(DISTINCT instructorid) as instructors,
                       GROUP_CONCAT(DISTINCT gameid) as gamequeue
                FROM cope_group
                LEFT OUTER JOIN scouts_groups USING (groupid)
                LEFT OUTER JOIN groups_instructors USING (groupid)
                LEFT OUTER JOIN group_game_queue USING (groupid)
                WHERE groupid = :groupid
                GROUP BY groupid");
            $stmt->execute(array("groupid" => $constructGroupid));
            $data = $stmt->fetchAll(PDO::FETCH_ASSOC);
            $data = $data[0];
            if(isset($data['groupid'])) {
                $this->groupid = $data['groupid'];
            }
            if(isset($data['camp'])) {
                $this->camp = $data['camp'];
            }
            if(isset($data['dateformed'])) {
                $this->dateformed = $data['dateformed'];
            }
            if(isset($data['name'])) {
                $this->name = $data['name'];
            }
            if(isset($data['scouts'])) {
                $tempScouts = explode(',', $data['scouts']);
                foreach($tempScouts as $temp) {
                    $this->scouts[] = new scout_class($temp);
                }
            }
            if(isset($data['instructors'])) {
                $tempInstructors = explode(',', $data['instructors']);
                foreach($tempInstructors as $temp) {
                    $this->instructors[] = new instructor_class($temp);
                }
            }
            if(isset($data['gamequeue'])) {
                $tempGamequeue = explode(',', $data['gamequeue']);
                foreach($tempGamequeue as $temp) {
                    $this->gamequeue[] = new group_game_card_class($data['groupid'], $temp);
                }
            }
        } catch(Exception $e) {
            echo "Error: " . $e->getMessage();
        }
        
        try {
            $stmt = $db->prepare("
                SELECT * 
                FROM group_stats
                WHERE groupid = :groupid");
            $stmt->execute(array("groupid" => $constructGroupid));
            $data = $stmt->fetchAll(PDO::FETCH_ASSOC);
            $data = $data[0];
            $this->stats = array(
                "communication" => $data['communication'],
                "planning" => $data['planning'],
                "trust" => $data['trust'],
                "teamwork" => $data['teamwork'],
                "leadership" => $data['leadership'],
                "decisionmaking" => $data['decisionmaking'],
                "problemsolving" => $data['problemsolving'],
                "selfesteem" => $data['selfesteem']
            );
        } catch(Exception $e) {
            echo "Error: " . $e->getMessage();
        }
    }
    
    function getGroupid() {
        return $this->groupid;
    }
    
    function getCamp() {
        return $this->camp;
    }
    
    function getDateformed() {
        return $this->dateformed;
    }
    
    function getName() {
        return $this->name;
    }
    
    function getScouts() {
        return $this->scouts;
    }
    
    function getInstructors() {
        return $this->instructors;
    }
    
    function getGamequeue() {
        return $this->gamequeue;
    }
    
    function getStats() {
        return $this->stats;
    }
    
}

// $test = new group_class(1);

// print_r($test);