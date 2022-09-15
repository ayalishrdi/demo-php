<?php
 include 'koneksi.php';

 $nis = $_GET['nis'];

 mysqli_query($koneksi, "DELETE FROM idn_mart WHERE nis='$nis'");

 header("location:get.php");

?>