<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Kendaraan Baru</title>
</head>
<body>
    <h1>Tambah Kendaraan Baru</h1>
    <form action="simpan.php" method="POST">
        <label for="">plat nomer</label>
        <input type="text" name="plat_nomer">
        <br>
        <label for="">id tempat</label>
        <input type="number" name="id_tempat">
        <br>
        <label for="">waktu masuk</label>
        <input type="time" name="waktu_masuk">
        <br>
        <label for="">jenis kendaraan</label>
        <input type="text" name="jenis_kendaraan">
        <br>
        <label for="">nama pemilik</label>
        <input type="text" name="nama_pemilik">
        <br>
        <label for="">waktu keluar</label>
        <input type="time" name="waktu_keluar">
        <br>
        <button type="submit">simpan</button>
    </form>
</body>
</html>