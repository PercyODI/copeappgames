<?php /* Smarty version 3.1.27, created on 2015-12-08 01:15:07
         compiled from "/var/www/resources/templates/include/footer.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:167047343156662f1b0b2207_00896621%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a913bacd67bccbf738473331f632f94992456a54' => 
    array (
      0 => '/var/www/resources/templates/include/footer.tpl',
      1 => 1449455292,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '167047343156662f1b0b2207_00896621',
  'variables' => 
  array (
    'copename' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_56662f1b0d27f3_11793155',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_56662f1b0d27f3_11793155')) {
function content_56662f1b0d27f3_11793155 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '167047343156662f1b0b2207_00896621';
?>
<div class="page_footer">
    <ul class="footer_breadcrumbs">
        <!--<li>Home></li>-->
        <!--<li>Browse Decks</li>-->
    </ul>
    <?php if (isset($_SESSION['userid'])) {?>
    <p>You Are <?php $_smarty_tpl->tpl_vars['copename'] = new Smarty_Variable(User::getCopenameFromId($_SESSION['userid']), null, 0);
echo $_smarty_tpl->tpl_vars['copename']->value;?>
</p>
    <?php }?>
</div><?php }
}
?>