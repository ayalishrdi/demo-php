<?php

$host   = "localhost";
$user   = "root";
$pass   = "";
$db     = "pol_idn";

$koneksi = mysqli_connect($host, $user, $pass, $db);

if (mysqli_connect_errno()){
    echo "Gagal terhubung ke server". mysqli_connect_errno();
}
    //echo "Berhasil terhubung ke server";
?>