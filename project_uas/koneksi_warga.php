<?php
$host = "localhost";
$user = "root";
$pass = "";
$db = "iuran_kas_rt";
$koneksi = mysqli_connect($host, $user, $pass, $db);
if($koneksi){
    $buka=mysqli_select_db($koneksi,$db);
    echo"";
   
}

?>
