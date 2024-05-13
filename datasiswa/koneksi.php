<?php 
 
$koneksi = mysqli_connect("localhost","root","","sbharmoni");
 
// Check connection
if (mysqli_connect_errno()){
	echo "Koneksi database Gagal : " . mysqli_connect_error();
}



?>