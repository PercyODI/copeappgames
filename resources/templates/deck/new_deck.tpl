{extends file='base.tpl'}
{block name=extra_head}
<link rel="stylesheet" type="text/css" href="js/external/fontawesome-iconpicker/css/fontawesome-iconpicker.min.css">

<script src="js/new_deck.js"></script>
<script src="js/external/fontawesome-iconpicker/js/fontawesome-iconpicker.min.js"></script>
{/block}

{block name=content}

<div class="page_content">
    <form class="single_form new_deck_form card form-horizontal col-sm-6">
        <h2>New Deck Creator</h2>
        <div class="form-group" id="name" requiredInput>
            <label for="name" class="col-sm-3 control-label">Deck Name</label>
            <div class="col-sm-9">
                <input type="text" class="form-control input-lg" id="name" name="name" required>
            </div>
        </div>
        <div class="form-group" requiredInput>
            <label for="description" class="col-sm-3 control-label">Description</label>
            <div class="col-sm-9">
                <input type="text" class="form-control input-lg" id="description" name="description" required>
            </div>
        </div>
        <div class="form-group" requiredInput>
            <label for="username" class="col-sm-3 control-label">Deck Icon</label>
            <div class="col-sm-9">
                <input name="icon" id="icon" class="form-control input-lg icp icp-auto iconpicker-element iconpicker-input" value="fa-gamepad" type="text">
                <!--<label data-placement="inline" class="icp icp-auto" data-selected="fa-gamepad"></label>-->
                <!--<div class="btn-group">-->
                <!--    <div class="btn-group">-->
                <!--        <button type="button" class="btn btn-default iconpicker-component"><i class="fa fa-fw fa-heart"></i></button>-->
                <!--        <button type="button" class="icp icp-dd icp-auto btn btn-primary dropdown-toggle" data-selected="fa-car" data-toggle="dropdown">-->
                <!--            <span class="caret"></span>-->
                <!--            <span class="sr-only">Toggle Dropdown</span>-->
                <!--        </button>-->
                <!--        <div class="dropdown-menu"></div>-->
                <!--    </div>-->
                <!--</div>-->
            </div>
        </div>
        <div class="js_alert alert alert-warning alert-dismissible" role="alert" style="display: none;"></div>
        <button type="submit" class="new_deck_btn btn btn-primary btn-block" id="register_btn">Create Deck</button>
    </form>
</div>

{/block}