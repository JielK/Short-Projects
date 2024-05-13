<?php 
// koneksi database
include 'koneksi.php';
 
// menangkap data yang di kirim dari form
$mata_pelajaran = $_POST['mata_pelajaran'];
$guru_pengampu = $_POST['guru_pengampu'];

 
// menginput data ke database
mysqli_query($koneksi,"insert into mata_pelajaran values('','$mata_pelajaran','$guru_pengampu')");
 
// mengalihkan halaman kembali ke index.php
header("location:halaman_admin.php");
 
?>