<?php  

session_start();

require_once "connect_sql.php";


$connection=new mysqli($host,$db_user,$db_password,$db_name);
	if($connection->connect_errno!=0) #zajscie bledu
	{
		echo "Error:".$connection->connect_errno;
	}

//	print_r($_POST);
	
	
	
// Set the active MySQL database

mysqli_select_db($connection,$db_name) or die("Could not select database");

for($i=0; $i<count($_POST['value']);$i=$i+3)
{

$sql="(NULL,".$_POST['value'][$i].",".$_POST['value'][$i+1].",'".$_POST['value'][$i+2]."')";
echo "INSERT INTO markers VALUES".$sql; // tylko do pokazania wygladu :) mozna wywalic
$connection->query("INSERT INTO markers VALUES".$sql);
}




die();  

?>﻿