<style>
    .secondary-menu {
        text-align: center;
    }

    .secondary-menu > ul > li {
        display: inline-block;
        margin-left: 20%;
    }
    
    .secondary-menu > ul > li:first-child {
        margin-left: 0;
    }
    
    .secondary-menu > ul > li i, .secondary-menu > ul > li i {
        display: block;
    }
</style>
<?php
    switch($_GET['primaryMenu']) {
        case "games":
?>
<div class="secondary-menu">
    <ul>
        <li class="secondary-menu-icon"><i class="fa fa-binoculars fa-3x"></i></li>
        <li class="secondary-menu-icon"><i class="fa fa-list-ol fa-3x"></i></li>
        <li class="secondary-menu-icon"><i class="fa fa-history fa-3x"></i></li>
        <li class="secondary-menu-icon"><i class="fa fa-rocket fa-3x"></i></li>
    </ul>
</div>
<?php
            break;
        case "group":
?>
<div class="secondary-menu">
    <ul>
        <li class="secondary-menu-icon"><i class="fa fa-gamepad fa-3x"></i></li>
        <li class="secondary-menu-icon"><i class="fa fa-users fa-3x"></i></li>
        <li class="secondary-menu-icon"><i class="fa fa-child fa-3x"></i></li>
        <li class="secondary-menu-icon"><i class="fa fa-tasks fa-3x"></i></li>
    </ul>
</div>
<?php
            break;
        case "scouts":
?>
<div class="secondary-menu">
    <ul>
        <li class="secondary-menu-icon"><i class="fa fa-gamepad fa-3x"></i></li>
        <li class="secondary-menu-icon"><i class="fa fa-users fa-3x"></i></li>
        <li class="secondary-menu-icon"><i class="fa fa-child fa-3x"></i></li>
        <li class="secondary-menu-icon"><i class="fa fa-tasks fa-3x"></i></li>
    </ul>
</div>
<?php
            break;
        case "stats":
?>
<div class="secondary-menu">
    <ul>
        <li class="secondary-menu-icon"><i class="fa fa-gamepad fa-3x"></i></li>
        <li class="secondary-menu-icon"><i class="fa fa-users fa-3x"></i></li>
        <li class="secondary-menu-icon"><i class="fa fa-child fa-3x"></i></li>
        <li class="secondary-menu-icon"><i class="fa fa-tasks fa-3x"></i></li>
    </ul>
</div>
<?php
            break;
        default:
            echo "";
    }
