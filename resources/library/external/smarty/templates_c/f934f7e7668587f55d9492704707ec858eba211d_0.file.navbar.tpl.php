<?php /* Smarty version 3.1.27, created on 2015-12-09 18:37:49
         compiled from "/home/ubuntu/workspace/resources/templates/include/navbar.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:1496702857566874fdc13596_35773688%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f934f7e7668587f55d9492704707ec858eba211d' => 
    array (
      0 => '/home/ubuntu/workspace/resources/templates/include/navbar.tpl',
      1 => 1448809552,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1496702857566874fdc13596_35773688',
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_566874fdc231e8_01311858',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_566874fdc231e8_01311858')) {
function content_566874fdc231e8_01311858 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '1496702857566874fdc13596_35773688';
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