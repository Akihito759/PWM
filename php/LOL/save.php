<?php  
error_reporting(E_ALL ^ E_DEPRECATED);
require_once "connect_sql.php";

$connection=mysql_connect ('localhost', $db_user, $db_password);
if (!$connection) {  die('Not connected : ' . mysql_error());} 

// Set the active MySQL database

$db_selected = mysql_select_db($db_name, $connection);
if (!$db_selected) {
  die ('Can\'t use db : ' . mysql_error());
} 
/*
for($i=0;$i<count($_POST['value']);$i=$i+3)
{
	
	$sql .= "(NULL, '".$_POST['value'][$i]."','".$_POST['value'][$i+1]."','".$_POST['value'][$i+2]."')";
	
}


echo $sql;
*/
print_r($_POST);
?>