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
            <th>id tempat</th>
            <th>nama tempat</th>
            <th>lokasi</th>
            <th>harga</th>
        </tr>
        <?php
            include '../../config/koneksi.php';
            $query = mysqli_query($conn,"SELECT * fROM tempat_parkir");
            $no=1;
            if(mysqli_num_rows($query)){
                while($result=mysqli_fetch_assoc($query)){
                    ?>
                <tr>
                <td><?php echo $no ?></td>
                    <td><?php echo $result ['id_tempat']?></td>
                    <td><?php echo $result ['nama_tempat']?></td>
                    <td><?php echo $result ['lokasi']?></td>
                    <td><?php echo $result ['harga']?></td>
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