<?php /* Smarty version 3.1.27, created on 2015-11-29 03:59:10
         compiled from "/home/ubuntu/workspace/v0.4/resources/templates/object_card/game_card.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:1970189943565a780edcedd7_80342323%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4f4c4ae7b81a9d26e814770a21b89e686e81e301' => 
    array (
      0 => '/home/ubuntu/workspace/v0.4/resources/templates/object_card/game_card.tpl',
      1 => 1448740386,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1970189943565a780edcedd7_80342323',
  'variables' => 
  array (
    'icon' => 0,
    'title' => 0,
    'description' => 0,
    'gameid' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_565a780edda382_69689788',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_565a780edda382_69689788')) {
function content_565a780edda382_69689788 ($_smarty_tpl) {
if (!is_callable('smarty_modifier_truncate')) require_once '/home/ubuntu/workspace/v0.4/resources/library/external/smarty/libs/plugins/modifier.truncate.php';

$_smarty_tpl->properties['nocache_hash'] = '1970189943565a780edcedd7_80342323';
?>
<div class="card game-card">
    <div class="game-icon">
        <i class="fa fa-4x fa-<?php echo $_smarty_tpl->tpl_vars['icon']->value;?>
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
            <li><a href="#">Copy Game</a></li>
        </ul>
    </div>
</div><?php }
}
?>