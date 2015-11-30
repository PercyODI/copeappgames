<?php /* Smarty version 3.1.27, created on 2015-11-30 03:48:26
         compiled from "/home/ubuntu/workspace/v0.4/resources/templates/deck/edit_deck.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:2007739009565bc70ab207e0_95104893%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2e8968318a4cb125a5b66f130d978fcab594297c' => 
    array (
      0 => '/home/ubuntu/workspace/v0.4/resources/templates/deck/edit_deck.tpl',
      1 => 1448854876,
      2 => 'file',
    ),
    'fc1756df85c8dd3aca995bbfeb27cf7713bd97b9' => 
    array (
      0 => '/home/ubuntu/workspace/v0.4/resources/templates/base.tpl',
      1 => 1448738634,
      2 => 'file',
    ),
    '2f6b245e8f8e2ce07393f3f84aeadb3c5ef821bc' => 
    array (
      0 => '2f6b245e8f8e2ce07393f3f84aeadb3c5ef821bc',
      1 => 0,
      2 => 'string',
    ),
    '35399ba45fff86caae8cd61da94bf85c981b5e68' => 
    array (
      0 => '35399ba45fff86caae8cd61da94bf85c981b5e68',
      1 => 0,
      2 => 'string',
    ),
  ),
  'nocache_hash' => '2007739009565bc70ab207e0_95104893',
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_565bc70ab7b392_06217823',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_565bc70ab7b392_06217823')) {
function content_565bc70ab7b392_06217823 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '2007739009565bc70ab207e0_95104893';
?>
<!DOCTYPE html>
<html>
<head>
    <title>COPEapp</title>
    <?php echo $_smarty_tpl->getSubTemplate ('include/external_links.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

    <?php
$_smarty_tpl->properties['nocache_hash'] = '2007739009565bc70ab207e0_95104893';
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
$_smarty_tpl->properties['nocache_hash'] = '2007739009565bc70ab207e0_95104893';
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