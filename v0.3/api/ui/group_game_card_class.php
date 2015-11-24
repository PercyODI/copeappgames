<?php

require_once("/home/ubuntu/workspace/v0.3/api/connect.php");
require_once("game_card_class.php");

class group_game_card_class extends game_card_class {
    protected $orderindex = 0;
    
    function __construct($constructGroupId, $constructGameid) {
        global $db;
        parent::__construct($constructGameid);
        try {
            $stmt = $db->prepare("
                SELECT queue_index
                FROM group_game_queue
                WHERE groupid = :groupid
                AND gameid = :gameid");
            $stmt->execute(array(
                "groupid" => $constructGroupId,
                "gameid" => $constructGameid));
            $data = $stmt->fetchAll(PDO::FETCH_ASSOC);
            $data = $data[0];
            if(isset($data['queue_index'])) {
                $this->orderindex = $data['queue_index'];
            }
        } catch(Exception $e) {
            echo "Error: " . $e->getMessage();
        }
    }
    
    // function getCardFrontHTML() {
    //     $parentStr = parent::getCardFrontHTML();
    //     $return = $parentStr . "<div class='actions'><a href='#'>Remove</a><a href='#'>Played</a></div>";
    //     return $return;
    // }
}

// $test = new group_game_card_class(1, 2);

// echo $test->getCardFrontHTML();