{extends file='base.tpl'}
{block name=extra_head}
<script src="js/register.js"></script>
{/block}

{block name=content}

<div class="page_content">
    <form class="register_form card form-horizontal col-sm-6">
        <h2>New User Registration</h2>
        <div class="form-group" id="username_parent" requiredInput>
            <label for="username" class="col-sm-3 control-label">Username</label>
            <div class="col-sm-9">
                <input type="text" class="form-control input-lg" id="username" name="username" required>
            </div>
        </div>
        <div class="form-group" requiredInput>
            <label for="username" class="col-sm-3 control-label">Password</label>
            <div class="col-sm-9">
                <input type="password" class="form-control input-lg" id="password" name="password" required>
            </div>
        </div>
        <div class="form-group" requiredInput>
            <label for="username" class="col-sm-3 control-label">Confirm Password</label>
            <div class="col-sm-9">
                <input type="password" class="form-control input-lg" id="confirmpassword" name="confirmpassword" required>
            </div>
        </div>
        <div class="form-group">
            <label for="username" class="col-sm-3 control-label">First Name</label>
            <div class="col-sm-9">
                <input type="text" class="form-control input-lg" id="fname" name="fname">
            </div>
        </div>
        <div class="form-group">
            <label for="username" class="col-sm-3 control-label">Last Name</label>
            <div class="col-sm-9">
                <input type="text" class="form-control input-lg" id="lname" name="lname">
            </div>
        </div>
        <div class="form-group">
            <label for="username" class="col-sm-3 control-label">Copename</label>
            <div class="col-sm-9">
                <input type="text" class="form-control input-lg" id="copename" name="copename">
            </div>
        </div>
        <div class="js_alert alert alert-warning alert-dismissible" role="alert" style="display: none;"></div>
        <button type="submit" class="btn btn-primary btn-block" id="register_btn">Register</button>
    </form>
</div>

{/block}