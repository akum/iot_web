<?php
require("connect.php");

$end = $_GET["max"];
$col = $_GET["col"];
$col = "timeStamp," . $col;

$result = mysqli_query($link, "SELECT 0 FROM tempLog");
$rows_count = mysqli_num_rows($result);

if ($end > $rows_count) $end = $rows_count;
$start = $rows_count - $end;
$result = mysqli_query($link, "SELECT $col FROM tempLog LIMIT $start, $end");

$col_count = mysqli_num_fields($result);
for ($i = 0; $i < $col_count; $i++){
	mysqli_data_seek($result, 0);
	$field = mysqli_fetch_field($result);

	$array[$i]['name'] = $field->name;
	while($row = mysqli_fetch_array($result)){
		$array[$i]['data'][] = $row[$field->name];
	}
}

print json_encode($array, JSON_NUMERIC_CHECK);
?>
