<?php /* Smarty version 3.1.27, created on 2015-12-08 01:15:06
         compiled from "/var/www/resources/templates/user/login.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:118785307956662f1af39023_95332370%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a57116bd0568ec77eccbc3b43956716ad5731673' => 
    array (
      0 => '/var/www/resources/templates/user/login.tpl',
      1 => 1449455292,
      2 => 'file',
    ),
    'd21bf927a100aaf43baeb210631f7768dae73341' => 
    array (
      0 => '/var/www/resources/templates/base.tpl',
      1 => 1449455292,
      2 => 'file',
    ),
    '56b002ab8806b4d689fb3f178ae92c078ae8eb54' => 
    array (
      0 => '56b002ab8806b4d689fb3f178ae92c078ae8eb54',
      1 => 0,
      2 => 'string',
    ),
    'e082d5d043316fe4bdf9d0f1fa62f63a50a347a7' => 
    array (
      0 => 'e082d5d043316fe4bdf9d0f1fa62f63a50a347a7',
      1 => 0,
      2 => 'string',
    ),
  ),
  'nocache_hash' => '118785307956662f1af39023_95332370',
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_56662f1b067f64_37309303',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_56662f1b067f64_37309303')) {
function content_56662f1b067f64_37309303 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '118785307956662f1af39023_95332370';
?>
<!DOCTYPE html>
<html>
<head>
    <title>COPEapp</title>
    <?php echo $_smarty_tpl->getSubTemplate ('include/external_links.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

    <?php
$_smarty_tpl->properties['nocache_hash'] = '118785307956662f1af39023_95332370';
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
$_smarty_tpl->properties['nocache_hash'] = '118785307956662f1af39023_95332370';
?>


<div class="page_content">
    <form class="single_form login_form card form-horizontal col-sm-6">
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