<?php

/*  Database must be passed an array containing an associative array
 *  that holds the database information.
 */
 
require_once("config.php");

class Database {
    protected $dbname = "copeappgamesdb";
    protected $username = "b02aa903c7d012";
    protected $password = "0c92ef9e";
    protected $host = "us-cdbr-azure-central-a.cloudapp.net";
    protected $port = 3306;
    protected $conn;
    
    function __construct($dbarray) {
        if(isset($dbarray['dbname'])) {
            $this->dbname = $dbarray['dbname'];
        }
        if(isset($dbarray['username'])) {
            $this->username = $dbarray['username'];
        }
        if(isset($dbarray['password'])) {
            $this->password = $dbarray['password'];
        }
        if(isset($dbarray['host'])) {
            $this->host = $dbarray['host'];
        }
        if(isset($dbarray['port'])) {
            $this->port = $dbarray['port'];
        }
        
        try {
            $this->conn = new PDO("mysql:host=" . $this->host . ";dbname=" . $this->dbname . ";port=". $this->port, $username, $password);
            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $this->conn->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
        } catch(PDOException $e) {
            echo "ERROR: " . $e->getMessage();
        }
    }
    
    function getConnection() {
        return $this->conn;
    }
    
    public static function newConn($dbarray) {
        if(isset($dbarray['dbname'])) {
            $dbname = $dbarray['dbname'];
        }
        if(isset($dbarray['username'])) {
            $username = $dbarray['username'];
        }
        if(isset($dbarray['password'])) {
            $password = $dbarray['password'];
        }
        if(isset($dbarray['host'])) {
            $host = $dbarray['host'];
        }
        if(isset($dbarray['port'])) {
            $port = $dbarray['port'];
        }
        
        try {
            $conn = new PDO("mysql:host=" . $host . ";dbname=" . $dbname . ";port=". $port, $username, $password);
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $conn->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
            return $conn;
        } catch(PDOException $e) {
            echo "ERROR: " . $e->getMessage();
        }
    }
    
    public static function runQuery($queryStr, $bind_params = array()) {
        global $config;
        try {
            $conn = new PDO("mysql:host=" . $config['db']['host'] 
                            . ";dbname=" . $config['db']['dbname'] 
                            . ";port=". $config['db']['port']
                            , $config['db']['username']
                            , $config['db']['password']
            );
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $conn->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
        } catch(PDOException $e) {
            echo "ERROR: " . $e->getMessage();
        }
        
        try {
            $stmt = $conn->prepare($queryStr);
            $stmt->execute($bind_params);
            
            $data = $stmt->fetchAll(PDO::FETCH_ASSOC);
            return $data;
        } catch(PDOException $e) {
            echo "Query Error: " . $e->getMessage();
        }
    }
}

?>
