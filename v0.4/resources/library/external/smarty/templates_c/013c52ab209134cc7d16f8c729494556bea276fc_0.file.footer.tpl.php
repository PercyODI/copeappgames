<?php /* Smarty version 3.1.27, created on 2015-11-30 04:12:09
         compiled from "/home/ubuntu/workspace/v0.4/resources/templates/include/footer.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:2129172508565bcc99b48d18_60412662%%*/
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
  'nocache_hash' => '2129172508565bcc99b48d18_60412662',
  'variables' => 
  array (
    'copename' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_565bcc99b5b2a5_65564908',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_565bcc99b5b2a5_65564908')) {
function content_565bcc99b5b2a5_65564908 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '2129172508565bcc99b48d18_60412662';
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