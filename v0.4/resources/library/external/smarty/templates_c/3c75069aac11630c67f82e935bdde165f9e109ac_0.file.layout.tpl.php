<?php
/* Smarty version 3.1.28-dev/77, created on 2015-11-27 22:04:46
  from "/home/ubuntu/workspace/v0.4/resources/templates/layout.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.28-dev/77',
  'unifunc' => 'content_5658d37e4c98a1_20876622',
  'file_dependency' => 
  array (
    '3c75069aac11630c67f82e935bdde165f9e109ac' => 
    array (
      0 => '/home/ubuntu/workspace/v0.4/resources/templates/layout.tpl',
      1 => 1448661877,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:base/external_links.tpl' => 1,
    'file:base/navbar.tpl' => 1,
    'file:base/footer.tpl' => 1,
  ),
),false)) {
function content_5658d37e4c98a1_20876622 ($_smarty_tpl) {
$_smarty_tpl->ext->_inheritance->init($_smarty_tpl, false);
?>
<!DOCTYPE html>
<html>
<head>
    <title><?php 
$_smarty_tpl->ext->_inheritance->processBlock($_smarty_tpl, 0, 'title', array (
  0 => 'block_11091883495658d37e4b4bd1_78077578',
  1 => false,
  3 => 0,
  2 => 0,
));
?>
</title>
    <?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:base/external_links.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

    <?php 
$_smarty_tpl->ext->_inheritance->processBlock($_smarty_tpl, 0, 'extra_head', array (
  0 => 'block_20043590345658d37e4bde41_60767091',
  1 => false,
  3 => 0,
  2 => 0,
));
?>

</head>
<body>
    <div class="page_container">
        <?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:base/navbar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

        <?php 
$_smarty_tpl->ext->_inheritance->processBlock($_smarty_tpl, 0, 'content', array (
  0 => 'block_12686762475658d37e4c3cf2_21762974',
  1 => false,
  3 => 0,
  2 => 0,
));
?>

        <?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:base/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

    </div>
</body>
</html><?php }
/* {block 'title'}  file:layout.tpl */
function block_11091883495658d37e4b4bd1_78077578($_smarty_tpl, $_blockParentStack) {
?>
COPEapp<?php
}
/* {/block 'title'} */
/* {block 'extra_head'}  file:layout.tpl */
function block_20043590345658d37e4bde41_60767091($_smarty_tpl, $_blockParentStack) {
}
/* {/block 'extra_head'} */
/* {block 'content'}  file:layout.tpl */
function block_12686762475658d37e4c3cf2_21762974($_smarty_tpl, $_blockParentStack) {
?>

        <div class="page_content">
            Missing Content!
        </div>
        <?php
}
/* {/block 'content'} */
}
