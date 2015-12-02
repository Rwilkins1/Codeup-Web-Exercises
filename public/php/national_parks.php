<?php
	require '../../parks_login.php';
	require '../../db_connect.php';

	$stmt = $dbc->query('SELECT * FROM national_parks')->fetchAll(PDO::FETCH_ASSOC);
	print_r($stmt);
?>