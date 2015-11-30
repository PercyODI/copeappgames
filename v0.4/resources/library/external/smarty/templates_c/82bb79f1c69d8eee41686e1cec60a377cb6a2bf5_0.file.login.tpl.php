<?php /* Smarty version 3.1.27, created on 2015-11-29 22:11:24
         compiled from "/home/ubuntu/workspace/v0.4/resources/templates/user/login.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:477959968565b780d00cf79_19037383%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '82bb79f1c69d8eee41686e1cec60a377cb6a2bf5' => 
    array (
      0 => '/home/ubuntu/workspace/v0.4/resources/templates/user/login.tpl',
      1 => 1448835082,
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
    'a486932017a7e3d1e0a8fa16b711cedc211502c7' => 
    array (
      0 => 'a486932017a7e3d1e0a8fa16b711cedc211502c7',
      1 => 0,
      2 => 'string',
    ),
  ),
  'nocache_hash' => '477959968565b780d00cf79_19037383',
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_565b780d072860_15587673',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_565b780d072860_15587673')) {
function content_565b780d072860_15587673 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '477959968565b780d00cf79_19037383';
?>
<!DOCTYPE html>
<html>
<head>
    <title>COPEapp</title>
    <?php echo $_smarty_tpl->getSubTemplate ('include/external_links.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

    <?php
$_smarty_tpl->properties['nocache_hash'] = '477959968565b780d00cf79_19037383';
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
$_smarty_tpl->properties['nocache_hash'] = '477959968565b780d00cf79_19037383';
?>


<div class="page_content">
    <form class="single_form card form-horizontal col-sm-6">
        <h3>Please Login</h3>
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
        <button type="submit" class="btn btn-primary btn-lg btn-block" id="log_in_btn">Log In</button>
    </form>
    
</div>


        <?php echo $_smarty_tpl->getSubTemplate ('include/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

    </div>
</body>
</html><?php }
}
?>