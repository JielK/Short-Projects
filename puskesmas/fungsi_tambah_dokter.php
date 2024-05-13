<?php 
// koneksi database
include 'koneksi.php';
 
// menangkap data yang di kirim dari form
$nik = $_POST['nik'];
$nama = $_POST['nama'];
$ttl = $_POST['ttl'];
$bidang = $_POST['bidang'];


// menginput data ke database
mysqli_query($koneksi,"insert into tb_dokter values( '','$nik','$nama','$ttl','$bidang' )");


// mengalihkan halaman kembali ke index.php
header("location:halaman_admin.php");
 
?>