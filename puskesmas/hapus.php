<?php 
// koneksi database
include 'koneksi.php';
 
// menangkap data id yang di kirim dari url
$id_peserta = $_GET['id_peserta'];
 
 
// menghapus data dari database
mysqli_query($koneksi,"delete from tb_peserta where id_peserta='$id_peserta'");
 
// mengalihkan halaman kembali ke index.php
header("location:halaman_admin.php");
 
?>