<?php
	require '../../user_table_login.php';
	require '../../db_connect.php';
	require 'Model.php';

	$dbc->exec('TRUNCATE contacts');

	$people = [
		['email' => 'billybob@gmail.com', 'name' => 'Billy Bob', 'phone' => '213-5993', 'address' => '123 Billybob lane', 'city' => 'Yonkers', 'state' => 'New York', 'zip' => '09876'],
		['email' => 'aynrand@freemarket.net', 'name' => 'Ayn Rand', 'phone' => '549-0987', 'address' => '1111 regulation way', 'city' => 'New York', 'state' => 'New York', 'zip' => '84759'],
		['email' => 'waynenewton@waynenewton.com', 'name' => 'Wayne Newton', 'phone' => '629-3893', 'address' => 'The Golden Sphynx Casino', 'city' => 'Las Vegas', 'state' => 'Nevada', 'zip' => '66655'],
		['email' => 'javert@unforgettablenames.net', 'name' => 'Javert', 'phone' => '234-9856', 'address' => '456 Stars Street', 'city' => 'Paris', 'state' => 'Texas', 'zip' => '33333'],
		['email' => 'jjjhs@mynametoo.com', 'name' => 'John Jacob Jingeleheimer Smith', 'phone' => '123-4567', 'address' => '900 Shout Street', 'city' => 'Atlantic City', 'state' => 'New Jersey', 'zip' => '77777'],
		['email' => 'ilovebutts@horsesandbutts.com', 'name' => 'Tina Belcher', 'phone' => '456-7890', 'address' => 'Bob\'s Burgers', 'city' => 'Wonder Wharf', 'state' => 'California', 'zip' => '12355'],
		['email' => 'annie@ihatesand.org', 'name' => 'Anakin Skywalker', 'phone' => '111-1111', 'address' => '765 Vader Beaulevard', 'city' => 'Coruscant', 'state' => 'Coruscant', 'zip' => '19284'],
		['email' => 'adama@sosayweall.com', 'name' => 'Adama', 'phone' => '135-0954', 'address' => 'Captain\'s Quarters', 'city' => 'Battlestar Galactica', 'state' => 'Space', 'zip' => '93875'],
		['email' => 'sockswithsandlers@lovemeandgivememoney.net', 'name' => 'Adam Sandler', 'phone' => '444-4444', 'address' => '1010 Hollywood Lane', 'city' => 'Los Angeles', 'state' => 'California', 'zip' => '15988'],
		['email' => 'jesse.ventura@bushdid911.com', 'name' => 'Jesse Ventura', 'phone' => '911-9110', 'address' => '156 Jet Fuel Drive', 'city' => 'Minneapolis', 'state' => 'Minnesota', 'zip' => '94847']
	];	

	// $stmt = $dbc->prepare('INSERT INTO contacts (email, name, phone, address, city, state, zip) VALUES (:email, :name, :phone, :address, :city, :state, :zip)');
	// foreach($people as $person) {
	// 	$stmt->bindValue(':email', $person['email'], PDO::PARAM_STR);
	// 	$stmt->bindValue(':name', $person['name'], PDO::PARAM_STR);
	// 	$stmt->bindValue(':phone', $person['phone'], PDO::PARAM_STR);
	// 	$stmt->bindValue(':address', $person['address'], PDO::PARAM_STR);
	// 	$stmt->bindValue(':city', $person['city'], PDO::PARAM_STR);
	// 	$stmt->bindValue(':state', $person['state'], PDO::PARAM_STR);
	// 	$stmt->bindValue(':zip', $person['zip'], PDO::PARAM_STR);

	// 	$stmt->execute();
	// }
	foreach($people as $person) {
		
	}
?>