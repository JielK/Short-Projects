<?php 
include 'config.php';
 
$bookid = $_GET['delete'];
$user = $_GET['user_id'];
 
mysqli_query($conn,"delete from bookmarks where bookmark_id='$bookid'");
 
header("location:bookmarks.php?user_id=" . $user);
 
?>