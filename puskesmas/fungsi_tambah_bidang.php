<?php 
// koneksi database
include 'koneksi.php';
 
// menangkap data yang di kirim dari form
$nama_bidang = $_POST['nama_bidang'];


// menginput data ke database
mysqli_query($koneksi,"insert into tb_bidang values('','$nama_bidang')");
 
// mengalihkan halaman kembali ke index.php
header("location:halaman_admin.php");
 
?>