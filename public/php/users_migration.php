<?php
	require '../../user_table_login.php';
	require '../../db_connect.php';
	$dbc->exec('DROP TABLE IF EXISTS contacts');

	$query = 'CREATE TABLE contacts (
		id INT UNSIGNED NOT NULL AUTO_INCREMENT,
		email VARCHAR(100) NOT NULL,
		name VARCHAR(100) NOT NULL,
		phone VARCHAR(20) NOT NULL,
		address VARCHAR(100) NOT NULL,
		city VARCHAR(100) NOT NULL,
		state VARCHAR(100) NOT NULL,
		zip VARCHAR(10) NOT NULL,
		PRIMARY KEY (id)
	)';

	$dbc->exec($query);
?>