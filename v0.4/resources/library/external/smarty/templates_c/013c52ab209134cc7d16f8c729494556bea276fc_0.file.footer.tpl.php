<?php /* Smarty version 3.1.27, created on 2015-11-30 00:45:21
         compiled from "/home/ubuntu/workspace/v0.4/resources/templates/include/footer.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:18546309565b9c21440e18_21569026%%*/
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
  'nocache_hash' => '18546309565b9c21440e18_21569026',
  'variables' => 
  array (
    'copename' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_565b9c2145ec32_53259036',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_565b9c2145ec32_53259036')) {
function content_565b9c2145ec32_53259036 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '18546309565b9c21440e18_21569026';
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