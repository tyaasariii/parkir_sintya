<?php 

$conn = mysqli_connect('localhost','root','','db_parkiran_sintya');

if(!$conn){
    die("koneksi Gagal" . mysqli_connect_error());
}