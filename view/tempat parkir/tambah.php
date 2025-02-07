<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tempat Parkir</title>
</head>
<body>
    <h1>Tempat parkir</h1>
    <form action="simpan.php" method="POST">
        <label for="">id tempat</label>
        <input type="number" name="id_tempat">
        <br>
        <label for="">nama tempat</label>
        <input type="text" name="nama_tempat">
        <br>
        <label for="">lokasi</label>
        <input type="text" name="lokasi">
        <br>
        <label for="">harga</label>
        <input type="text" name="harga">
        <br>
        <button type="submit">simpan</button>
    </form>
</body>
</html>