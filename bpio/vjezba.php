<?php

//polja
/*
$zaposlenici = ['Ivan', 'Marta', 'Lidija', 'Petar'];

$place = [
    'Ivan' => 9980,
    'Marta' => null,
    'Lidija' => 11230,
    'Petar' => 11020
];
*/

//prvi zadatak
/*
foreach($zaposlenici as $z){
	echo strtolower($z) . '<br/>';
}*/


//drugi zadatak
/*
foreach ($place as $A => $B){
	if ($B != null){
		echo 'Zaposlenik ' . $A . ' ima placu ' . $B . '.<br/>'; 
	}
	
}
*/
//treci zadatak
/*
foreach ($place as $zaposlenik => $placa){
	if ($placa <= 10000 || $placa == null){
		echo $zaposlenik . ' ' . $placa . '<br/>';
	}
}
*/
//cetvrti zadatak
/*
function broji($polje){
	$i = 0;
	foreach ($polje as $kljuc => $vrijednost){
		$i++;
	}
	return $i;
}

$rezultat = broji($place);
echo $rezultat;
*/

//peti zadatak
//spajanje na bazu
/*
$host = 'bp.vvg.hr';
$username = 'student77210516';
$password = 'vvglozinka0155';
$dbname = 'student77210516';

$db = new PDO("mysql:host=$host;dbname=$dbname;port=5432", $username, $password);
$db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
*/

//krece zadatak peti
/*
$query = $db->query("SELECT * FROM vehicles WHERE car_type = 'Audi'");
$result = $query->fetchAll();

echo '<pre>';
var_dump($result);
*/

//dohvaca sva vozila
/*
$query = $db->query('SELECT * FROM vehicles');
$result = $query->fetchAll();

foreach($result as $row) {
    echo $row['vin_number'] . '<br />';
}
*/





?>