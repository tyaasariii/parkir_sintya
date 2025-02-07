<?php

$plat_nomer = $_POST['plat_nomer'];
$id_tempat = $_POST['id_tempat'];
$waktu_masuk = $_POST['waktu_masuk'];
$jenis_kendaraan = $_POST['jenis_kendaraan'];
$nama_pemilik = $_POST['nama_pemilik'];
$waktu_keluar = $_POST['waktu_keluar'];

include '../../config/koneksi.php';

$query = mysqli_query($conn, "INSERT INTO kendaraan VALUES ('$plat_nomer','$id_tempat',
'$waktu_masuk','$jenis_kendaraan','$nama_pemilik','$waktu_keluar')");

if($query){
    echo "<script>alter('tambah berhasil')</script>";
    echo "<script>window.localtion.href='index.php'</script>";
}else{
    echo "<script>alter('tambah gagal')</script>";
    echo "<script>window.localtion.href='index.php'</script>";
}