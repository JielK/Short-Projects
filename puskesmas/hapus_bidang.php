<?php 
// koneksi database
include 'koneksi.php';
 
// menangkap data id yang di kirim dari url
$id_bidang = $_GET['id_bidang'];
 
 
// menghapus data dari database
mysqli_query($koneksi,"delete from tb_bidang where id_bidang='$id_bidang'");
 
// mengalihkan halaman kembali ke index.php
header("location:halaman_admin.php");
 
?>