<?php
 
    include "koneksi.php";

    $nis    = $_POST['nis'];
    $nama   = $_POST['nama'];
    $hutang = $_POST['hutang'];

    $data = mysqli_query ($koneksi, "INSERT INTO idn_mart VALUES ('$nis', '$nama', '$hutang')");

    header("location:get.php");

 ?>