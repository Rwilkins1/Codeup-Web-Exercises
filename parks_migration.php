<?php
	require 'parks_login.php';
	require 'db_connect.php';
	$dbc->exec('DROP TABLE IF EXISTS national_parks');

	$query = 'CREATE TABLE national_parks (
		id INT UNSIGNED NOT NULL AUTO_INCREMENT,
		name VARCHAR(100) NOT NULL,
		location VARCHAR(100) NOT NULL,
		date_established DATE NOT NULL,
		area_in_acres DOUBLE NOT NULL,
		description VARCHAR(10000) NOT NULL,
		PRIMARY KEY (id)
	)';

	$dbc->exec($query);
?>