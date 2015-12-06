<?php /* Smarty version 3.1.27, created on 2015-12-06 22:03:23
         compiled from "/home/ubuntu/workspace/v0.4/resources/templates/include/navbar.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:17632253355664b0ab4b0138_50728633%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7323a24eb816f10681f38a0deebb9b9a6e0a19d5' => 
    array (
      0 => '/home/ubuntu/workspace/v0.4/resources/templates/include/navbar.tpl',
      1 => 1448809552,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '17632253355664b0ab4b0138_50728633',
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5664b0ab4c14b5_79771456',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5664b0ab4c14b5_79771456')) {
function content_5664b0ab4c14b5_79771456 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '17632253355664b0ab4b0138_50728633';
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