<?php
require("connect.php");
$key = $_POST["key"];

if (!strcmp($secret, $key)){
	$temp1 = $_POST["temp1"];
	$temp2 = $_POST["temp2"];
	$temp3 = $_POST["temp3"];
	$temp4 = $_POST["temp4"];

	$query = "INSERT INTO tempLog (Chambre, Chambre2, SalleBain, Salon)
		VALUES ('".$temp1."','".$temp2."','".$temp3."','".$temp4."')";

	mysqli_query($link, $query);
	mysqli_close($link);
}
?>
