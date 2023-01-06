<form action="/api/data_login.php" method="post">
    <fieldset>
        <legend>Login</legend>

        <div class="form-group row">
            <div class="form-group">
                <label for="exampleInputEmail1" class="form-label mt-4">Email address</label>
                <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1" class="form-label mt-4">Password</label>
                <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
            </div>

        <fieldset class="form-group">
            <div class="form-check button-spacer">
                <input class="form-check-input" type="checkbox" name="checkbox_session" value="enabled" id="flexCheckChecked" checked="">
                <label class="form-check-label" for="flexCheckChecked">
                    Remember me
                </label>
            </div>
        </fieldset>
        </div>

        <div class="button-spacer">
            <button type="submit" class="btn btn-primary">Login</button>
            <a href="/register.php" class="btn btn-primary">Register</a>
            <a href="/forgot_password.php" class="btn btn-primary">Forgot Password</a>
        </div>
    </fieldset>
</form>

<style>
    .button-spacer {
        margin: 15px 15px 0px;
    }
</style>
