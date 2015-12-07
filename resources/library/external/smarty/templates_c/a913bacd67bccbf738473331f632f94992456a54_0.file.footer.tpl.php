<?php /* Smarty version 3.1.27, created on 2015-12-07 16:34:52
         compiled from "/var/www/resources/templates/include/footer.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:106201885665b52c50ffe1_47100083%%*/
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
  'nocache_hash' => '106201885665b52c50ffe1_47100083',
  'variables' => 
  array (
    'copename' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5665b52c524242_66767456',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5665b52c524242_66767456')) {
function content_5665b52c524242_66767456 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '106201885665b52c50ffe1_47100083';
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