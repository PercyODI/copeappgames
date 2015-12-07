<?php /* Smarty version 3.1.27, created on 2015-12-06 22:40:53
         compiled from "/home/ubuntu/workspace/v0.4/resources/templates/game/new_game.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:8355129825664b9751faab3_32171027%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '84969b94c40ba68fe63182d88aed56ccef833d02' => 
    array (
      0 => '/home/ubuntu/workspace/v0.4/resources/templates/game/new_game.tpl',
      1 => 1449441651,
      2 => 'file',
    ),
    'fc1756df85c8dd3aca995bbfeb27cf7713bd97b9' => 
    array (
      0 => '/home/ubuntu/workspace/v0.4/resources/templates/base.tpl',
      1 => 1448738634,
      2 => 'file',
    ),
    '4b905d2f3b66add9394ef96d19bbedc4c2cb2383' => 
    array (
      0 => '4b905d2f3b66add9394ef96d19bbedc4c2cb2383',
      1 => 0,
      2 => 'string',
    ),
    '75e18e9c91c3842394ba82701800b096aa748a81' => 
    array (
      0 => '75e18e9c91c3842394ba82701800b096aa748a81',
      1 => 0,
      2 => 'string',
    ),
  ),
  'nocache_hash' => '8355129825664b9751faab3_32171027',
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5664b9752575a1_02357146',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5664b9752575a1_02357146')) {
function content_5664b9752575a1_02357146 ($_smarty_tpl) {
if (!is_callable('smarty_modifier_capitalize')) require_once '/home/ubuntu/workspace/v0.4/resources/library/external/smarty/libs/plugins/modifier.capitalize.php';

$_smarty_tpl->properties['nocache_hash'] = '8355129825664b9751faab3_32171027';
?>
<!DOCTYPE html>
<html>
<head>
    <title>COPEapp</title>
    <?php echo $_smarty_tpl->getSubTemplate ('include/external_links.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

    <?php
$_smarty_tpl->properties['nocache_hash'] = '8355129825664b9751faab3_32171027';
?>

<link rel="stylesheet" type="text/css" href="js/external/fontawesome-iconpicker/css/fontawesome-iconpicker.min.css">

<?php echo '<script'; ?>
 src="js/new_game.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="js/external/fontawesome-iconpicker/js/fontawesome-iconpicker.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="//cdn.ckeditor.com/4.5.5/standard/ckeditor.js"><?php echo '</script'; ?>
>

</head>
<body>
    <div class="page_container">
        <?php echo $_smarty_tpl->getSubTemplate ('include/navbar.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

        <?php
$_smarty_tpl->properties['nocache_hash'] = '8355129825664b9751faab3_32171027';
?>


<div class="page_content">
    <form class="single_form new_game_form card form-horizontal col-sm-6">
        <h2>New Game Creator</h2>
        <div class="form-group" id="title" requiredInput>
            <label for="title" class="col-sm-3 control-label">Game Title</label>
            <div class="col-sm-9">
                <input type="text" class="form-control input-lg" id="title" name="title" required>
            </div>
        </div>
        <div class="form-group" requiredInput>
            <label for="description" class="col-sm-3 control-label">Description</label>
            <div class="col-sm-9">
                <textarea class="form-control input-lg ckedit" id="description" name="description" required></textarea>
            </div>
        </div>
        <div class="form-group" requiredInput>
            <label for="instruction" class="col-sm-3 control-label">Instruction</label>
            <div class="col-sm-9">
                <textarea class="form-control input-lg ckedit" id="instruction" name="instruction"></textarea>
            </div>
        </div>
        <div class="form-group" requiredInput>
            <label for="discussion" class="col-sm-3 control-label">Discussion</label>
            <div class="col-sm-9">
                <textarea class="form-control input-lg ckedit" id="discussion" name="discussion"></textarea>
            </div>
        </div>
        <div class="form-group" requiredInput>
            <label for="username" class="col-sm-3 control-label">Game Icon</label>
            <div class="col-sm-9">
                <input name="icon" id="icon" class="form-control input-lg icp icp-auto iconpicker-element iconpicker-input" value="fa-gamepad" type="text">
            </div>
        </div>
        <div class="form-group" requiredInput>
            <label for="discussion" class="col-sm-3 control-label">Primary Type</label>
            <div class="col-sm-9">
                <select name="primary_type" id="primary_type" class="form-control input-lg">
                    <option label="None" value="None">None</option>
                    <?php
$_from = $_smarty_tpl->tpl_vars['types']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['v'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['v']->_loop = false;
$_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
foreach ($_from as $_smarty_tpl->tpl_vars['k']->value => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
$foreach_v_Sav = $_smarty_tpl->tpl_vars['v'];
?>
                    <option label="<?php echo smarty_modifier_capitalize($_smarty_tpl->tpl_vars['v']->value);?>
" value="<?php echo $_smarty_tpl->tpl_vars['k']->value;?>
"><?php echo smarty_modifier_capitalize($_smarty_tpl->tpl_vars['v']->value);?>
</option>
                    <?php
$_smarty_tpl->tpl_vars['v'] = $foreach_v_Sav;
}
?>
                </select>
            </div>
        </div>
        <div class="form-group" requiredInput>
            <label for="discussion" class="col-sm-3 control-label">Secondary Type</label>
            <div class="col-sm-9">
                <select name="secondary_type" id="secondary_type" class="form-control input-lg" disabled>
                    <option label="None" value="None">None</option>
                    <?php
$_from = $_smarty_tpl->tpl_vars['types']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['v'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['v']->_loop = false;
$_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
foreach ($_from as $_smarty_tpl->tpl_vars['k']->value => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
$foreach_v_Sav = $_smarty_tpl->tpl_vars['v'];
?>
                    <option label="<?php echo smarty_modifier_capitalize($_smarty_tpl->tpl_vars['v']->value);?>
" value="<?php echo $_smarty_tpl->tpl_vars['k']->value;?>
"><?php echo smarty_modifier_capitalize($_smarty_tpl->tpl_vars['v']->value);?>
</option>
                    <?php
$_smarty_tpl->tpl_vars['v'] = $foreach_v_Sav;
}
?>
                </select>
            </div>
        </div>
        <input type="hidden" name="deckid" id="deckid" value="<?php echo $_GET['deckid'];?>
">
        <div class="js_alert alert alert-warning alert-dismissible" role="alert" style="display: none;"></div>
        <button type="submit" class="new_game_btn btn btn-primary btn-block" id="register_btn">Create Game</button>
    </form>
</div>


        <?php echo $_smarty_tpl->getSubTemplate ('include/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

    </div>
</body>
</html><?php }
}
?>