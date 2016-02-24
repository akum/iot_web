<?php
require('connect.php');
$key = $_POST['key'];

if (!strcmp($secret, $key)){
	$t1 = $_POST['t1'];
	$t2 = $_POST['t2'];
	$t3 = $_POST['t3'];
	$t4 = $_POST['t4'];
	$h1 = $_POST['h1'];
	$h2 = $_POST['h2'];
	$h3 = $_POST['h3'];
	$h4 = $_POST['h4'];
	$ex = $_POST['ex'];

	$val = "NULL, $t1, $t2, $t3, $t4, $h1, $h2, $h3, $h4, $ex";
	$query = "INSERT INTO tempLog VALUES ($val)";

	mysqli_query($link, $query);
}
?>
