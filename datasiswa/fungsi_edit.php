<?php 
// koneksi database
include 'koneksi.php';
 
// menangkap data yang di kirim dari form
$id_siswa = $_POST['id_siswa'];
$nama = $_POST['nama'];
$tempat_tanggal_lahir = $_POST['tempat_tanggal_lahir'];
$kelas = $_POST['kelas'];
$jurusan = $_POST['jurusan'];
$nik = $_POST['nik'];
$alamat = $_POST['alamat'];
$nomor_handphone = $_POST['nomor_handphone'];

// update data ke database
mysqli_query($koneksi,"update siswa set nama='$nama', tempat_tanggal_lahir='$tempat_tanggal_lahir', kelas='$kelas' , jurusan='$jurusan' , nik='$nik' , alamat='$alamat' , nomor_handphone='$nomor_handphone' where id_siswa='$id_siswa'");
 
// mengalihkan halaman kembali ke index.php
header("location:halaman_admin.php");
 
?>