<?php
include '../model/Model.php';

$connection = new Model();

if ($connection->has_email($_POST["email"])) {
    $connection->delete_user($_POST["email"]);
    echo "
    <h1> Password telah direset! </h1>
    <h2> Silahkan registrasi menggunakan password baru. </h2>
    <href> <a href='/register.php'> Ke halaman register </a> </href>
";
} else {
    echo "
    <h1> Email tidak terdaftar </h1>
    <href> <a href='/index.php'> Kembali ke halaman utama </a> </href>
";
}

