<?php
require("connect.php");
$key = $_POST["key"];

if (!strcmp($secret, $key)){
	$temp1 = $_POST["temp1"];
	$temp2 = $_POST["temp2"];
	$temp3 = $_POST["temp3"];
	$temp4 = $_POST["temp4"];

	$heat1 = $_POST["h1"];
	$heat2 = $_POST["h2"];
	$heat3 = $_POST["h3"];
	$heat4 = $_POST["h4"];

	$exter = $_POST["ex"];

	$query = "INSERT INTO tempLog (Chambre, Chambre2, SalleBain, Salon, HChambre, HChambre2, HSalleBain, HSalon, Exterieur)
		VALUES ('".$temp1."','".$temp2."','".$temp3."','".$temp4."','".$heat1."','".$heat2."','".$heat3."','".$heat4."','".$exter."')";

	mysqli_query($link, $query);
	mysqli_close($link);
}
?>
