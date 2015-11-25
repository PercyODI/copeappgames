<?php

header('Content-type: application/json');
ob_start();

require_once("ui/group_class.php");
require_once("ui/instructor_class.php");
require_once("ui/scout_class.php");
require_once("ui/group_game_card_class.php");

if(!isset($_GET['groupid']) or !is_numeric($_GET['groupid'])) {
    $_GET['groupid'] = 1;
} else {
    $_GET['groupid'] = (int) $_GET['groupid'];
}

$group = new group_class($_GET['groupid']);

?>



<h1><?php echo $group->getName(); ?></h1>
<div class="sessionLeft">
    <?php
    foreach($group->getGamequeue() as $game) {
        echo $game->getCardFrontHTML();
    }
    ?>
</div>
<div class="sessionRight card">
    <canvas id="myChart" width="400" height="400"></canvas>
</div>

<?php

$htmlOutput = ob_get_contents();
ob_end_clean();

echo json_encode(array(
    "htmlOutput" => $htmlOutput, 
    "stats" => $group->getStats())
);
