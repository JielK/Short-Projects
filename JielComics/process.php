<?php 
// mengaktifkan session pada php
session_start();
 
// menghubungkan php dengan koneksi database
include 'config.php';
 
// menangkap data yang dikirim dari form login
$username = $_POST['username'];
$password = $_POST['password'];
 
 
// menyeleksi data user dengan username dan password yang sesuai
$login = mysqli_query($conn,"select * from users where username='$username' and password='$password'");
// menghitung jumlah data yang ditemukan
$check = mysqli_num_rows($login);
 
// cek apakah username dan password di temukan pada database
if($check > 0){
 
	$data = mysqli_fetch_assoc($login);
 
	// cek jika user login sebagai admin
	if($data['status']=="admin"){
 
		// buat session login dan username
		$_SESSION['username'] = $username;
		$_SESSION['status'] = "admin";
		// alihkan ke halaman dashboard admin
		header("location:admin_page.php");
 
	// cek jika user login sebagai pegawai
	}else if($data['status']=="user"){
		// buat session login dan username
		$_SESSION['username'] = $username;
		$_SESSION['status'] = "user";
		// alihkan ke halaman dashboard pegawai
		header("location:user_page.php?user_id=" . $data['id']);
 
	}else{
 
		// alihkan ke halaman login kembali
		header("location:login.php?pesan=gagal");
	}	
}else{
	header("location:login.php?pesan=gagal");
}
 
?>