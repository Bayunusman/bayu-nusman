<!DOCTYPE html>

<?php
if ($_COOKIE["session"] == null) {
    header('Location: login.php');
    die();
}
?>

<html lang="php">
<head>
    <title>Website Registrasi | Homepage</title>
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
    <h1>Welcome <?php
        $email = $_COOKIE['session'];
        echo "$email"
        ?></h1>

    <form action="/api/data_logout.php" method="post">
        <button type="submit" class="btn btn-warning">Logout</button>
    </form>



</div>
</body>

<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

</html>

