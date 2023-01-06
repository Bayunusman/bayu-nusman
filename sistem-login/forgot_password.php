<!DOCTYPE html>

<html lang="php">
<head>
    <title>Website Registrasi | Lupa Password</title>
    <link rel="icon" href="assets/vite.svg">
</head>
<style>
    <?php
    include 'assets/style.css';
    include 'assets/bootstrap.min.css';
    ?>
</style>

<body>
<div class="container">
    <form action="/api/data_change_password.php" method="post">
    <fieldset>
        <legend>Lupa Password</legend>

        <div class="form-group row">
            <div class="form-group">
                <label for="exampleInputEmail1" class="form-label mt-4">Email address</label>
                <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
            </div>

        </div>
            <div class="button-spacer">
                <button type="submit" class="btn btn-primary">Reset Password</button>
            </div>
    </fieldset>
</form>
</div>
</body>

<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

</html>

<style>
    .button-spacer {
        margin: 15px 15px 0px;
    }
</style>
