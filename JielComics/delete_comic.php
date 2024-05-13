<?php 
include 'config.php';
 
$comic_id = $_GET['comic_id'];
 
mysqli_query($conn,"delete from comics where comic_id='$comic_id'");
 
header("location:admin_page.php#latest");
 
?>