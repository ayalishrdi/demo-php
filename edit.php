<?php

include 'koneksi.php';

$nis = $_POST['nis'];

$data = mysqli_query($koneksi, "SELECT * FROM idn_mart WHERE nis='$nis'");
while($idn_mart = mysqli_fetch_array($data)){
    //var_dump($idn_mart);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit data siswa</title>
</head>
<body>
    <form action="" method="post">
            <label for="nama">Nama</label> <br>
            <input type="text" name="nama" id="nama">
            <br>

            <label for="hutang">Hutang</label> <br>
            <input type="number" name="hutang" id="hutang">
            <br><br>
            <button type="submit">Ubah</button>
    </form>
    <?php
    }
    ?>
</body>
</html>