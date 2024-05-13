<?php
include ('config.php');

$stmt=$conn->prepare("SELECT * FROM comics ORDER BY comic_id DESC LIMIT 40");
$stmt->execute();
$homecomics=$stmt->get_result();

?>
<!-- -- where product_category = 'clothes' order by product_id asc  -->