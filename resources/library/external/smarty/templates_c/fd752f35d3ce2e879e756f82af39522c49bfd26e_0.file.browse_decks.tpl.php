<?php /* Smarty version 3.1.27, created on 2015-12-09 04:11:46
         compiled from "/var/www/resources/templates/deck/browse_decks.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:7937771035667aa02441fb1_96624782%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'fd752f35d3ce2e879e756f82af39522c49bfd26e' => 
    array (
      0 => '/var/www/resources/templates/deck/browse_decks.tpl',
      1 => 1449455292,
      2 => 'file',
    ),
    'd21bf927a100aaf43baeb210631f7768dae73341' => 
    array (
      0 => '/var/www/resources/templates/base.tpl',
      1 => 1449455292,
      2 => 'file',
    ),
    '684c8bc37be08946ed068ad68e5aa0014414949e' => 
    array (
      0 => '684c8bc37be08946ed068ad68e5aa0014414949e',
      1 => 0,
      2 => 'string',
    ),
  ),
  'nocache_hash' => '7937771035667aa02441fb1_96624782',
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5667aa02524428_27964808',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5667aa02524428_27964808')) {
function content_5667aa02524428_27964808 ($_smarty_tpl) {
if (!is_callable('smarty_modifier_capitalize')) require_once '/var/www/resources/library/external/smarty/libs/plugins/modifier.capitalize.php';

$_smarty_tpl->properties['nocache_hash'] = '7937771035667aa02441fb1_96624782';
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
$_smarty_tpl->properties['nocache_hash'] = '7937771035667aa02441fb1_96624782';
?>

<div class="page_content">
    <div class="content_title">
        <h2>
        <?php if ($_GET['search']) {?>
        Searching
        <?php } else { ?>
        Browsing
        <?php }?>
        
        <?php if ($_GET['userid'] == $_SESSION['userid']) {?>
        My Decks
        <?php } elseif ($_GET['userid'] != 'any') {?>
        <?php echo (($tmp = @smarty_modifier_capitalize($_smarty_tpl->tpl_vars['copename']->value))===null||$tmp==='' ? 'No  Username' : $tmp);?>
's Decks
        <?php } else { ?>
        All Decks
        <?php }?>
        </h2>
    </div>
    <div class="content_search form-inline">
        <form class="form-group" action="browse_decks.php" method="GET">
            <input type="text" name="search" id="search" class="form-control"<?php if ($_GET['search'] != null) {?>value="<?php echo $_GET['search'];?>
"<?php }?>>
            <?php if ($_GET['userid']) {?>
            <input type="hidden" name="userid" value="<?php echo (($tmp = @$_GET['userid'])===null||$tmp==='' ? '' : $tmp);?>
">
            <?php }?>
            <button type="submit" id="search_submit" class="btn btn-primary">Search</button>
            <?php if ($_GET['search']) {?>
            <button class="clear_search btn btn-default" type="button">Clear Search</button>
            <?php }?>
        </form> <!-- /form-group -->
    </div> <!-- /content_search -->
    <div class="card_grid">
        <?php if ($_GET['userid'] == $_SESSION['userid']) {?>
        <div class="card deck-card create_deck">
            <div class="deck-title">
                Create a New Deck
            </div>
            <div class="deck-icon">
                <i class="fa fa-4x fa-plus-square"></i>
            </div>
            <div class="deck-description">
                Click this card to Create a New Deck!
            </div>
        </div>
        <?php }?>
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