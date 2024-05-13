<?php 
// koneksi database
include 'koneksi.php';
 
// menangkap data yang di kirim dari form
$id_dokter = $_POST['id_dokter'];
$nik = $_POST['nik'];
$nama = $_POST['nama'];
$ttl = $_POST['ttl'];
$bidang = $_POST['bidang'];


// update data ke database
mysqli_query($koneksi,"update tb_dokter set nik='$nik', nama='$nama', ttl='$ttl', bidang='$bidang' where id_dokter='$id_dokter'");
 
// mengalihkan halaman kembali ke index.php
header("location:halaman_admin.php");
 
?>