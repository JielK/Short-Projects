<?php 
// koneksi database
include 'koneksi.php';
 
// menangkap data yang di kirim dari form
$id_bidang = $_POST['id_bidang'];
$nama_bidang = $_POST['nama_bidang'];



// update data ke database
mysqli_query($koneksi,"update tb_bidang set nama_bidang='$nama_bidang' where id_bidang='$id_bidang'");
 
// mengalihkan halaman kembali ke index.php
header("location:halaman_admin.php");
 
?>