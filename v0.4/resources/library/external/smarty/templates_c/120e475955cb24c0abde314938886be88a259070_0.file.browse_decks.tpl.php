<?php /* Smarty version 3.1.27, created on 2015-12-06 22:03:13
         compiled from "/home/ubuntu/workspace/v0.4/resources/templates/deck/browse_decks.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:21215827075664b0a1334487_17646691%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '120e475955cb24c0abde314938886be88a259070' => 
    array (
      0 => '/home/ubuntu/workspace/v0.4/resources/templates/deck/browse_decks.tpl',
      1 => 1448823447,
      2 => 'file',
    ),
    'fc1756df85c8dd3aca995bbfeb27cf7713bd97b9' => 
    array (
      0 => '/home/ubuntu/workspace/v0.4/resources/templates/base.tpl',
      1 => 1448738634,
      2 => 'file',
    ),
    'e7c8648ad1f988fb97e37b490292769d57d41826' => 
    array (
      0 => 'e7c8648ad1f988fb97e37b490292769d57d41826',
      1 => 0,
      2 => 'string',
    ),
  ),
  'nocache_hash' => '21215827075664b0a1334487_17646691',
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5664b0a13d8be2_30026095',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5664b0a13d8be2_30026095')) {
function content_5664b0a13d8be2_30026095 ($_smarty_tpl) {
if (!is_callable('smarty_modifier_capitalize')) require_once '/home/ubuntu/workspace/v0.4/resources/library/external/smarty/libs/plugins/modifier.capitalize.php';

$_smarty_tpl->properties['nocache_hash'] = '21215827075664b0a1334487_17646691';
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
$_smarty_tpl->properties['nocache_hash'] = '21215827075664b0a1334487_17646691';
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