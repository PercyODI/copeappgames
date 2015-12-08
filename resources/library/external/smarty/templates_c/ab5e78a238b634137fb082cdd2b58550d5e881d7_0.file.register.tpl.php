<?php /* Smarty version 3.1.27, created on 2015-12-07 17:00:44
         compiled from "/var/www/resources/templates/user/register.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:18363253375665bb3c2f16b8_87178864%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ab5e78a238b634137fb082cdd2b58550d5e881d7' => 
    array (
      0 => '/var/www/resources/templates/user/register.tpl',
      1 => 1449455292,
      2 => 'file',
    ),
    'd21bf927a100aaf43baeb210631f7768dae73341' => 
    array (
      0 => '/var/www/resources/templates/base.tpl',
      1 => 1449455292,
      2 => 'file',
    ),
    '3ea82d3e64dea9d3932157734ffb85a49e64c2c7' => 
    array (
      0 => '3ea82d3e64dea9d3932157734ffb85a49e64c2c7',
      1 => 0,
      2 => 'string',
    ),
    'e7ab604c08b7efbfd7b9dbbd9bb9046f43029f65' => 
    array (
      0 => 'e7ab604c08b7efbfd7b9dbbd9bb9046f43029f65',
      1 => 0,
      2 => 'string',
    ),
  ),
  'nocache_hash' => '18363253375665bb3c2f16b8_87178864',
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5665bb3c363000_95907274',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5665bb3c363000_95907274')) {
function content_5665bb3c363000_95907274 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '18363253375665bb3c2f16b8_87178864';
?>
<!DOCTYPE html>
<html>
<head>
    <title>COPEapp</title>
    <?php echo $_smarty_tpl->getSubTemplate ('include/external_links.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

    <?php
$_smarty_tpl->properties['nocache_hash'] = '18363253375665bb3c2f16b8_87178864';
?>

<?php echo '<script'; ?>
 src="js/register.js"><?php echo '</script'; ?>
>

</head>
<body>
    <div class="page_container">
        <?php echo $_smarty_tpl->getSubTemplate ('include/navbar.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

        <?php
$_smarty_tpl->properties['nocache_hash'] = '18363253375665bb3c2f16b8_87178864';
?>


<div class="page_content">
    <form class="single_form register_form card form-horizontal col-sm-6">
        <h2>New User Registration</h2>
        <div class="form-group" id="username_parent" requiredInput>
            <label for="username" class="col-sm-3 control-label">Username</label>
            <div class="col-sm-9">
                <input type="text" class="form-control input-lg" id="username" name="username" required>
            </div>
        </div>
        <div class="form-group" requiredInput>
            <label for="username" class="col-sm-3 control-label">Password</label>
            <div class="col-sm-9">
                <input type="password" class="form-control input-lg" id="password" name="password" required>
            </div>
        </div>
        <div class="form-group" requiredInput>
            <label for="username" class="col-sm-3 control-label">Confirm Password</label>
            <div class="col-sm-9">
                <input type="password" class="form-control input-lg" id="confirmpassword" name="confirmpassword" required>
            </div>
        </div>
        <div class="form-group">
            <label for="username" class="col-sm-3 control-label">First Name</label>
            <div class="col-sm-9">
                <input type="text" class="form-control input-lg" id="fname" name="fname">
            </div>
        </div>
        <div class="form-group">
            <label for="username" class="col-sm-3 control-label">Last Name</label>
            <div class="col-sm-9">
                <input type="text" class="form-control input-lg" id="lname" name="lname">
            </div>
        </div>
        <div class="form-group">
            <label for="username" class="col-sm-3 control-label">Copename</label>
            <div class="col-sm-9">
                <input type="text" class="form-control input-lg" id="copename" name="copename">
            </div>
        </div>
        <div class="js_alert alert alert-warning alert-dismissible" role="alert" style="display: none;"></div>
        <button type="submit" class="btn btn-primary btn-block" id="register_btn">Register</button>
    </form>
</div>


        <?php echo $_smarty_tpl->getSubTemplate ('include/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

    </div>
</body>
</html><?php }
}
?>