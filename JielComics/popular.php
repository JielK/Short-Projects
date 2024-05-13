<?php
include ('config.php');

$stmt=$conn->prepare("SELECT * FROM comics ORDER BY RAND() LIMIT 1");
$stmt->execute();
$popular=$stmt->get_result();

?>