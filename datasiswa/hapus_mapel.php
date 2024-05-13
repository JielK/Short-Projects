<?php 
// koneksi database
include 'koneksi.php';
 
// menangkap data id yang di kirim dari url
$id_mata_pelajaran = $_GET['id_mata_pelajaran'];
 
 
// menghapus data dari database
mysqli_query($koneksi,"delete from mata_pelajaran where id_mata_pelajaran='$id_mata_pelajaran'");
 
// mengalihkan halaman kembali ke index.php
header("location:halaman_admin.php");
 
?>