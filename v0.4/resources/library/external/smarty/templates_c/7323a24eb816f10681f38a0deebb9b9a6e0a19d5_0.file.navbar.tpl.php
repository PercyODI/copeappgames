<?php /* Smarty version 3.1.27, created on 2015-11-29 06:02:26
         compiled from "/home/ubuntu/workspace/v0.4/resources/templates/include/navbar.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:1954156236565a94f2211ae9_00199507%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7323a24eb816f10681f38a0deebb9b9a6e0a19d5' => 
    array (
      0 => '/home/ubuntu/workspace/v0.4/resources/templates/include/navbar.tpl',
      1 => 1448768864,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1954156236565a94f2211ae9_00199507',
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_565a94f2228478_12941821',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_565a94f2228478_12941821')) {
function content_565a94f2228478_12941821 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '1954156236565a94f2211ae9_00199507';
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
            <li><a href="browse_my_decks.php">My Decks</a></li>
            <li>|</li>
            <li>Logout</li>
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