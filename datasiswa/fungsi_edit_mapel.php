<?php 
// koneksi database
include 'koneksi.php';
 
// menangkap data yang di kirim dari form
$id_mata_pelajaran = $_POST['id_mata_pelajaran'];
$mata_pelajaran = $_POST['mata_pelajaran'];
$guru_pengampu = $_POST['guru_pengampu'];


// update data ke database
mysqli_query($koneksi,"update mata_pelajaran set mata_pelajaran='$mata_pelajaran', guru_pengampu='$guru_pengampu' where id_mata_pelajaran='$id_mata_pelajaran'");
 
// mengalihkan halaman kembali ke index.php
header("location:halaman_admin.php");
 
?>