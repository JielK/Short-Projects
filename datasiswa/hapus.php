<?php 
// koneksi database
include 'koneksi.php';
 
// menangkap data id yang di kirim dari url
$id_siswa = $_GET['id_siswa'];
 
 
// menghapus data dari database
mysqli_query($koneksi,"delete from siswa where id_siswa='$id_siswa'");
 
// mengalihkan halaman kembali ke index.php
header("location:halaman_admin.php");
 
?>