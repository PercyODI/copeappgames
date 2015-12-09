<?php /* Smarty version 3.1.27, created on 2015-12-09 18:13:00
         compiled from "/home/ubuntu/workspace/resources/templates/user/login.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:51591173556686f2c7da555_32107363%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'cf17fc61517b29ad8608b1a7bad1c565c003f6d3' => 
    array (
      0 => '/home/ubuntu/workspace/resources/templates/user/login.tpl',
      1 => 1449439330,
      2 => 'file',
    ),
    '95d01e163690a49691b00460c50fe5ddab264581' => 
    array (
      0 => '/home/ubuntu/workspace/resources/templates/base.tpl',
      1 => 1448738634,
      2 => 'file',
    ),
    '483e636638358a9ab3fde8eb3b18b2867de2dd67' => 
    array (
      0 => '483e636638358a9ab3fde8eb3b18b2867de2dd67',
      1 => 0,
      2 => 'string',
    ),
    '2140f7855ea20edaf55e434ea0c9efb41caeb087' => 
    array (
      0 => '2140f7855ea20edaf55e434ea0c9efb41caeb087',
      1 => 0,
      2 => 'string',
    ),
  ),
  'nocache_hash' => '51591173556686f2c7da555_32107363',
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_56686f2c9a60d5_46533371',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_56686f2c9a60d5_46533371')) {
function content_56686f2c9a60d5_46533371 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '51591173556686f2c7da555_32107363';
?>
<!DOCTYPE html>
<html>
<head>
    <title>COPEapp</title>
    <?php echo $_smarty_tpl->getSubTemplate ('include/external_links.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

    <?php
$_smarty_tpl->properties['nocache_hash'] = '51591173556686f2c7da555_32107363';
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
$_smarty_tpl->properties['nocache_hash'] = '51591173556686f2c7da555_32107363';
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