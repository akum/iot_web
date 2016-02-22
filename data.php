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

$result = mysqli_query($link, "SELECT * FROM tempLog LIMIT $startrow, {$max}");
$time = array();
$time['name'] = 'Time';
while($r = mysqli_fetch_array($result)){
	$time['data'][] = $r[0];
}

mysqli_data_seek($result,0);
$rows1 = array();
$rows1['name'] = 'Chambre';
while($r = mysqli_fetch_array($result)){
	$rows1['data'][] = $r['Chambre'];
}

mysqli_data_seek($result,0);
$rows2 = array();
$rows2['name'] = 'Chambre2';
while($r = mysqli_fetch_array($result)){
	$rows2['data'][] = $r['Chambre2'];
}

mysqli_data_seek($result,0);
$rows3 = array();
$rows3['name'] = 'SalleBain';
while($r = mysqli_fetch_array($result)){
	$rows3['data'][] = $r['SalleBain'];
}

mysqli_data_seek($result,0);
$rows4 = array();
$rows4['name'] = 'Salon';
while($r = mysqli_fetch_array($result)){
	$rows4['data'][] = $r['Salon'];
}

$result = array();
array_push($result,$time);
array_push($result,$rows1);
array_push($result,$rows2);
array_push($result,$rows3);
array_push($result,$rows4);

print json_encode($result, JSON_NUMERIC_CHECK);

mysqli_close($link);
?>
