<?php /* Smarty version 3.1.27, created on 2015-12-08 01:15:07
         compiled from "/var/www/resources/templates/include/navbar.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:202994638656662f1b086235_94551883%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c845b7a9121d20225593636d72640abaa2b97294' => 
    array (
      0 => '/var/www/resources/templates/include/navbar.tpl',
      1 => 1449455292,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '202994638656662f1b086235_94551883',
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_56662f1b0ac499_13439981',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_56662f1b0ac499_13439981')) {
function content_56662f1b0ac499_13439981 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '202994638656662f1b086235_94551883';
?>
<div class="page_navbar">
    <div class="page_navbar_left">
        <img src="img/content/climbing_crop.jpg" id="carabiner_pic">
    COPEapp Games
    </div>
    <div class="page_navbar_right">
        <ul class='nav_ul_flex'>
            <li><a href="browse_decks.php">Browse Decks</a></li>
            <?php if (isset($_SESSION['userid'])) {?>
            <li>|</li>
            <li><a href="browse_decks.php?userid=<?php echo $_SESSION['userid'];?>
">My Decks</a></li>
            <li>|</li>
            <li><a href="ajax/logout.php">Logout</a></li>
            <?php } else { ?>
            <li>|</li>
            <li><a href="register.php">Register Now!</a></li>
            <li>|</li>
            <li><a href="index.php">Log In</a></li>
            <?php }?>
        </ul>
    </div>
</div><?php }
}
?>