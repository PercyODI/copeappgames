<?php /* Smarty version 3.1.27, created on 2015-12-09 18:37:49
         compiled from "/home/ubuntu/workspace/resources/templates/game/view_full_game.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:1232117090566874fd84fb73_20235330%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ecd48f75dabc396c727743d6ac1decdb35a90a0b' => 
    array (
      0 => '/home/ubuntu/workspace/resources/templates/game/view_full_game.tpl',
      1 => 1449632503,
      2 => 'file',
    ),
    '95d01e163690a49691b00460c50fe5ddab264581' => 
    array (
      0 => '/home/ubuntu/workspace/resources/templates/base.tpl',
      1 => 1448738634,
      2 => 'file',
    ),
    'f3a51cc0182671b059b7c9754b9ff1e6e69012ec' => 
    array (
      0 => 'f3a51cc0182671b059b7c9754b9ff1e6e69012ec',
      1 => 0,
      2 => 'string',
    ),
    '904abcc635b68f673fae9d5313a43e1867670ace' => 
    array (
      0 => '904abcc635b68f673fae9d5313a43e1867670ace',
      1 => 0,
      2 => 'string',
    ),
  ),
  'nocache_hash' => '1232117090566874fd84fb73_20235330',
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_566874fdc00197_19141419',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_566874fdc00197_19141419')) {
function content_566874fdc00197_19141419 ($_smarty_tpl) {
if (!is_callable('smarty_modifier_capitalize')) require_once '/home/ubuntu/workspace/resources/library/external/smarty/libs/plugins/modifier.capitalize.php';

$_smarty_tpl->properties['nocache_hash'] = '1232117090566874fd84fb73_20235330';
?>
<!DOCTYPE html>
<html>
<head>
    <title>COPEapp</title>
    <?php echo $_smarty_tpl->getSubTemplate ('include/external_links.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

    <?php
$_smarty_tpl->properties['nocache_hash'] = '1232117090566874fd84fb73_20235330';
?>

<?php if ($_smarty_tpl->tpl_vars['userid']->value == $_SESSION['userid']) {?>
<?php echo '<script'; ?>
 src="//cdn.ckeditor.com/4.5.5/standard/ckeditor.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="js/view_game.js"><?php echo '</script'; ?>
>
<?php }?>

</head>
<body>
    <div class="page_container">
        <?php echo $_smarty_tpl->getSubTemplate ('include/navbar.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

        <?php
$_smarty_tpl->properties['nocache_hash'] = '1232117090566874fd84fb73_20235330';
?>


<div class="page_content">
    <div class="full_game_flexbox">
        <div class="full_game_left">
            <i class="fa fa-4x <?php echo $_smarty_tpl->tpl_vars['icon']->value;?>
"></i>
            <?php if ($_smarty_tpl->tpl_vars['gametypes']->value != null) {?>
            <h3>Types</h3>
            <div class="full_game_types">
                <?php
$_from = $_smarty_tpl->tpl_vars['gametypes']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['gametype'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['gametype']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['gametype']->value) {
$_smarty_tpl->tpl_vars['gametype']->_loop = true;
$foreach_gametype_Sav = $_smarty_tpl->tpl_vars['gametype'];
?>
                <p><?php echo smarty_modifier_capitalize($_smarty_tpl->tpl_vars['gametype']->value);?>
</p>
                <?php
$_smarty_tpl->tpl_vars['gametype'] = $foreach_gametype_Sav;
}
?>
            </div>
            <?php }?>
            <?php if ($_smarty_tpl->tpl_vars['gametags']->value != null) {?>
            <h3>Tags</h3>
            <div class="full_game_tags">
                <?php
$_from = $_smarty_tpl->tpl_vars['gametags']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['gametag'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['gametag']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['gametag']->value) {
$_smarty_tpl->tpl_vars['gametag']->_loop = true;
$foreach_gametag_Sav = $_smarty_tpl->tpl_vars['gametag'];
?>
                    <p><?php echo smarty_modifier_capitalize($_smarty_tpl->tpl_vars['gametag']->value);?>
</p>
                <?php
$_smarty_tpl->tpl_vars['gametag'] = $foreach_gametag_Sav;
}
?>
            </div>
            <?php }?>
            <?php if ($_smarty_tpl->tpl_vars['equipment']->value != null) {?>
            <h3>Equipment</h3>
            <div class="full_game_equipment">
                <?php
$_from = $_smarty_tpl->tpl_vars['equipment']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['item'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['item']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->_loop = true;
$foreach_item_Sav = $_smarty_tpl->tpl_vars['item'];
?>
                    <p><?php echo $_smarty_tpl->tpl_vars['item']->value;?>
</p>
                <?php
$_smarty_tpl->tpl_vars['item'] = $foreach_item_Sav;
}
?>
            </div>
            <?php }?>
        </div>
        <div class="full_game_right">
            <div class="content_title">
                <h2><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</h2>
                <p>From Deck: <a href="view_deck.php?deckid=<?php echo $_smarty_tpl->tpl_vars['deckid']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['deckname']->value;?>
</a></p>
                <?php if ($_smarty_tpl->tpl_vars['userid']->value == $_SESSION['userid']) {?>
                [<a href="edit_game.php?gameid=<?php echo $_smarty_tpl->tpl_vars['gameid']->value;?>
">Edit</a>]
                <?php }?>
            </div>
            <hr class="hr_slash">
            <h3>Description</h3>
            <div class="ckedit_ph_wrapper" data-field="description" data-gameid="<?php echo $_smarty_tpl->tpl_vars['gameid']->value;?>
" data-userid="<?php echo $_smarty_tpl->tpl_vars['userid']->value;?>
">    
                <div class="full_game_description ckedit" <?php if ($_smarty_tpl->tpl_vars['userid']->value == $_SESSION['userid']) {?>contenteditable="true"<?php }?>>
                    <?php echo $_smarty_tpl->tpl_vars['description']->value;?>

                </div>
            </div>
            <hr class="hr_slash">
            <h3>Instructions</h3>
            <div class="ckedit_ph_wrapper" data-field="instruction" data-gameid="<?php echo $_smarty_tpl->tpl_vars['gameid']->value;?>
" data-userid="<?php echo $_smarty_tpl->tpl_vars['userid']->value;?>
">    
                <div class="full_game_instruction ckedit" <?php if ($_smarty_tpl->tpl_vars['userid']->value == $_SESSION['userid']) {?>contenteditable="true"<?php }?>>
                    <?php echo $_smarty_tpl->tpl_vars['instruction']->value;?>

                </div>
            </div>
            <hr class="hr_slash">
            <h3>Discussion</h3>
            <div class="ckedit_ph_wrapper" data-field="discussion" data-gameid="<?php echo $_smarty_tpl->tpl_vars['gameid']->value;?>
" data-userid="<?php echo $_smarty_tpl->tpl_vars['userid']->value;?>
">    
                <div class="full_game_discussion ckedit" <?php if ($_smarty_tpl->tpl_vars['userid']->value == $_SESSION['userid']) {?>contenteditable="true"<?php }?>>
                    <?php echo $_smarty_tpl->tpl_vars['discussion']->value;?>

                </div>
            </div>
        </div>

    </div>
    <div class="full_game_vidpics">
        <ul class="nav nav-tabs" role="tablist">
            <li role="presentation" class="active"><a href="#pictures" aria-controls="pictures" role="tab" data-toggle="tab">Pictures</a></li>
            <li role="presentation"><a href="#videos" aria-controls="videos" role="tab" data-toggle="tab">Videos</a></li>
        </ul>

        <div class="tab-content full_game_vidpics_content">
            <div class="full_game_pictures tab-pane active" role="tabpanel" id="pictures">
                <?php if ($_smarty_tpl->tpl_vars['gamepictures']->value != null) {?>
                <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                    <!-- Indicators -->
                    <ol class="carousel-indicators">
                        <?php
$_from = $_smarty_tpl->tpl_vars['gamepictures']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['link'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['link']->_loop = false;
$_smarty_tpl->tpl_vars['__foreach_piceach1'] = new Smarty_Variable(array('index' => -1));
foreach ($_from as $_smarty_tpl->tpl_vars['link']->value) {
$_smarty_tpl->tpl_vars['link']->_loop = true;
$_smarty_tpl->tpl_vars['__foreach_piceach1']->value['index']++;
$_smarty_tpl->tpl_vars['__foreach_piceach1']->value['first'] = $_smarty_tpl->tpl_vars['__foreach_piceach1']->value['index'] == 0;
$foreach_link_Sav = $_smarty_tpl->tpl_vars['link'];
?>
                        <li data-target="#carousel-example-generic" data-slide-to="<?php echo (isset($_smarty_tpl->tpl_vars['__foreach_piceach1']->value['index']) ? $_smarty_tpl->tpl_vars['__foreach_piceach1']->value['index'] : null);?>
"<?php if ((isset($_smarty_tpl->tpl_vars['__foreach_piceach1']->value['first']) ? $_smarty_tpl->tpl_vars['__foreach_piceach1']->value['first'] : null)) {?> class="active"<?php }?>></li>
                        <?php
$_smarty_tpl->tpl_vars['link'] = $foreach_link_Sav;
}
?>
                    </ol>

                    <!-- Wrapper for slides -->
                    
                    <div class="carousel-inner" role="listbox">
                        <?php
$_from = $_smarty_tpl->tpl_vars['gamepictures']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['link'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['link']->_loop = false;
$_smarty_tpl->tpl_vars['__foreach_piceach2'] = new Smarty_Variable(array('iteration' => 0));
foreach ($_from as $_smarty_tpl->tpl_vars['link']->value) {
$_smarty_tpl->tpl_vars['link']->_loop = true;
$_smarty_tpl->tpl_vars['__foreach_piceach2']->value['iteration']++;
$_smarty_tpl->tpl_vars['__foreach_piceach2']->value['first'] = $_smarty_tpl->tpl_vars['__foreach_piceach2']->value['iteration'] == 1;
$foreach_link_Sav = $_smarty_tpl->tpl_vars['link'];
?>
                        <div class="item<?php if ((isset($_smarty_tpl->tpl_vars['__foreach_piceach2']->value['first']) ? $_smarty_tpl->tpl_vars['__foreach_piceach2']->value['first'] : null)) {?> active<?php }?>">
                            <img src="<?php echo $_smarty_tpl->tpl_vars['link']->value;?>
" alt="<?php echo $_smarty_tpl->tpl_vars['title']->value;?>
 Picture">
                        </div>
                        <?php
$_smarty_tpl->tpl_vars['link'] = $foreach_link_Sav;
}
?>
                    </div>

                    <!-- Controls -->
                    <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
                        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
                        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
                <?php } else { ?>
                <h3>No Pictures Found!</h3>
                <?php }?>
            </div>
            <div class="full_game_videos tab-pane" role="tabpanel" id="videos">
                <?php if ($_smarty_tpl->tpl_vars['gamevideos']->value != null) {?>
                    <?php echo $_smarty_tpl->tpl_vars['gamevideos']->value[0];?>

                <?php } else { ?>
                <h3>No Videos Found!</h3>
                <?php }?>
            </div>
        </div>
    </div>
</div>


        <?php echo $_smarty_tpl->getSubTemplate ('include/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

    </div>
</body>
</html><?php }
}
?>