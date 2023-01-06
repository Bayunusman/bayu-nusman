<!DOCTYPE html>
<html lang="php">
<body>
<?php
include '../model/Model.php';

$connection = new Model();

if ($connection->has_email($_POST["email"])) {
    $entered_password = $_POST["password"];
    $stored_password = $connection->get_password($_POST["email"]);

    if ($entered_password != $stored_password) {
        echo "
            <h1> Password salah </h1>
            <href> <a href='/index.php'> Kembali ke halaman utama </a> </href>
        ";
    } else {
        if ($_POST["checkbox_session"] != null) {
            setcookie("session", $_POST["email"], time() + (86400), "/");
        }
        echo "
            <h1> Login berhasil! </h1>
            <href> <a href='/index.php'> Kembali ke halaman utama </a> </href>
        ";
    }
} else {
    echo "
        <h1> Email tidak terdaftar </h1>
        <href> <a href='/index.php'> Kembali ke halaman utama </a> </href>
    ";
}
?>

</body>
</html>
