<?php  
include 'config.php';

$comic_id = $_POST['comic_id'];
$dir = $_POST['dir'];
$user = $_POST['user_id'];
$cover = $_POST['cover'];
$title = $_POST['title'];

$sql = "INSERT INTO bookmarks (bookmark_user,bookmark_cover,folder,bookmark_title) VALUES ('$user','$cover','$dir','$title')";
 
mysqli_query($conn, $sql);

header('location:comic.php?comic_id=' . $comic_id . '&user_id=' . $user . '&status=bookmarked');
?>