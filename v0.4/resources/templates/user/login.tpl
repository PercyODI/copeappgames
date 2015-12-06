{extends file='base.tpl'}
{block name=extra_head}
<script src="js/login.js"></script>
{/block}

{block name=content}

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

{/block}