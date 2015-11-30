<?php /* Smarty version 3.1.27, created on 2015-11-29 23:46:02
         compiled from "/home/ubuntu/workspace/v0.4/resources/templates/deck/view_deck.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:2020533612565b8e3a4c9747_65322757%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1b4b861d5dfa72ed8e602c0a9e83aa78b3cb6e83' => 
    array (
      0 => '/home/ubuntu/workspace/v0.4/resources/templates/deck/view_deck.tpl',
      1 => 1448824789,
      2 => 'file',
    ),
    'fc1756df85c8dd3aca995bbfeb27cf7713bd97b9' => 
    array (
      0 => '/home/ubuntu/workspace/v0.4/resources/templates/base.tpl',
      1 => 1448738634,
      2 => 'file',
    ),
    'eea8e873ad3fd1781dae5b5dba20041d9b1ff565' => 
    array (
      0 => 'eea8e873ad3fd1781dae5b5dba20041d9b1ff565',
      1 => 0,
      2 => 'string',
    ),
  ),
  'nocache_hash' => '2020533612565b8e3a4c9747_65322757',
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_565b8e3a51c3f2_28472219',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_565b8e3a51c3f2_28472219')) {
function content_565b8e3a51c3f2_28472219 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '2020533612565b8e3a4c9747_65322757';
?>
<!DOCTYPE html>
<html>
<head>
    <title>COPEapp</title>
    <?php echo $_smarty_tpl->getSubTemplate ('include/external_links.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

    
</head>
<body>
    <div class="page_container">
        <?php echo $_smarty_tpl->getSubTemplate ('include/navbar.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

        <?php
$_smarty_tpl->properties['nocache_hash'] = '2020533612565b8e3a4c9747_65322757';
?>

<div class="page_content">
    <div class="content_title">
        <h2>Viewing <?php echo $_smarty_tpl->tpl_vars['deckname']->value;?>
</h2>
        <h3>Created By <a href="browse_decks.php?userid=<?php echo $_smarty_tpl->tpl_vars['userid']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['usercopename']->value;?>
</a></h3>
    </div>
    <div class="card_grid">
        <?php if ($_smarty_tpl->tpl_vars['userid']->value == $_SESSION['userid']) {?>
        <div class="card game-card create_game" deckid=<?php echo $_GET['deckid'];?>
>
            <div class="game-title">
                Create a New Game
            </div>
            <div class="game-icon">
                <i class="fa fa-4x fa-plus-square"></i>
            </div>
            <div class="game-description">
                Click this card to Create a New Deck!
            </div>
        </div>
        <?php }?>
    <?php
$_from = $_smarty_tpl->tpl_vars['games']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['game'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['game']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['game']->value) {
$_smarty_tpl->tpl_vars['game']->_loop = true;
$foreach_game_Sav = $_smarty_tpl->tpl_vars['game'];
?>
        <?php echo $_smarty_tpl->tpl_vars['game']->value->smartyCard('object_card/game_card.tpl');?>

    <?php
$_smarty_tpl->tpl_vars['game'] = $foreach_game_Sav;
}
if (!$_smarty_tpl->tpl_vars['game']->_loop) {
?>
        <div class="card"><h3>No Games have been added to this Deck!</h3></div>
    <?php
}
?>
    </div>
</div> <!-- /page_content -->

        <?php echo $_smarty_tpl->getSubTemplate ('include/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

    </div>
</body>
</html><?php }
}
?>