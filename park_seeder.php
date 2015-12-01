<?php
	define('DB_HOST', '127.0.0.1');
	define('DB_NAME', 'parks_db');
	define('DB_USER', 'parks_user');
	define('DB_PASS', '[mypassword]');
	require 'db_connect.php';
	
	$dbc->exec('TRUNCATE national_parks');

	$parks = [
		['name' => 'Acadia', 'location' => 'Maine', 'date_established' => '1919-02-26', 'area_in_acres' => '47389.67'],
		['name' => 'Arches', 'location' => 'Utah', 'date_established' => '1929-04-12', 'area_in_acres' => '76518.98'],
		['name' => 'Badlands', 'location' => 'South Dakota', 'date_established' => '1978-11-10', 'area_in_acres' => '242755.94'],
		['name' => 'Big Bend', 'location' => 'Texas', 'date_established' => '1944-08-12', 'area_in_acres' => '801163.21'],
		['name' => 'Biscayne', 'location' => 'Florida', 'date_established' => '1980-08-28', 'area_in_acres' => '172924.07'],
		['name' => 'Carlsbad Caverns', 'location' => 'New Mexico', 'date_established' => '1930-05-14', 'area_in_acres' => '46766.45'],
		['name' => 'Congaree', 'location' => 'South Carolina', 'date_established' => '2003-11-10', 'area_in_acres' => '26545.86'],
		['name' => 'Crater Lake', 'location' => 'Oregon', 'date_established' => '1902-05-22', 'area_in_acres' => '183224.05'],
		['name' => 'Denali', 'location' => 'Alaska', 'date_established' => '1917-02-26', 'area_in_acres' => '4740911.72'],
		['name' => 'Glacier', 'location' => 'Montana', 'date_established' => '1910-05-11', 'area_in_acres' => '1013572.41']
	];

	foreach ($parks as $park) {
		$natparks = "INSERT INTO national_parks (name, location, date_established, area_in_acres) VALUES ('{$park['name']}', '{$park['location']}', '{$park['date_established']}', '{$park['area_in_acres']}')";
		$dbc->exec($natparks);
		echo "Inserted ID: " . $dbc->lastInsertId() . PHP_EOL; 			
	}
?>