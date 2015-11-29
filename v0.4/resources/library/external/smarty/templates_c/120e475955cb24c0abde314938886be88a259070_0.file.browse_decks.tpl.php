<?php /* Smarty version 3.1.27, created on 2015-11-29 06:02:26
         compiled from "/home/ubuntu/workspace/v0.4/resources/templates/deck/browse_decks.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:250699952565a94f21ab966_56411840%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '120e475955cb24c0abde314938886be88a259070' => 
    array (
      0 => '/home/ubuntu/workspace/v0.4/resources/templates/deck/browse_decks.tpl',
      1 => 1448759826,
      2 => 'file',
    ),
    'fc1756df85c8dd3aca995bbfeb27cf7713bd97b9' => 
    array (
      0 => '/home/ubuntu/workspace/v0.4/resources/templates/base.tpl',
      1 => 1448738634,
      2 => 'file',
    ),
    'bb09c183a0ac750b82508e0493f34f02b85bd6ea' => 
    array (
      0 => 'bb09c183a0ac750b82508e0493f34f02b85bd6ea',
      1 => 0,
      2 => 'string',
    ),
  ),
  'nocache_hash' => '250699952565a94f21ab966_56411840',
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_565a94f21fa676_37520627',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_565a94f21fa676_37520627')) {
function content_565a94f21fa676_37520627 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '250699952565a94f21ab966_56411840';
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
$_smarty_tpl->properties['nocache_hash'] = '250699952565a94f21ab966_56411840';
?>

<div class="page_content">
    <div class="content_title">
        <h2>Browse Decks</h2>
    </div>
    <div class="content_search form-inline">
        <div class="form-group">
            <input type="text" class="form-control">
            <button type="button" class="btn btn-primary">Search</button>
        </div> <!-- /form-group -->
    </div> <!-- /content_search -->
    <div class="card_grid">
    <?php
$_from = $_smarty_tpl->tpl_vars['decks']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['deck'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['deck']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['deck']->value) {
$_smarty_tpl->tpl_vars['deck']->_loop = true;
$foreach_deck_Sav = $_smarty_tpl->tpl_vars['deck'];
?>
        <?php echo $_smarty_tpl->tpl_vars['deck']->value->smartyCard('object_card/deck_card.tpl');?>

    <?php
$_smarty_tpl->tpl_vars['deck'] = $foreach_deck_Sav;
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