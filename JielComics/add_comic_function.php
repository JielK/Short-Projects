<?php
include 'config.php';
    function createDirectory() {
        $folder = $_POST['folder'];
        mkdir("comics/".$folder);
        echo "<script type = 'text/javascript'>alert('Done!');</script>";
    }
    if (!isset($_POST['submit'])) {
    	        
   		}else{
            createDirectory();
        }

$cover_img = $_FILES['cover_img']['name'];
$folder = $_POST['folder'];
$title = $_POST['title'];
$author = $_POST['author'];
$artist = $_POST['artist'];
$synopsis = $_POST['synopsis'];
$status = $_POST['status'];
$type = $_POST['type'];
$genre = $_POST['genre'];
$sub_genre = $_POST['sub_genre'];
$sub_genre2 = $_POST['sub_genre2'];
$slash = '/';
$tempname = $_FILES["cover_img"]["tmp_name"];
$folder2 = "comics/". $folder. $slash . $cover_img;

    $sql = "INSERT INTO comics (cover_img, folder, title, author, artist, synopsis, status, type, genre, sub_genre, sub_genre2) VALUES ('$cover_img','$folder','$title','$author','$artist','$synopsis','$status','$type','$genre','$sub_genre','$sub_genre2')";
 
    mysqli_query($conn, $sql);

    if (move_uploaded_file($tempname, $folder2)) {
        echo "<h3>  Image uploaded successfully!</h3>";
    } else {
        echo "<h3>  Failed to upload image!</h3>";
    }
header("location:admin_page.php");
 

?>