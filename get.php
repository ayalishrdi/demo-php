<?php

include 'koneksi.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar hutang IDN</title>
</head>
<body>

    <table border="1">
    <h2>List hutang by anak IDN</h2>
    <a href="input.php">Tambah Data</a>
    <br><br>
        <tr>
            <th>Nis</th>
            <th>Nama</th>
            <th>Hutang</th>
            <th>Opsi</th>
        </tr>
    
<?php
$data = mysqli_query($koneksi, "SELECT * FROM idn_mart");
while ($idn_mart = mysqli_fetch_array($data)){

?>

    <tr>
        <td><?php print $idn_mart['nis']; ?></td>
        <td><?php print $idn_mart['nama']; ?></td>
        <td><?php print $idn_mart['hutang']; ?></td>
        <td> 
            <a href="edit.php?nis=<?php print $idn_mart['nis'];?>">Edit</a>
            <a href="delete.php?nis=<?php print $idn_mart['nis'];?>">Delete</a>

    </tr>

    <?php 
    }
    ?>
</body>
</html>