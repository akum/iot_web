<?php
require('connect.php');
$key = $_POST['key'];

if (!strcmp($secret, $key)){
	extract($_POST);
	$val = "NULL, $t1, $t2, $t3, $t4, $h1, $h2, $h3, $h4, $ex";
	$query = "INSERT INTO tempLog VALUES ($val)";
	mysqli_query($link, $query);
}
?>
