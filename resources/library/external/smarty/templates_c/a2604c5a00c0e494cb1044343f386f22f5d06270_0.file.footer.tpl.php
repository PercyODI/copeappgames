<?php /* Smarty version 3.1.27, created on 2015-12-09 18:33:07
         compiled from "/home/ubuntu/workspace/resources/templates/include/footer.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:1645768008566873e3efd6f2_31824336%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a2604c5a00c0e494cb1044343f386f22f5d06270' => 
    array (
      0 => '/home/ubuntu/workspace/resources/templates/include/footer.tpl',
      1 => 1449451326,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1645768008566873e3efd6f2_31824336',
  'variables' => 
  array (
    'copename' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_566873e3f0be56_20400913',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_566873e3f0be56_20400913')) {
function content_566873e3f0be56_20400913 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '1645768008566873e3efd6f2_31824336';
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