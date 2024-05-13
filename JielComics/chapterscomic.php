<?php
include ('config.php');

$stmt=$conn->prepare("SELECT * FROM chapter where directory='".$row['folder']."' ORDER BY chapter_number DESC");
$stmt->execute();
$chapters=$stmt->get_result();

?>