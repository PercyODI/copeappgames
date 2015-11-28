<?php
/* Smarty version 3.1.28-dev/77, created on 2015-11-28 19:24:52
  from "/home/ubuntu/workspace/v0.4/resources/templates/base.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.28-dev/77',
  'unifunc' => 'content_5659ff844ce279_31896462',
  'file_dependency' => 
  array (
    'fc1756df85c8dd3aca995bbfeb27cf7713bd97b9' => 
    array (
      0 => '/home/ubuntu/workspace/v0.4/resources/templates/base.tpl',
      1 => 1448738634,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:include/external_links.tpl' => 1,
    'file:include/navbar.tpl' => 1,
    'file:include/footer.tpl' => 1,
  ),
),false)) {
function content_5659ff844ce279_31896462 ($_smarty_tpl) {
$_smarty_tpl->ext->_inheritance->init($_smarty_tpl, false);
?>
<!DOCTYPE html>
<html>
<head>
    <title><?php 
$_smarty_tpl->ext->_inheritance->processBlock($_smarty_tpl, 0, 'title', array (
  0 => 'block_11289195815659ff844b02e3_25982191',
  1 => false,
  3 => 0,
  2 => 0,
));
?>
</title>
    <?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:include/external_links.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

    <?php 
$_smarty_tpl->ext->_inheritance->processBlock($_smarty_tpl, 0, 'extra_head', array (
  0 => 'block_8459396215659ff844bb234_55235927',
  1 => false,
  3 => 0,
  2 => 0,
));
?>

</head>
<body>
    <div class="page_container">
        <?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:include/navbar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

        <?php 
$_smarty_tpl->ext->_inheritance->processBlock($_smarty_tpl, 0, 'content', array (
  0 => 'block_8243390755659ff844c50b9_81707128',
  1 => false,
  3 => 0,
  2 => 0,
));
?>

        <?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:include/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

    </div>
</body>
</html><?php }
/* {block 'title'}  file:base.tpl */
function block_11289195815659ff844b02e3_25982191($_smarty_tpl, $_blockParentStack) {
?>
COPEapp<?php
}
/* {/block 'title'} */
/* {block 'extra_head'}  file:base.tpl */
function block_8459396215659ff844bb234_55235927($_smarty_tpl, $_blockParentStack) {
}
/* {/block 'extra_head'} */
/* {block 'content'}  file:base.tpl */
function block_8243390755659ff844c50b9_81707128($_smarty_tpl, $_blockParentStack) {
?>

        <div class="page_content">
            Missing Content!
        </div>
        <?php
}
/* {/block 'content'} */
}
