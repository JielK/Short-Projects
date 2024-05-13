<?php
include ('config.php');

$stmt=$conn->prepare("SELECT * FROM comics ORDER BY RAND() LIMIT 4");
$stmt->execute();
$owlcarousel=$stmt->get_result();

?>