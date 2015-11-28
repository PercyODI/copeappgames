<?php
/* Smarty version 3.1.28-dev/77, created on 2015-11-28 19:47:42
  from "/home/ubuntu/workspace/v0.4/resources/templates/deck/view_deck.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.28-dev/77',
  'unifunc' => 'content_565a04de783136_70585422',
  'file_dependency' => 
  array (
    '1b4b861d5dfa72ed8e602c0a9e83aa78b3cb6e83' => 
    array (
      0 => '/home/ubuntu/workspace/v0.4/resources/templates/deck/view_deck.tpl',
      1 => 1448738691,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:base.tpl' => 1,
  ),
),false)) {
function content_565a04de783136_70585422 ($_smarty_tpl) {
$_smarty_tpl->ext->_inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->ext->_inheritance->processBlock($_smarty_tpl, 0, 'content', array (
  0 => 'block_1415218577565a04de76ace9_62973269',
  1 => false,
  3 => 0,
  2 => 0,
));
$_smarty_tpl->ext->_inheritance->endChild($_smarty_tpl);
$_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:base.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 2, false);
}
/* {block 'content'}  file:deck/view_deck.tpl */
function block_1415218577565a04de76ace9_62973269($_smarty_tpl, $_blockParentStack) {
?>

<div class="page_content">
    <div class="content_title">
        <h2>Viewing <?php echo $_smarty_tpl->tpl_vars['deckname']->value;?>
</h2>
        <h3>Created By <?php echo $_smarty_tpl->tpl_vars['usercopename']->value;?>
</h3>
    </div>
    <div class="card_grid">
    <?php
$_from = $_smarty_tpl->tpl_vars['games']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_game_0_saved_item = isset($_smarty_tpl->tpl_vars['game']) ? $_smarty_tpl->tpl_vars['game'] : false;
$_smarty_tpl->tpl_vars['game'] = new Smarty_Variable();
$__foreach_game_0_total = $_smarty_tpl->smarty->ext->_foreach->count($_from);
if ($__foreach_game_0_total) {
foreach ($_from as $_smarty_tpl->tpl_vars['game']->value) {
$__foreach_game_0_saved_local_item = $_smarty_tpl->tpl_vars['game'];
?>
        <?php echo $_smarty_tpl->tpl_vars['game']->value->smartyCard('object_card/game_card.tpl');?>

    <?php
$_smarty_tpl->tpl_vars['game'] = $__foreach_game_0_saved_local_item;
}
} else {
?>
        <div class="card"><h3>No Games have been added to this Deck!</h3></div>
    <?php
}
if ($__foreach_game_0_saved_item) {
$_smarty_tpl->tpl_vars['game'] = $__foreach_game_0_saved_item;
}
?>
    </div>
</div> <!-- /page_content -->
<?php
}
/* {/block 'content'} */
}
