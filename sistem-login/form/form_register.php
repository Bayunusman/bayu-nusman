<form action="/api/data_register.php" method="post">
    <fieldset>
        <legend>Website Pendaftaran</legend>

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

        </div>
            <div class="button-spacer">
                <button type="submit" class="btn btn-primary">Register</button>
            </div>
    </fieldset>
</form>

<style>
    .button-spacer {
        margin: 20px 15px 0px;
    }
</style>
