<?php
require("connect.php");

$max = $_GET["max"];

$result = mysqli_query($link, "SELECT COUNT(0) FROM tempLog");
$count = mysqli_fetch_assoc($result);
$num_rows = $count['COUNT(0)'];

if ($max > $num_rows){
	$max = $num_rows;
}
$startrow = $num_rows - $max;

$result = mysqli_query($link, "SELECT * FROM tempLog LIMIT $startrow, $max");

$array = array();
$numcolumn = mysqli_num_fields($result);

for ($i = 0; $i < $numcolumn; $i++){
	mysqli_data_seek($result, 0);
	$finfo = mysqli_fetch_field_direct($result, $i);

	$array[$i]['name'] = $finfo->name;
	while($r = mysqli_fetch_array($result)){
		$array[$i]['data'][] = $r[$finfo->name];
	}
}

print json_encode($array, JSON_NUMERIC_CHECK);
mysqli_close($link);
?>
