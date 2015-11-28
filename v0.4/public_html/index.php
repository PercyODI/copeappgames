<?php

require_once("config.php");

try {
	$deck = new Deck(1);
	echo $deck->smartyCard('object_card/deck_card.tpl');
    // $test = new Game(1);
    
    // echo $test->returnSmartyTemplate($config['smarty'], 'test.tpl');
    // print_r(array_values($replaceArr));
    
} catch (Exception $e) {
    echo "Error: " . $e->getMessage();
}

?>