<?php

$id_tempat = $_POST['id_tempat'];
$nama_tempat = $_POST['nama_tempat'];
$lokasi = $_POST['lokasi'];
$harga = $_POST['harga'];

include '../../config/koneksi.php';

$query = mysqli_query($conn, "INSERT INTO tempat_parkir VALUES ('$id_tempat',
'$nama_tempat','$lokasi','$harga')");

if($query){
    echo "<script>alter('tambah berhasil')</script>";
    echo "<script>window.localtion.href='index.php'</script>";
}else{
    echo "<script>alter('tambah gagal')</script>";
    echo "<script>window.localtion.href='index.php'</script>";
}