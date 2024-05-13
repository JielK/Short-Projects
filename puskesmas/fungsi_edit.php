<?php 
// koneksi database
include 'koneksi.php';
 
// menangkap data yang di kirim dari form
$id_peserta = $_POST['id_peserta'];
$nik = $_POST['nik'];
$nama = $_POST['nama'];
$ttl = $_POST['ttl'];


// update data ke database
mysqli_query($koneksi,"update tb_peserta set nik='$nik', nama='$nama', ttl='$ttl' where id_peserta='$id_peserta'");
 
// mengalihkan halaman kembali ke index.php
header("location:halaman_admin.php");
 
?>