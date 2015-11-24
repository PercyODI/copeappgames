<?php

require_once("/home/ubuntu/workspace/v0.3/api/connect.php");

class scout_class {
    protected $scoutid = "";
    protected $fname = "Missing";
    protected $lname = "Missing";
    protected $copename = "Missing";
    
    function __construct($constructScoutid) {
        global $db;
        try {
            $stmt = $db->prepare("
                SELECT * 
                FROM scout
                WHERE scoutid = :scoutid");
            $stmt->execute(array("scoutid" => $constructScoutid));
            $data = $stmt->fetchAll(PDO::FETCH_ASSOC);
            $data = $data[0];
            
            if(isset($data['scoutid'])) {
                $this->scoutid = $data['scoutid'];
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
        } catch(Exception $e) {
            echo "Error: " . $e->getMessage();
        }
    }
    
    function getScoutid() {
        return $this->scoutid;
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
}

?>