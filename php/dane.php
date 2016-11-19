<?
header('Content-Type: text/javascript; charset=utf-8');

  
require_once "connect_sql.php";
  
mysql_connect ($host, $db_user, $db_password) or   
    die ("Nie nawišzano połšczenie z bazš MySQL");  
mysql_select_db ($db_name) or   
    die ("Nie nawišzano połšczenia z bazš serwisu.");  
	
mysql_query("SET NAMES 'UTF8';");

$zapytanie = "SELECT id,nazwa,lat,lng,flaga FROM PoznajGoogleMaps_panstwa ORDER BY id";
$pobierz = mysql_query($zapytanie);

include('jsonencoder.php');
$json = new Services_JSON();

$tablica = array();

while($dane = mysql_fetch_array($pobierz))
{
	$panstwo = array(
	'nazwa' => $dane['nazwa'],
	'lat' => (float) $dane['lat'],
	'lng' => (float) $dane['lng'],
	'ikona' => $dane['flaga']
	);
	array_push($tablica,$panstwo);
}

$wynik = $json->encode($tablica);
print($wynik);
?>
