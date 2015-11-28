<?php
/* Smarty version 3.1.28-dev/77, created on 2015-11-28 04:37:56
  from "/home/ubuntu/workspace/v0.4/resources/templates/browse_decks.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.28-dev/77',
  'unifunc' => 'content_56592fa479b1a6_45228988',
  'file_dependency' => 
  array (
    'b84c4563f9a9a3806df58b59ab0baaedafee3ebe' => 
    array (
      0 => '/home/ubuntu/workspace/v0.4/resources/templates/browse_decks.tpl',
      1 => 1448685187,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:layout.tpl' => 1,
  ),
),false)) {
function content_56592fa479b1a6_45228988 ($_smarty_tpl) {
$_smarty_tpl->ext->_inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->ext->_inheritance->processBlock($_smarty_tpl, 0, 'content', array (
  0 => 'block_59269418156592fa477ed83_62413411',
  1 => false,
  3 => 0,
  2 => 0,
));
$_smarty_tpl->ext->_inheritance->endChild($_smarty_tpl);
$_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:layout.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 2, false);
}
/* {block 'content'}  file:browse_decks.tpl */
function block_59269418156592fa477ed83_62413411($_smarty_tpl, $_blockParentStack) {
?>

<div class="page_content">
    <div class="content_title">
        <h2>Browse Decks</h2>
    </div>
    <div class="content_search form-inline">
        <div class="form-group">
            <input type="text" class="form-control">
            <button type="button" class="btn btn-primary">Search</button>
        </div> <!-- /form-group -->
    </div> <!-- /content_search -->
    <div class="card_grid">
    <?php
$_from = $_smarty_tpl->tpl_vars['decks']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_deck_0_saved_item = isset($_smarty_tpl->tpl_vars['deck']) ? $_smarty_tpl->tpl_vars['deck'] : false;
$_smarty_tpl->tpl_vars['deck'] = new Smarty_Variable();
$__foreach_deck_0_total = $_smarty_tpl->smarty->ext->_foreach->count($_from);
if ($__foreach_deck_0_total) {
foreach ($_from as $_smarty_tpl->tpl_vars['deck']->value) {
$__foreach_deck_0_saved_local_item = $_smarty_tpl->tpl_vars['deck'];
?>
        <?php echo $_smarty_tpl->tpl_vars['deck']->value->smartyCard('object_card/deck_card.tpl');?>

    <?php
$_smarty_tpl->tpl_vars['deck'] = $__foreach_deck_0_saved_local_item;
}
}
if ($__foreach_deck_0_saved_item) {
$_smarty_tpl->tpl_vars['deck'] = $__foreach_deck_0_saved_item;
}
?>
    </div>
</div> <!-- /page_content -->
<?php
}
/* {/block 'content'} */
}
