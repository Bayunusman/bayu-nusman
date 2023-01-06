<?php

setcookie("session", $_COOKIE["session"], time() - (3600), "/");

echo "
    <h1> Logout berhasil! </h1>
    <href> <a href='/index.php'> Kembali ke halaman utama </a> </href>
";
