{extends file='base.tpl'}
{block name=extra_head}
<link rel="stylesheet" type="text/css" href="js/external/fontawesome-iconpicker/css/fontawesome-iconpicker.min.css">

<script src="js/new_game.js"></script>
<script src="js/external/fontawesome-iconpicker/js/fontawesome-iconpicker.min.js"></script>
<script src="//cdn.ckeditor.com/4.5.5/standard/ckeditor.js"></script>
{/block}

{block name=content}

<div class="page_content">
    <form class="single_form new_game_form card form-horizontal col-sm-6">
        <h2>New Game Creator</h2>
        <div class="form-group" id="title" requiredInput>
            <label for="title" class="col-sm-3 control-label">Game Title</label>
            <div class="col-sm-9">
                <input type="text" class="form-control input-lg" id="title" name="title" required>
            </div>
        </div>
        <div class="form-group" requiredInput>
            <label for="description" class="col-sm-3 control-label">Description</label>
            <div class="col-sm-9">
                <textarea class="form-control input-lg ckedit" id="description" name="description" required></textarea>
            </div>
        </div>
        <div class="form-group" requiredInput>
            <label for="instruction" class="col-sm-3 control-label">Instruction</label>
            <div class="col-sm-9">
                <textarea class="form-control input-lg ckedit" id="instruction" name="instruction"></textarea>
            </div>
        </div>
        <div class="form-group" requiredInput>
            <label for="discussion" class="col-sm-3 control-label">Discussion</label>
            <div class="col-sm-9">
                <textarea class="form-control input-lg ckedit" id="discussion" name="discussion"></textarea>
            </div>
        </div>
        <div class="form-group" requiredInput>
            <label for="username" class="col-sm-3 control-label">Game Icon</label>
            <div class="col-sm-9">
                <input name="icon" id="icon" class="form-control input-lg icp icp-auto iconpicker-element iconpicker-input" value="fa-gamepad" type="text">
            </div>
        </div>
        <div class="form-group" requiredInput>
            <label for="discussion" class="col-sm-3 control-label">Primary Type</label>
            <div class="col-sm-9">
                <select name="primary_type" id="primary_type" class="form-control input-lg">
                    <option label="None" value="None">None</option>
                    {foreach from=$types key=k item=v}
                    <option label="{$v|capitalize}" value="{$k}">{$v|capitalize}</option>
                    {/foreach}
                </select>
            </div>
        </div>
        <div class="form-group" requiredInput>
            <label for="discussion" class="col-sm-3 control-label">Secondary Type</label>
            <div class="col-sm-9">
                <select name="secondary_type" id="secondary_type" class="form-control input-lg" disabled>
                    <option label="None" value="None">None</option>
                    {foreach from=$types key=k item=v}
                    <option label="{$v|capitalize}" value="{$k}">{$v|capitalize}</option>
                    {/foreach}
                </select>
            </div>
        </div>
        <input type="hidden" name="deckid" id="deckid" value="{$smarty.get.deckid}">
        <div class="js_alert alert alert-warning alert-dismissible" role="alert" style="display: none;"></div>
        <button type="submit" class="new_game_btn btn btn-primary btn-block" id="register_btn">Create Game</button>
    </form>
</div>

{/block}