<?php /* Smarty version 3.1.27, created on 2015-11-29 05:57:46
         compiled from "/home/ubuntu/workspace/v0.4/resources/templates/user/register.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:982099027565a93da156b36_74466364%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a49df69ee1b4b09ce83de19268f606b9b65d88ac' => 
    array (
      0 => '/home/ubuntu/workspace/v0.4/resources/templates/user/register.tpl',
      1 => 1448776006,
      2 => 'file',
    ),
    'fc1756df85c8dd3aca995bbfeb27cf7713bd97b9' => 
    array (
      0 => '/home/ubuntu/workspace/v0.4/resources/templates/base.tpl',
      1 => 1448738634,
      2 => 'file',
    ),
    '215c4690ea3fb404f296fdcd6616f9ad54a200f0' => 
    array (
      0 => '215c4690ea3fb404f296fdcd6616f9ad54a200f0',
      1 => 0,
      2 => 'string',
    ),
    '8a0775b3ab24d866c6e57a773b2e33e1208b8d92' => 
    array (
      0 => '8a0775b3ab24d866c6e57a773b2e33e1208b8d92',
      1 => 0,
      2 => 'string',
    ),
  ),
  'nocache_hash' => '982099027565a93da156b36_74466364',
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_565a93da1a9540_42501948',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_565a93da1a9540_42501948')) {
function content_565a93da1a9540_42501948 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '982099027565a93da156b36_74466364';
?>
<!DOCTYPE html>
<html>
<head>
    <title>COPEapp</title>
    <?php echo $_smarty_tpl->getSubTemplate ('include/external_links.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

    <?php
$_smarty_tpl->properties['nocache_hash'] = '982099027565a93da156b36_74466364';
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
$_smarty_tpl->properties['nocache_hash'] = '982099027565a93da156b36_74466364';
?>


<div class="page_content">
    <form class="register_form card form-horizontal col-sm-6">
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