<?php
	require '../../parks_login.php';
	require '../../db_connect.php';

	$stmt = $dbc->query('SELECT * FROM national_parks')->fetchAll(PDO::FETCH_ASSOC); 
?>
<!DOCTYPE html>
<html>
<head>
	<title>National Parks</title>
</head>
<body>
	<h2>National Parks</h2>

	<table>
			<tr>	
				<th>Park Name:</th>
				<th>Location:</th>
				<th>Date Established:</th>
				<th>Area in Acres:</th>
				
			</tr>
		<?php
			foreach($stmt as $parkarray) { ?>
			<tr>
				<td><?=$parkarray['name']?></td>
				<td><?=$parkarray['location']?></td>
				<td><?=$parkarray['date_established']?></td>
				<td><?=$parkarray['area_in_acres']?></td>
			</tr>
			<?php } ?>
	</table>

</body>
</html>