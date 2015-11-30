<?php /* Smarty version 3.1.27, created on 2015-11-29 23:33:33
         compiled from "/home/ubuntu/workspace/v0.4/resources/templates/deck/new_deck.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:1644004800565b8b4d76f6b6_80476493%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e314c2bac9c5adffc9f5bd2de348958bbec5520d' => 
    array (
      0 => '/home/ubuntu/workspace/v0.4/resources/templates/deck/new_deck.tpl',
      1 => 1448838013,
      2 => 'file',
    ),
    'fc1756df85c8dd3aca995bbfeb27cf7713bd97b9' => 
    array (
      0 => '/home/ubuntu/workspace/v0.4/resources/templates/base.tpl',
      1 => 1448738634,
      2 => 'file',
    ),
    'ad790f06ec5bacec8778402805fcea6e457ec4cf' => 
    array (
      0 => 'ad790f06ec5bacec8778402805fcea6e457ec4cf',
      1 => 0,
      2 => 'string',
    ),
    '833c57b56e9f2c083df2cacaa527c1acbf9096b0' => 
    array (
      0 => '833c57b56e9f2c083df2cacaa527c1acbf9096b0',
      1 => 0,
      2 => 'string',
    ),
  ),
  'nocache_hash' => '1644004800565b8b4d76f6b6_80476493',
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_565b8b4d7c4b92_47846626',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_565b8b4d7c4b92_47846626')) {
function content_565b8b4d7c4b92_47846626 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '1644004800565b8b4d76f6b6_80476493';
?>
<!DOCTYPE html>
<html>
<head>
    <title>COPEapp</title>
    <?php echo $_smarty_tpl->getSubTemplate ('include/external_links.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

    <?php
$_smarty_tpl->properties['nocache_hash'] = '1644004800565b8b4d76f6b6_80476493';
?>

<link rel="stylesheet" type="text/css" href="js/external/fontawesome-iconpicker/css/fontawesome-iconpicker.min.css">

<?php echo '<script'; ?>
 src="js/new_deck.js"><?php echo '</script'; ?>
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
$_smarty_tpl->properties['nocache_hash'] = '1644004800565b8b4d76f6b6_80476493';
?>


<div class="page_content">
    <form class="single_form new_deck_form card form-horizontal col-sm-6">
        <h2>New Deck Creator</h2>
        <div class="form-group" id="name" requiredInput>
            <label for="name" class="col-sm-3 control-label">Deck Name</label>
            <div class="col-sm-9">
                <input type="text" class="form-control input-lg" id="name" name="name" required>
            </div>
        </div>
        <div class="form-group" requiredInput>
            <label for="description" class="col-sm-3 control-label">Description</label>
            <div class="col-sm-9">
                <input type="text" class="form-control input-lg" id="description" name="description" required>
            </div>
        </div>
        <div class="form-group" requiredInput>
            <label for="username" class="col-sm-3 control-label">Deck Icon</label>
            <div class="col-sm-9">
                <input name="icon" id="icon" class="form-control input-lg icp icp-auto iconpicker-element iconpicker-input" value="fa-gamepad" type="text">
                <!--<label data-placement="inline" class="icp icp-auto" data-selected="fa-gamepad"></label>-->
                <!--<div class="btn-group">-->
                <!--    <div class="btn-group">-->
                <!--        <button type="button" class="btn btn-default iconpicker-component"><i class="fa fa-fw fa-heart"></i></button>-->
                <!--        <button type="button" class="icp icp-dd icp-auto btn btn-primary dropdown-toggle" data-selected="fa-car" data-toggle="dropdown">-->
                <!--            <span class="caret"></span>-->
                <!--            <span class="sr-only">Toggle Dropdown</span>-->
                <!--        </button>-->
                <!--        <div class="dropdown-menu"></div>-->
                <!--    </div>-->
                <!--</div>-->
            </div>
        </div>
        <div class="js_alert alert alert-warning alert-dismissible" role="alert" style="display: none;"></div>
        <button type="submit" class="new_deck_btn btn btn-primary btn-block" id="register_btn">Create Deck</button>
    </form>
</div>


        <?php echo $_smarty_tpl->getSubTemplate ('include/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

    </div>
</body>
</html><?php }
}
?>