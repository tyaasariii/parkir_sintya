<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Parkiran</title>
</head>
<body>
    <h1>Data tempat parkir</h1>
    <table border="1">
    <a href="tambah.php">kendaraaan baru</tambah></a>
        <tr>
            <th>no</th>
            <th>plat nomer</th>
            <th>id tempat</th>
            <th>waktu masuk</th>
            <th>jenis kendaraan</th>
            <th>nama pemilik</th>
            <th>waktu keluar</th>
        </tr>
        <?php
            include '../../config/koneksi.php';
            $query = mysqli_query($conn,"SELECT * fROM kendaraan");
            $no=1;
            if(mysqli_num_rows($query)){
                while($result=mysqli_fetch_assoc($query)){
                    ?>
                <tr>
                <td><?php echo $no ?></td>
                    <td><?php echo $result ['plat_nomer']?></td>
                    <td><?php echo $result ['id_tempat']?></td>
                    <td><?php echo $result ['waktu_masuk']?></td>
                    <td><?php echo $result ['jenis_kendaraan']?></td>
                    <td><?php echo $result ['nama_pemilik']?></td>
                    <td><?php echo $result ['waktu_keluar']?></td>
                    <td>
                        <a href="">Edit</a>
                        <a href="">Hapus</a>
                    </td>
                </tr>
                <?php
                $no++;
                }
            }else{
                echo "Data Kosong";
            }
            ?>
    </table>
</body>
</html>