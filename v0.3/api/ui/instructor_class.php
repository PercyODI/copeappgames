<?php

require_once("/home/ubuntu/workspace/v0.3/api/connect.php");

class instructor_class {
    protected $instructorid = "";
    protected $fname = "Missing";
    protected $lname = "Missing";
    protected $copename = "Missing";
    
    function __construct($constructInstructorid) {
        global $db;
        try {
            $stmt = $db->prepare("
                SELECT * 
                FROM instructor
                WHERE instructorid = :instructorid");
            $stmt->execute(array("instructorid" => $constructInstructorid));
            $data = $stmt->fetchAll(PDO::FETCH_ASSOC);
            $data = $data[0];
            
            if(isset($data['instructorid'])) {
                $this->instructorid = $data['instructorid'];
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
    
    function getinstructorid() {
        return $this->instructorid;
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