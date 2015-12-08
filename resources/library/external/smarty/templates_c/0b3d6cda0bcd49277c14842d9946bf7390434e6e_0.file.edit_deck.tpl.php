<?php /* Smarty version 3.1.27, created on 2015-12-07 17:04:17
         compiled from "/var/www/resources/templates/deck/edit_deck.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:458715625665bc11477167_68533882%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0b3d6cda0bcd49277c14842d9946bf7390434e6e' => 
    array (
      0 => '/var/www/resources/templates/deck/edit_deck.tpl',
      1 => 1449455292,
      2 => 'file',
    ),
    'd21bf927a100aaf43baeb210631f7768dae73341' => 
    array (
      0 => '/var/www/resources/templates/base.tpl',
      1 => 1449455292,
      2 => 'file',
    ),
    '229d7298a91c123fab264d4242e51f493d0472c2' => 
    array (
      0 => '229d7298a91c123fab264d4242e51f493d0472c2',
      1 => 0,
      2 => 'string',
    ),
    'f971b412bb16e11043b7704e2b6b830d3dc42d6d' => 
    array (
      0 => 'f971b412bb16e11043b7704e2b6b830d3dc42d6d',
      1 => 0,
      2 => 'string',
    ),
  ),
  'nocache_hash' => '458715625665bc11477167_68533882',
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5665bc114eba93_58455060',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5665bc114eba93_58455060')) {
function content_5665bc114eba93_58455060 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '458715625665bc11477167_68533882';
?>
<!DOCTYPE html>
<html>
<head>
    <title>COPEapp</title>
    <?php echo $_smarty_tpl->getSubTemplate ('include/external_links.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

    <?php
$_smarty_tpl->properties['nocache_hash'] = '458715625665bc11477167_68533882';
?>

<link rel="stylesheet" type="text/css" href="js/external/fontawesome-iconpicker/css/fontawesome-iconpicker.min.css">

<?php echo '<script'; ?>
 src="js/edit_deck.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="js/external/fontawesome-iconpicker/js/fontawesome-iconpicker.min.js"><?php echo '</script'; ?>
>

</head>
<body>
    <div class="page_container">
        <?php echo $_smarty_tpl->getSubTemplate ('include/navbar.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

        <?php
$_smarty_tpl->properties['nocache_hash'] = '458715625665bc11477167_68533882';
?>


<div class="page_content">
    <form class="single_form edit_deck_form card form-horizontal col-sm-6">
        <h2>Deck Editor</h2>
        <div class="form-group" id="name" requiredInput>
            <label for="name" class="col-sm-3 control-label">Deck Name</label>
            <div class="col-sm-9">
                <input type="text" class="form-control input-lg" id="name" name="name" value="<?php echo $_smarty_tpl->tpl_vars['deck']->value->getName();?>
" required>
            </div>
        </div>
        <div class="form-group" requiredInput>
            <label for="description" class="col-sm-3 control-label">Description</label>
            <div class="col-sm-9">
                <textarea class="form-control input-lg" id="description" name="description" required><?php echo $_smarty_tpl->tpl_vars['deck']->value->getDescription();?>
</textarea>
            </div>
        </div>
        <div class="form-group" requiredInput>
            <label for="username" class="col-sm-3 control-label">Deck Icon</label>
            <div class="col-sm-9">
                <input name="icon" id="icon" class="form-control input-lg icp icp-auto iconpicker-element iconpicker-input" value="<?php echo $_smarty_tpl->tpl_vars['deck']->value->getIcon();?>
" type="text">
            </div>
        </div>
        <input type="hidden" name="deckid" id="deckid" value="<?php echo $_smarty_tpl->tpl_vars['deck']->value->getDeckid();?>
">
        <input type="hidden" name="userid" id="userid" value="<?php echo $_smarty_tpl->tpl_vars['deck']->value->getUserid();?>
">
        <div class="js_alert alert alert-warning alert-dismissible" role="alert" style="display: none;"></div>
        <button type="submit" class="edit_deck_btn btn btn-primary btn-block" id="register_btn">Save Deck</button>
    </form>
</div>


        <?php echo $_smarty_tpl->getSubTemplate ('include/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

    </div>
</body>
</html><?php }
}
?>