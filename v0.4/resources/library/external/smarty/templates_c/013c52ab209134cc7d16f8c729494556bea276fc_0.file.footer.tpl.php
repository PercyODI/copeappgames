<?php /* Smarty version 3.1.27, created on 2015-12-06 22:03:23
         compiled from "/home/ubuntu/workspace/v0.4/resources/templates/include/footer.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:16207006235664b0ab4cfd92_33764799%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '013c52ab209134cc7d16f8c729494556bea276fc' => 
    array (
      0 => '/home/ubuntu/workspace/v0.4/resources/templates/include/footer.tpl',
      1 => 1448820209,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '16207006235664b0ab4cfd92_33764799',
  'variables' => 
  array (
    'copename' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5664b0ab4eaea1_92070571',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5664b0ab4eaea1_92070571')) {
function content_5664b0ab4eaea1_92070571 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '16207006235664b0ab4cfd92_33764799';
?>
<div class="page_footer">
    <ul class="footer_breadcrumbs">
        <li>Home></li>
        <li>Browse Decks</li>
    </ul>
    <?php if (isset($_SESSION['userid'])) {?>
    <p>You Are <?php $_smarty_tpl->tpl_vars['copename'] = new Smarty_Variable(User::getCopenameFromId($_SESSION['userid']), null, 0);
echo $_smarty_tpl->tpl_vars['copename']->value;?>
</p>
    <?php }?>
</div><?php }
}
?>