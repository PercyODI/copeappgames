<?php
/* Smarty version 3.1.28-dev/77, created on 2015-11-28 03:02:21
  from "/home/ubuntu/workspace/v0.4/resources/templates/view_deck.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.28-dev/77',
  'unifunc' => 'content_5659193d3845e6_78770235',
  'file_dependency' => 
  array (
    '35da9fe2a4818089245174e35ad9b38fba0ce926' => 
    array (
      0 => '/home/ubuntu/workspace/v0.4/resources/templates/view_deck.tpl',
      1 => 1448679740,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:layout.tpl' => 1,
  ),
),false)) {
function content_5659193d3845e6_78770235 ($_smarty_tpl) {
$_smarty_tpl->ext->_inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->ext->_inheritance->processBlock($_smarty_tpl, 0, 'content', array (
  0 => 'block_13219301155659193d35d681_92078091',
  1 => false,
  3 => 0,
  2 => 0,
));
$_smarty_tpl->ext->_inheritance->endChild($_smarty_tpl);
$_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:layout.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 2, false);
}
/* {block 'content'}  file:view_deck.tpl */
function block_13219301155659193d35d681_92078091($_smarty_tpl, $_blockParentStack) {
?>

<div class="page_content">
    <div class="content_title">
        <h2>Viewing <?php echo $_smarty_tpl->tpl_vars['deckname']->value;?>
</h2>
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
