<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Input data hutang</title>
</head>
<body>
    <h3>Input data hutang terbaru</h3>

        <form action="proses-input.php" method="post">
            <label for="nis">Nis</label> <br>
            <input type="text" name="nis" id="nis">
            <br>

            <label for="nama">Nama</label> <br>
            <input type="text" name="nama" id="nama">
            <br>

            <label for="hutang">Hutang</label> <br>
            <input type="number" name="hutang" id="hutang">
            <br><br>
            <button type="submit">SAVE</button>
        </form>
</body>
</html>