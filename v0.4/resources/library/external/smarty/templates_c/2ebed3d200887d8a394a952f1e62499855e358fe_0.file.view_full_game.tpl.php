<?php
/* Smarty version 3.1.28-dev/77, created on 2015-11-28 20:51:39
  from "/home/ubuntu/workspace/v0.4/resources/templates/game/view_full_game.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.28-dev/77',
  'unifunc' => 'content_565a13dba4c966_12945231',
  'file_dependency' => 
  array (
    '2ebed3d200887d8a394a952f1e62499855e358fe' => 
    array (
      0 => '/home/ubuntu/workspace/v0.4/resources/templates/game/view_full_game.tpl',
      1 => 1448743898,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:base.tpl' => 1,
  ),
),false)) {
function content_565a13dba4c966_12945231 ($_smarty_tpl) {
if (!is_callable('smarty_modifier_capitalize')) require_once '/home/ubuntu/workspace/v0.4/resources/library/external/smarty/libs/plugins/modifier.capitalize.php';
$_smarty_tpl->ext->_inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->ext->_inheritance->processBlock($_smarty_tpl, 0, 'content', array (
  0 => 'block_1427692951565a13db9d2905_86365328',
  1 => false,
  3 => 0,
  2 => 0,
));
$_smarty_tpl->ext->_inheritance->endChild($_smarty_tpl);
$_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:base.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 2, false);
}
/* {block 'content'}  file:game/view_full_game.tpl */
function block_1427692951565a13db9d2905_86365328($_smarty_tpl, $_blockParentStack) {
?>


<div class="page_content">
    <div class="full_game_flexbox">
        <div class="full_game_left">
            <i class="fa fa-4x fa-<?php echo $_smarty_tpl->tpl_vars['icon']->value;?>
"></i>
            <?php if ($_smarty_tpl->tpl_vars['gametypes']->value != null) {?>
            <h3>Types</h3>
            <div class="full_game_types">
                <?php
$_from = $_smarty_tpl->tpl_vars['gametypes']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_gametype_0_saved_item = isset($_smarty_tpl->tpl_vars['gametype']) ? $_smarty_tpl->tpl_vars['gametype'] : false;
$_smarty_tpl->tpl_vars['gametype'] = new Smarty_Variable();
$__foreach_gametype_0_total = $_smarty_tpl->smarty->ext->_foreach->count($_from);
if ($__foreach_gametype_0_total) {
foreach ($_from as $_smarty_tpl->tpl_vars['gametype']->value) {
$__foreach_gametype_0_saved_local_item = $_smarty_tpl->tpl_vars['gametype'];
?>
                <p><?php echo smarty_modifier_capitalize($_smarty_tpl->tpl_vars['gametype']->value);?>
</p>
                <?php
$_smarty_tpl->tpl_vars['gametype'] = $__foreach_gametype_0_saved_local_item;
}
}
if ($__foreach_gametype_0_saved_item) {
$_smarty_tpl->tpl_vars['gametype'] = $__foreach_gametype_0_saved_item;
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
$__foreach_gametag_1_saved_item = isset($_smarty_tpl->tpl_vars['gametag']) ? $_smarty_tpl->tpl_vars['gametag'] : false;
$_smarty_tpl->tpl_vars['gametag'] = new Smarty_Variable();
$__foreach_gametag_1_total = $_smarty_tpl->smarty->ext->_foreach->count($_from);
if ($__foreach_gametag_1_total) {
foreach ($_from as $_smarty_tpl->tpl_vars['gametag']->value) {
$__foreach_gametag_1_saved_local_item = $_smarty_tpl->tpl_vars['gametag'];
?>
                    <p><?php echo smarty_modifier_capitalize($_smarty_tpl->tpl_vars['gametag']->value);?>
</p>
                <?php
$_smarty_tpl->tpl_vars['gametag'] = $__foreach_gametag_1_saved_local_item;
}
}
if ($__foreach_gametag_1_saved_item) {
$_smarty_tpl->tpl_vars['gametag'] = $__foreach_gametag_1_saved_item;
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
$__foreach_item_2_saved_item = isset($_smarty_tpl->tpl_vars['item']) ? $_smarty_tpl->tpl_vars['item'] : false;
$_smarty_tpl->tpl_vars['item'] = new Smarty_Variable();
$__foreach_item_2_total = $_smarty_tpl->smarty->ext->_foreach->count($_from);
if ($__foreach_item_2_total) {
foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
$__foreach_item_2_saved_local_item = $_smarty_tpl->tpl_vars['item'];
?>
                    <p><?php echo $_smarty_tpl->tpl_vars['item']->value;?>
</p>
                <?php
$_smarty_tpl->tpl_vars['item'] = $__foreach_item_2_saved_local_item;
}
}
if ($__foreach_item_2_saved_item) {
$_smarty_tpl->tpl_vars['item'] = $__foreach_item_2_saved_item;
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
            </div>
            <hr>
            <h3>Description</h3>
            <div class="full_game_description">
                <?php echo $_smarty_tpl->tpl_vars['description']->value;?>

            </div>
            <hr>
            <h3>Instructions</h3>
            <div class="full_game_instruction">
                <?php echo $_smarty_tpl->tpl_vars['instructions']->value;?>

            </div>
            <hr>
            <h3>Discussion</h3>
            <div class="full_game_discussion">
                <?php echo $_smarty_tpl->tpl_vars['discussion']->value;?>

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
$__foreach_piceach1_3_saved = isset($_smarty_tpl->tpl_vars['__smarty_foreach_piceach1']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_piceach1'] : false;
$__foreach_piceach1_3_saved_item = isset($_smarty_tpl->tpl_vars['link']) ? $_smarty_tpl->tpl_vars['link'] : false;
$_smarty_tpl->tpl_vars['link'] = new Smarty_Variable();
$__foreach_piceach1_3_total = $_smarty_tpl->smarty->ext->_foreach->count($_from);
$_smarty_tpl->tpl_vars['__smarty_foreach_piceach1'] = new Smarty_Variable(array('index' => -1));
if ($__foreach_piceach1_3_total) {
$__foreach_piceach1_3_first = true;
foreach ($_from as $_smarty_tpl->tpl_vars['link']->value) {
$_smarty_tpl->tpl_vars['__smarty_foreach_piceach1']->value['index']++;
$_smarty_tpl->tpl_vars['__smarty_foreach_piceach1']->value['first'] = $__foreach_piceach1_3_first;
$__foreach_piceach1_3_first = false;
$__foreach_piceach1_3_saved_local_item = $_smarty_tpl->tpl_vars['link'];
?>
                        <li data-target="#carousel-example-generic" data-slide-to="<?php echo (isset($_smarty_tpl->tpl_vars['__smarty_foreach_piceach1']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_piceach1']->value['index'] : null);?>
"<?php if ((isset($_smarty_tpl->tpl_vars['__smarty_foreach_piceach1']->value['first']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_piceach1']->value['first'] : null)) {?> class="active"<?php }?>></li>
                        <?php
$_smarty_tpl->tpl_vars['link'] = $__foreach_piceach1_3_saved_local_item;
}
}
if ($__foreach_piceach1_3_saved) {
$_smarty_tpl->tpl_vars['__smarty_foreach_piceach1'] = $__foreach_piceach1_3_saved;
}
if ($__foreach_piceach1_3_saved_item) {
$_smarty_tpl->tpl_vars['link'] = $__foreach_piceach1_3_saved_item;
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
$__foreach_piceach2_4_saved = isset($_smarty_tpl->tpl_vars['__smarty_foreach_piceach2']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_piceach2'] : false;
$__foreach_piceach2_4_saved_item = isset($_smarty_tpl->tpl_vars['link']) ? $_smarty_tpl->tpl_vars['link'] : false;
$_smarty_tpl->tpl_vars['link'] = new Smarty_Variable();
$__foreach_piceach2_4_total = $_smarty_tpl->smarty->ext->_foreach->count($_from);
$_smarty_tpl->tpl_vars['__smarty_foreach_piceach2'] = new Smarty_Variable(array());
if ($__foreach_piceach2_4_total) {
$__foreach_piceach2_4_first = true;
foreach ($_from as $_smarty_tpl->tpl_vars['link']->value) {
$_smarty_tpl->tpl_vars['__smarty_foreach_piceach2']->value['first'] = $__foreach_piceach2_4_first;
$__foreach_piceach2_4_first = false;
$__foreach_piceach2_4_saved_local_item = $_smarty_tpl->tpl_vars['link'];
?>
                        <div class="item<?php if ((isset($_smarty_tpl->tpl_vars['__smarty_foreach_piceach2']->value['first']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_piceach2']->value['first'] : null)) {?> active<?php }?>">
                            <img src="<?php echo $_smarty_tpl->tpl_vars['link']->value;?>
" alt="<?php echo $_smarty_tpl->tpl_vars['title']->value;?>
 Picture">
                        </div>
                        <?php
$_smarty_tpl->tpl_vars['link'] = $__foreach_piceach2_4_saved_local_item;
}
}
if ($__foreach_piceach2_4_saved) {
$_smarty_tpl->tpl_vars['__smarty_foreach_piceach2'] = $__foreach_piceach2_4_saved;
}
if ($__foreach_piceach2_4_saved_item) {
$_smarty_tpl->tpl_vars['link'] = $__foreach_piceach2_4_saved_item;
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
                <video controls>
                    <source src="<?php echo $_smarty_tpl->tpl_vars['gamevideos']->value[0];?>
">
                </video>
                <?php } else { ?>
                <h3>No Videos Found!</h3>
                <?php }?>
            </div>
        </div>
    </div>
</div>

<?php
}
/* {/block 'content'} */
}
