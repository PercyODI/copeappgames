{extends file='base.tpl'}
{block name=extra_head}
<link rel="stylesheet" type="text/css" href="js/external/fontawesome-iconpicker/css/fontawesome-iconpicker.min.css">

<script src="js/edit_deck.js"></script>
<script src="js/external/fontawesome-iconpicker/js/fontawesome-iconpicker.min.js"></script>
{/block}

{block name=content}

<div class="page_content">
    <form class="single_form edit_deck_form card form-horizontal col-sm-6">
        <h2>Deck Editor</h2>
        <div class="form-group" id="name" requiredInput>
            <label for="name" class="col-sm-3 control-label">Deck Name</label>
            <div class="col-sm-9">
                <input type="text" class="form-control input-lg" id="name" name="name" value="{$deck->getName()}" required>
            </div>
        </div>
        <div class="form-group" requiredInput>
            <label for="description" class="col-sm-3 control-label">Description</label>
            <div class="col-sm-9">
                <textarea class="form-control input-lg" id="description" name="description" required>{$deck->getDescription()}</textarea>
            </div>
        </div>
        <div class="form-group" requiredInput>
            <label for="username" class="col-sm-3 control-label">Deck Icon</label>
            <div class="col-sm-9">
                <input name="icon" id="icon" class="form-control input-lg icp icp-auto iconpicker-element iconpicker-input" value="{$deck->getIcon()}" type="text">
            </div>
        </div>
        <input type="hidden" name="deckid" id="deckid" value="{$deck->getDeckid()}">
        <input type="hidden" name="userid" id="userid" value="{$deck->getUserid()}">
        <div class="js_alert alert alert-warning alert-dismissible" role="alert" style="display: none;"></div>
        <button type="submit" class="edit_deck_btn btn btn-primary btn-block" id="register_btn">Save Deck</button>
    </form>
</div>

{/block}