{extends file='base.tpl'}
{block name=extra_head}
<link rel="stylesheet" type="text/css" href="js/external/fontawesome-iconpicker/css/fontawesome-iconpicker.min.css">

<script src="js/edit_game.js"></script>
<script src="js/external/fontawesome-iconpicker/js/fontawesome-iconpicker.min.js"></script>
<script src="//cdn.ckeditor.com/4.5.5/full/ckeditor.js"></script>
{/block}

{block name=content}

<div class="page_content">
    <form class="single_form edit_game_form card form-horizontal col-sm-6">
        <h2>Game Editor</h2>
        <div class="form-group" id="title" requiredInput>
            <label for="title" class="col-sm-3 control-label">Game Title</label>
            <div class="col-sm-9">
                <input type="text" class="form-control input-lg" id="title" name="title" value="{$game->getTitle()}" required>
            </div>
        </div>
        <div class="form-group" requiredInput>
            <label for="description" class="col-sm-3 control-label">Description</label>
            <div class="col-sm-9">
                <textarea class="form-control input-lg ckedit" id="description" name="description" value="{$game->getDescription()}" required>{$game->getDescription()}</textarea>
            </div>
        </div>
        <div class="form-group" requiredInput>
            <label for="instruction" class="col-sm-3 control-label">Instruction</label>
            <div class="col-sm-9">
                <textarea class="form-control input-lg ckedit" id="instruction" name="instruction" value="{$game->getInstruction()}">{$game->getInstruction()}</textarea>
            </div>
        </div>
        <div class="form-group" requiredInput>
            <label for="discussion" class="col-sm-3 control-label">Discussion</label>
            <div class="col-sm-9">
                <textarea class="form-control input-lg ckedit" id="discussion" name="discussion" value="{$game->getDiscussion()}">{$game->getDiscussion()}</textarea>
            </div>
        </div>
        <div class="form-group" requiredInput>
            <label for="username" class="col-sm-3 control-label">Game Icon</label>
            <div class="col-sm-9">
                <input name="icon" id="icon" class="form-control input-lg icp icp-auto iconpicker-element iconpicker-input" value="{$game->getIcon()}" type="text">
            </div>
        </div>
        <div class="form-group" requiredInput>
            <label for="discussion" class="col-sm-3 control-label">Primary Type</label>
            <div class="col-sm-9">
                <select name="primary_type" id="primary_type" class="form-control input-lg">
                    <option label="None" value="None">None</option>
                    {foreach from=$types key=k item=v}
                    <option label="{$v|capitalize}" value="{$k}"{if $k == $game->getPrimary_type()} selected{/if}>{$v|capitalize}</option>
                    {/foreach}
                </select>
            </div>
        </div>
        <div class="form-group" requiredInput>
            <label for="discussion" class="col-sm-3 control-label">Secondary Type</label>
            <div class="col-sm-9">
                <select name="secondary_type" id="secondary_type" class="form-control input-lg">
                    <option label="None" value="None">None</option>
                    {foreach from=$types key=k item=v}
                    <option label="{$v|capitalize}" value="{$k}"{if $k == $game->getSecondary_type()} selected{/if}>{$v|capitalize}</option>
                    {/foreach}
                </select>
            </div>
        </div>
        <input type="hidden" name="gameid" id="gameid" value="{$game->getGameid()}">
        <input type="hidden" name="userid" id="userid" value="{$game->getUserid()}">
        <div class="js_alert alert alert-warning alert-dismissible" role="alert" style="display: none;"></div>
        <button type="submit" class="edit_game_btn btn btn-primary btn-block" id="register_btn">Save Game</button>
    </form>
</div>

{/block}