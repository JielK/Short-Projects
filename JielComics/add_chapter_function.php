<?php
include 'config.php';

$chapter_img1 = $_FILES['chapter_img1']['name'];
$chapter_img2 = $_FILES['chapter_img2']['name'];
$chapter_img3 = $_FILES['chapter_img3']['name'];
$chapter_img4 = $_FILES['chapter_img4']['name'];
$chapter_img5 = $_FILES['chapter_img5']['name'];
$chapter_img6 = $_FILES['chapter_img6']['name'];
$chapter_img7 = $_FILES['chapter_img7']['name'];
$chapter_img8 = $_FILES['chapter_img8']['name'];
$chapter_img9 = $_FILES['chapter_img9']['name'];
$chapter_img10 = $_FILES['chapter_img10']['name'];
$folder = $_POST['folder'];
$rand1 = rand(9,999);
$rand2 = rand(9,999);
$rand3 = rand(9,999);
$rand4 = rand(9,999);
$rand5 = rand(9,999);
$rand6 = rand(9,999);
$rand7 = rand(9,999);
$rand8 = rand(9,999);
$rand9 = rand(9,999);
$rand10 = rand(9,999);
$chapter_number = $_POST['chapter_number'];
$slash = '/';
$tempname1 = $_FILES["chapter_img1"]["tmp_name"];
$tempname2 = $_FILES["chapter_img2"]["tmp_name"];
$tempname3 = $_FILES["chapter_img3"]["tmp_name"];
$tempname4 = $_FILES["chapter_img4"]["tmp_name"];
$tempname5 = $_FILES["chapter_img5"]["tmp_name"];
$tempname6 = $_FILES["chapter_img6"]["tmp_name"];
$tempname7 = $_FILES["chapter_img7"]["tmp_name"];
$tempname8 = $_FILES["chapter_img8"]["tmp_name"];
$tempname9 = $_FILES["chapter_img9"]["tmp_name"];
$tempname10 = $_FILES["chapter_img10"]["tmp_name"];
$imagename1 = $rand1 . '-'  . 'c-' . $chapter_number . $chapter_img1;
$imagename2 = $rand2 . '-' . 'c-' . $chapter_number . $chapter_img2;
$imagename3 = $rand3 . '-' . 'c-' . $chapter_number . $chapter_img3;
$imagename4 = $rand4 . '-' . 'c-' . $chapter_number . $chapter_img4;
$imagename5 = $rand5 . '-' . 'c-' . $chapter_number . $chapter_img5;
$imagename6 = $rand6 . '-' . 'c-' . $chapter_number . $chapter_img6;
$imagename7 = $rand7 . '-' . 'c-' . $chapter_number . $chapter_img7;
$imagename8 = $rand8 . '-' . 'c-' . $chapter_number . $chapter_img8;
$imagename9 = $rand9 . '-' . 'c-' . $chapter_number . $chapter_img9;
$imagename10 = $rand10 . '-' . 'c-' . $chapter_number . $chapter_img10;
$folder1 = "comics/". $folder. $slash . $imagename1;
$folder2 = "comics/". $folder. $slash . $imagename2;
$folder3 = "comics/". $folder. $slash . $imagename3;
$folder4 = "comics/". $folder. $slash . $imagename4;
$folder5 = "comics/". $folder. $slash . $imagename5;
$folder6 = "comics/". $folder. $slash . $imagename6;
$folder7 = "comics/". $folder. $slash . $imagename7;
$folder8 = "comics/". $folder. $slash . $imagename8;
$folder9 = "comics/". $folder. $slash . $imagename9;
$folder10 = "comics/". $folder. $slash . $imagename10;

    $sql = "INSERT INTO chapter (directory,chapter_number,chapter_img1,chapter_img2,chapter_img3,chapter_img4,chapter_img5,chapter_img6,chapter_img7,chapter_img8,chapter_img9,chapter_img10) VALUES ('$folder','$chapter_number','$imagename1','$imagename2','$imagename3','$imagename4','$imagename5','$imagename6','$imagename7','$imagename8','$imagename9','$imagename10')";
 
    mysqli_query($conn, $sql);

    if (move_uploaded_file($tempname1, $folder1)) {
        echo "<h3>  Image uploaded successfully!</h3>";
    } else {
        echo "<h3>  Failed to upload image 1!</h3>";
    }
    if (move_uploaded_file($tempname2, $folder2)) {
        echo "<h3>  Image uploaded successfully!</h3>";
    } else {
        echo "<h3>  Failed to upload image 2!</h3>";
    }
    if (move_uploaded_file($tempname3, $folder3)) {
        echo "<h3>  Image uploaded successfully!</h3>";
    } else {
        echo "<h3>  Failed to upload image 3!</h3>";
    }
    if (move_uploaded_file($tempname4, $folder4)) {
        echo "<h3>  Image uploaded successfully!</h3>";
    } else {
        echo "<h3>  Failed to upload image 4!</h3>";
    }
    if (move_uploaded_file($tempname5, $folder5)) {
        echo "<h3>  Image uploaded successfully!</h3>";
    } else {
        echo "<h3>  Failed to upload image 5!</h3>";
    }
    if (move_uploaded_file($tempname6, $folder6)) {
        echo "<h3>  Image uploaded successfully!</h3>";
    } else {
        echo "<h3>  Failed to upload image 6!</h3>";
    }
    if (move_uploaded_file($tempname7, $folder7)) {
        echo "<h3>  Image uploaded successfully!</h3>";
    } else {
        echo "<h3>  Failed to upload image 7!</h3>";
    }
    if (move_uploaded_file($tempname8, $folder8)) {
        echo "<h3>  Image uploaded successfully!</h3>";
    } else {
        echo "<h3>  Failed to upload image 8!</h3>";
    }
    if (move_uploaded_file($tempname9, $folder9)) {
        echo "<h3>  Image uploaded successfully!</h3>";
    } else {
        echo "<h3>  Failed to upload image 9!</h3>";
    }
    if (move_uploaded_file($tempname10, $folder10)) {
        echo "<h3>  Image uploaded successfully!</h3>";
    } else {
        echo "<h3>  Failed to upload image 10!</h3>";
    }
header("location:admin_page.php");
 

?>