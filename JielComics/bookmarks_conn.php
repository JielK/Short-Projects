<?php 
include ('config.php');

$stmt=$conn->prepare("SELECT * FROM bookmarks WHERE bookmark_user = $user ORDER BY bookmark_id DESC LIMIT 40");
$stmt->execute();
$bookmarks=$stmt->get_result();

?>