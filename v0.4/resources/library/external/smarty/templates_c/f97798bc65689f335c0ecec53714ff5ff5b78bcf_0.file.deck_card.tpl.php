<?php
/* Smarty version 3.1.28-dev/77, created on 2015-11-28 19:52:50
  from "/home/ubuntu/workspace/v0.4/resources/templates/object_card/deck_card.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.28-dev/77',
  'unifunc' => 'content_565a0612dc7dd9_56759076',
  'file_dependency' => 
  array (
    'f97798bc65689f335c0ecec53714ff5ff5b78bcf' => 
    array (
      0 => '/home/ubuntu/workspace/v0.4/resources/templates/object_card/deck_card.tpl',
      1 => 1448740370,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_565a0612dc7dd9_56759076 ($_smarty_tpl) {
if (!is_callable('smarty_modifier_truncate')) require_once '/home/ubuntu/workspace/v0.4/resources/library/external/smarty/libs/plugins/modifier.truncate.php';
?>
<div class="card deck-card">
    <div class="deck-icon">
        <i class="fa fa-4x fa-<?php echo $_smarty_tpl->tpl_vars['icon']->value;?>
"></i>
    </div>
    <div class="deck-title">
        <?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['name']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>

    </div>
    <div class="deck-description">
        <?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['description']->value,256);?>

    </div>
    <div class="deck_dropdown dropdown">
        <button class="btn btn-default dropdown-toggle" type="button" data-toggle="dropdown">
            Deck Action
            <i class="fa fa-caret-down"></i>
        </button>
        <ul class="dropdown-menu">
            <li><a href="view_deck.php?deckid=<?php echo $_smarty_tpl->tpl_vars['deckid']->value;?>
">View Deck</a></li>
            <li><a href="#">Copy Deck</a></li>
        </ul>
    </div>
</div><?php }
}
