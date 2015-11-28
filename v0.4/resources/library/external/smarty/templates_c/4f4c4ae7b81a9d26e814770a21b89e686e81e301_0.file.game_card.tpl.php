<?php
/* Smarty version 3.1.28-dev/77, created on 2015-11-28 03:33:31
  from "/home/ubuntu/workspace/v0.4/resources/templates/object_card/game_card.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.28-dev/77',
  'unifunc' => 'content_5659208b161069_80759284',
  'file_dependency' => 
  array (
    '4f4c4ae7b81a9d26e814770a21b89e686e81e301' => 
    array (
      0 => '/home/ubuntu/workspace/v0.4/resources/templates/object_card/game_card.tpl',
      1 => 1448681608,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5659208b161069_80759284 ($_smarty_tpl) {
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
        <?php echo $_smarty_tpl->tpl_vars['description']->value;?>

    </div>
    <div class="game_dropdown dropdown">
        <button class="btn btn-default dropdown-toggle" type="button" data-toggle="dropdown">
            Game Action
            <i class="fa fa-caret-down"></i>
        </button>
        <ul class="dropdown-menu">
            <li><a href="view_game?gameid=<?php echo $_smarty_tpl->tpl_vars['gameid']->value;?>
">View Game</a></li>
            <li><a href="#">Copy Game</a></li>
        </ul>
    </div>
</div><?php }
}
