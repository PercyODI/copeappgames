<?php
/* Smarty version 3.1.28-dev/77, created on 2015-11-26 16:17:51
  from "/home/ubuntu/workspace/v0.4/resources/templates/test.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.28-dev/77',
  'unifunc' => 'content_565730afaa44a2_88737852',
  'file_dependency' => 
  array (
    '29cff47fcd658bf61b65c1a7c1e763b9221b17b1' => 
    array (
      0 => '/home/ubuntu/workspace/v0.4/resources/templates/test.tpl',
      1 => 1448554669,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_565730afaa44a2_88737852 ($_smarty_tpl) {
?>
<h1><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</h1>
<p><?php echo $_smarty_tpl->tpl_vars['icon']->value;?>
</p>
<p><?php echo $_smarty_tpl->tpl_vars['description']->value;?>
</p>
<ul>
<?php
$_from = $_smarty_tpl->tpl_vars['gamepictures']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_item_0_saved_item = isset($_smarty_tpl->tpl_vars['item']) ? $_smarty_tpl->tpl_vars['item'] : false;
$_smarty_tpl->tpl_vars['item'] = new Smarty_Variable();
$__foreach_item_0_total = $_smarty_tpl->smarty->ext->_foreach->count($_from);
if ($__foreach_item_0_total) {
foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
$__foreach_item_0_saved_local_item = $_smarty_tpl->tpl_vars['item'];
?>
    <li><?php echo $_smarty_tpl->tpl_vars['item']->value;?>
</li>
<?php
$_smarty_tpl->tpl_vars['item'] = $__foreach_item_0_saved_local_item;
}
}
if ($__foreach_item_0_saved_item) {
$_smarty_tpl->tpl_vars['item'] = $__foreach_item_0_saved_item;
}
?>
</ul><?php }
}
