<?php  

session_start();

require_once "connect_sql.php";

$connection=new mysqli($host,$db_user,$db_password,$db_name);
if($connection->connect_errno!=0){
	echo "Error:".$connection->connect_errno;
}

mysqli_select_db($connection,$db_name) or die("Could not select database");

$post = $_POST['value'];

$values = '('.implode('),(', array_map(function($entry){
	return "'".implode("','", $entry)."'";
}, $post)).')';

$sql = "INSERT INTO markers (lat, lng, location) VALUES $values";
$connection->query($sql);

die();  

?>﻿