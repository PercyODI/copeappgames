<?php /* Smarty version 3.1.27, created on 2015-12-07 01:53:30
         compiled from "/home/ubuntu/workspace/v0.4/resources/templates/object_card/game_card.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:3530874575664e69a182192_70243749%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4f4c4ae7b81a9d26e814770a21b89e686e81e301' => 
    array (
      0 => '/home/ubuntu/workspace/v0.4/resources/templates/object_card/game_card.tpl',
      1 => 1449453208,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3530874575664e69a182192_70243749',
  'variables' => 
  array (
    'icon' => 0,
    'title' => 0,
    'description' => 0,
    'gameid' => 0,
    'userid' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5664e69a19b416_56595903',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5664e69a19b416_56595903')) {
function content_5664e69a19b416_56595903 ($_smarty_tpl) {
if (!is_callable('smarty_modifier_truncate')) require_once '/home/ubuntu/workspace/v0.4/resources/library/external/smarty/libs/plugins/modifier.truncate.php';

$_smarty_tpl->properties['nocache_hash'] = '3530874575664e69a182192_70243749';
?>
<div class="card game-card">
    <div class="game-icon">
        <i class="fa fa-4x <?php echo $_smarty_tpl->tpl_vars['icon']->value;?>
"></i>
    </div>
    <div class="game-title">
        <?php echo $_smarty_tpl->tpl_vars['title']->value;?>

    </div>
    <div class="game-description">
        <?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['description']->value,256);?>

    </div>
    <div class="game_dropdown dropdown">
        <button class="btn btn-default dropdown-toggle" type="button" data-toggle="dropdown">
            Game Action
            <i class="fa fa-caret-down"></i>
        </button>
        <ul class="dropdown-menu">
            <li><a href="view_game.php?gameid=<?php echo $_smarty_tpl->tpl_vars['gameid']->value;?>
">View Game</a></li>
            <?php if ($_smarty_tpl->tpl_vars['userid']->value == $_SESSION['userid']) {?>
            <li><a href="edit_game.php?gameid=<?php echo $_smarty_tpl->tpl_vars['gameid']->value;?>
">Edit Game</a></li>
            <?php }?>
        </ul>
    </div>
</div><?php }
}
?>