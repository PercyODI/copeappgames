<?php
/* Smarty version 3.1.28-dev/77, created on 2015-11-28 04:46:19
  from "/home/ubuntu/workspace/v0.4/resources/templates/object_card/deck_card.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.28-dev/77',
  'unifunc' => 'content_5659319baa4200_93024039',
  'file_dependency' => 
  array (
    'f97798bc65689f335c0ecec53714ff5ff5b78bcf' => 
    array (
      0 => '/home/ubuntu/workspace/v0.4/resources/templates/object_card/deck_card.tpl',
      1 => 1448685978,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5659319baa4200_93024039 ($_smarty_tpl) {
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
        <?php echo $_smarty_tpl->tpl_vars['description']->value;?>

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
