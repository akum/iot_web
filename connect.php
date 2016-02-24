<?php
function db_connect(){
	static $link;

	if(!isset($link)){
		$config = parse_ini_file("config.ini");
		$link = mysqli_connect($config['server'], $config['user'], $config['pass'], $config['db']);
	}

	if($link === false){
		return mysqli_connect_error();
	}

	return $link;
}

function get_key(){
	$config = parse_ini_file("config.ini");
	return $config['secret'];
}

$link = db_connect();
$secret = get_key();
?>
