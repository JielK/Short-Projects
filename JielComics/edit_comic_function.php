<?php
include 'config.php';
    function createDirectory() {
        $folder = $_POST['folder'];
        mkdir("comics/".$folder);
    }
    if (!isset($_POST['submit'])) {
    	        
   		}else{
            createDirectory();
        }

$comic_id = $_POST['comic_id'];
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

    // Get all the submitted data from the form
    $sql = "UPDATE comics SET cover_img = '$cover_img', folder = '$folder', title = '$title', author = '$author', artist = '$artist', synopsis = '$synopsis', status = '$status', type = '$type', genre = '$genre', sub_genre = '$sub_genre', sub_genre2 = '$sub_genre2' where comic_id = '$comic_id'";
 
    // Execute query
    mysqli_query($conn, $sql);
 
    // Now let's move the uploaded image into the folder: image
    if (move_uploaded_file($tempname, $folder2)) {
        echo "<h3>  Image uploaded successfully!</h3>";
    } else {
        echo "<h3>  Failed to upload image!</h3>";
    }
header("location:admin_page.php");
?>