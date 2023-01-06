<!DOCTYPE html>
<html lang="php">
<body>
<?php
include '../model/Model.php';

$connection = new Model();

if ($connection->has_email($_POST["email"])) {
    echo "
<h1> Email sudah terdaftar </h1>
<href> <a href='/index.php'> Kembali ke halaman utama </a> </href>
";
} else {
    $connection->create_user($_POST["email"], $_POST["password"]);
    echo "
<h1> Email berhasil didaftarkan </h1>
<href> <a href='/index.php'> Kembali ke halaman utama </a> </href>
";
}
?>

</body>
</html>