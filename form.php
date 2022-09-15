<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form PHP</title>
    <style>
        .error{ color:red}
     </style>
</head>
<body>
    <?php
    
    $nameErr="";

    if($_SERVER['REQUEST_METHOD'] == "POST"){
        if(empty($_POST["nama"])){
        $nameErr = "Jangan kosongkan tabel ini";
         } 
         $nama = $_POST['nama'];
        }
    
    ?>
    <form action="<?php echo $_SERVER["PHP_SELF"];?>" method="post">
        <label> Nama Lengkap </label> <br>
        <input type="text" name="nama">
        <span class="error">* <?php echo $nameErr;?> </span><br><br>
        <button type="submit">Kirim</button>
    </form>

    <h6>Data terinput<h6>
        <?php
        print $nama;
        ?>

</body>
</html>