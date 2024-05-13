<?php 
// koneksi database
include 'koneksi.php';
 
// menangkap data yang di kirim dari form
$nama = $_POST['nama'];
$tempat_tanggal_lahir = $_POST['tempat_tanggal_lahir'];
$kelas = $_POST['kelas'];
$jurusan = $_POST['jurusan'];
$nik = $_POST['nik'];
$alamat = $_POST['alamat'];
$nomor_handphone = $_POST['nomor_handphone'];


 
// menginput data ke database
mysqli_query($koneksi,"insert into siswa values('','$nama','$tempat_tanggal_lahir','$kelas','$jurusan','$nik','$alamat','$nomor_handphone')");
 
// mengalihkan halaman kembali ke index.php
header("location:halaman_admin.php");
 
?>