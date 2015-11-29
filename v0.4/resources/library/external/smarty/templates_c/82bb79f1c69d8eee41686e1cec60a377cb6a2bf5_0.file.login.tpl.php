<?php /* Smarty version 3.1.27, created on 2015-11-29 06:00:51
         compiled from "/home/ubuntu/workspace/v0.4/resources/templates/user/login.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:1724981892565a9493d4b3d3_55752144%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '82bb79f1c69d8eee41686e1cec60a377cb6a2bf5' => 
    array (
      0 => '/home/ubuntu/workspace/v0.4/resources/templates/user/login.tpl',
      1 => 1448767795,
      2 => 'file',
    ),
    'fc1756df85c8dd3aca995bbfeb27cf7713bd97b9' => 
    array (
      0 => '/home/ubuntu/workspace/v0.4/resources/templates/base.tpl',
      1 => 1448738634,
      2 => 'file',
    ),
    'e37574c84cf79092dae237abfe3eb7bf73a1e46a' => 
    array (
      0 => 'e37574c84cf79092dae237abfe3eb7bf73a1e46a',
      1 => 0,
      2 => 'string',
    ),
    'fa80b9132f07db2eda3949ed3537e51487c3da3b' => 
    array (
      0 => 'fa80b9132f07db2eda3949ed3537e51487c3da3b',
      1 => 0,
      2 => 'string',
    ),
  ),
  'nocache_hash' => '1724981892565a9493d4b3d3_55752144',
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_565a9493d90074_65647446',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_565a9493d90074_65647446')) {
function content_565a9493d90074_65647446 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '1724981892565a9493d4b3d3_55752144';
?>
<!DOCTYPE html>
<html>
<head>
    <title>COPEapp</title>
    <?php echo $_smarty_tpl->getSubTemplate ('include/external_links.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

    <?php
$_smarty_tpl->properties['nocache_hash'] = '1724981892565a9493d4b3d3_55752144';
?>

<?php echo '<script'; ?>
 src="js/login.js"><?php echo '</script'; ?>
>

</head>
<body>
    <div class="page_container">
        <?php echo $_smarty_tpl->getSubTemplate ('include/navbar.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

        <?php
$_smarty_tpl->properties['nocache_hash'] = '1724981892565a9493d4b3d3_55752144';
?>


<div class="page_content">
    <h3>Please Login</h3>
    <form class="login_form form-horizontal col-sm-6">
        <div class="form-group">
            <label for="username" class="col-sm-3 control-label">Username</label>
            <div class="col-sm-9">
                <input type="text" class="form-control input-lg" id="username" name="username" required>
            </div>
        </div>
        <div class="form-group">
            <label for="username" class="col-sm-3 control-label">Password</label>
            <div class="col-sm-9">
                <input type="password" class="form-control input-lg" id="password" name="password" required>
            </div>
        </div>
        <div class="js_alert alert alert-warning alert-dismissible" role="alert" style="display: none;">
            Invalid Username or Password! Please try again, or <a href="register.php" class="alert-link">Register a New Account!</a>
        </div>
        <button type="submit" class="btn btn-primary btn-lg pull-right" id="log_in_btn">Log In</button>
    </form>
    
</div>


        <?php echo $_smarty_tpl->getSubTemplate ('include/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

    </div>
</body>
</html><?php }
}
?>