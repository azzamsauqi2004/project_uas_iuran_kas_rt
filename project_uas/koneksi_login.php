<?php

$host = "localhost";
$user = "root";
$pass = "";
$db = "iuran_kas_rt";

$conn = mysqli_connect($host, $user, $pass, $db);

if (!$conn) {
    die("Koneksi ke server gagal: " . mysqli_connect_error());
} else {
    echo "Koneksi berhasil";
}

?>


