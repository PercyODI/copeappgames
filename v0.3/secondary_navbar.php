<?php
    switch($_POST['primaryMenu']) {
        case "games":
?>
<div id="sn-menu">
    <ul>
        <li class="sn-icon"><i class="fa fa-binoculars fa-3x"></i></li>
        <li class="sn-icon"><i class="fa fa-list-ol fa-3x"></i></li>
        <li class="sn-icon"><i class="fa fa-history fa-3x"></i></li>
        <li class="sn-icon"><i class="fa fa-rocket fa-3x"></i></li>
    </ul>
</div>
<?php
            break;
        case "group":
?>
<div id="sn-menu">
    <ul>
        <li class="sn-icon"><i class="fa fa-gamepad fa-3x"></i></li>
        <li class="sn-icon"><i class="fa fa-users fa-3x"></i></li>
        <li class="sn-icon"><i class="fa fa-child fa-3x"></i></li>
    </ul>
</div>
<?php
            break;
        case "scouts":
?>
<div id="sn-menu">
    <ul>
        <li class="sn-icon"><i class="fa fa-gamepad fa-3x"></i></li>
        <li class="sn-icon"><i class="fa fa-users fa-3x"></i></li>
        <li class="sn-icon"><i class="fa fa-child fa-3x"></i></li>
        <li class="sn-icon"><i class="fa fa-tasks fa-3x"></i></li>
    </ul>
</div>
<?php
            break;
        case "stats":
?>
<div id="sn-menu">
    <ul>
        <li class="sn-icon"><i class="fa fa-gamepad fa-3x"></i></li>
        <li class="sn-icon"><i class="fa fa-users fa-3x"></i></li>
        <li class="sn-icon"><i class="fa fa-child fa-3x"></i></li>
        <li class="sn-icon"><i class="fa fa-tasks fa-3x"></i></li>
    </ul>
</div>
<?php
            break;
        default:
            echo "ERROR! ERROR!";
    }
?>
