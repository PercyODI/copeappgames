<?php /* Smarty version 3.1.27, created on 2015-11-29 03:59:10
         compiled from "/home/ubuntu/workspace/v0.4/resources/templates/deck/view_deck.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:1784012918565a780ed63ee7_79094428%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1b4b861d5dfa72ed8e602c0a9e83aa78b3cb6e83' => 
    array (
      0 => '/home/ubuntu/workspace/v0.4/resources/templates/deck/view_deck.tpl',
      1 => 1448759828,
      2 => 'file',
    ),
    'fc1756df85c8dd3aca995bbfeb27cf7713bd97b9' => 
    array (
      0 => '/home/ubuntu/workspace/v0.4/resources/templates/base.tpl',
      1 => 1448738634,
      2 => 'file',
    ),
    'ec9135bcfe89925e83c89e7dd643191041f404c8' => 
    array (
      0 => 'ec9135bcfe89925e83c89e7dd643191041f404c8',
      1 => 0,
      2 => 'string',
    ),
  ),
  'nocache_hash' => '1784012918565a780ed63ee7_79094428',
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_565a780eda9830_69169291',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_565a780eda9830_69169291')) {
function content_565a780eda9830_69169291 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '1784012918565a780ed63ee7_79094428';
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
$_smarty_tpl->properties['nocache_hash'] = '1784012918565a780ed63ee7_79094428';
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