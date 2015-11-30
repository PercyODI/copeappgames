<?php /* Smarty version 3.1.27, created on 2015-11-30 04:12:09
         compiled from "/home/ubuntu/workspace/v0.4/resources/templates/object_card/deck_card.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:801877926565bcc99b09dd6_13582016%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f97798bc65689f335c0ecec53714ff5ff5b78bcf' => 
    array (
      0 => '/home/ubuntu/workspace/v0.4/resources/templates/object_card/deck_card.tpl',
      1 => 1448854257,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '801877926565bcc99b09dd6_13582016',
  'variables' => 
  array (
    'icon' => 0,
    'name' => 0,
    'description' => 0,
    'deckid' => 0,
    'userid' => 0,
    'usercopename' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_565bcc99b28544_28095813',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_565bcc99b28544_28095813')) {
function content_565bcc99b28544_28095813 ($_smarty_tpl) {
if (!is_callable('smarty_modifier_truncate')) require_once '/home/ubuntu/workspace/v0.4/resources/library/external/smarty/libs/plugins/modifier.truncate.php';
if (!is_callable('smarty_modifier_capitalize')) require_once '/home/ubuntu/workspace/v0.4/resources/library/external/smarty/libs/plugins/modifier.capitalize.php';

$_smarty_tpl->properties['nocache_hash'] = '801877926565bcc99b09dd6_13582016';
?>
<div class="card deck-card">
    <div class="deck-icon">
        <i class="fa fa-4x <?php echo $_smarty_tpl->tpl_vars['icon']->value;?>
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
            <?php if ($_smarty_tpl->tpl_vars['userid']->value == $_SESSION['userid']) {?>
            <li><a href="edit_deck.php?deckid=<?php echo $_smarty_tpl->tpl_vars['deckid']->value;?>
">Edit Deck</a></li>
            <?php }?>
            <li><a href="browse_decks.php?userid=<?php echo $_smarty_tpl->tpl_vars['userid']->value;?>
">Browse <?php echo smarty_modifier_capitalize($_smarty_tpl->tpl_vars['usercopename']->value);?>
's Decks</a></li>
        </ul>
    </div>
</div><?php }
}
?>