<?php
	require '../../parks_login.php';
	require '../../db_connect.php';
	$query1 = 'SELECT * FROM national_parks LIMIT 4';
	$query2 = 'SELECT * FROM national_parks LIMIT 4 OFFSET 4';
	$query3 = 'SELECT * FROM national_parks LIMIT 4 OFFSET 8';
	$page = isset($_GET['page']) ? $_GET['page'] : 1; 
	if(!isset($_GET['page'])) {
		$stmt = $dbc->query($query1)->fetchAll(PDO::FETCH_ASSOC);
	} else if ($_GET['page'] == 1) {
		$stmt = $dbc->query($query1)->fetchAll(PDO::FETCH_ASSOC);
	} else if($_GET['page'] == 2) {
		$stmt = $dbc->query($query2)->fetchAll(PDO::FETCH_ASSOC);
	} else if ($_GET['page'] == 3) {
		$stmt = $dbc->query($query3)->fetchAll(PDO::FETCH_ASSOC);
	}
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
	<?php
		if(isset($_GET['page']) && $_GET['page'] != 1) { ?>
			<a id = "previous" href="national_parks.php?page=<?=$page-1?>"><?="Previous Page"?></a>
		<?php } ?>
	<?php
		if(!isset($_GET['page']) || $_GET['page'] < 3) { ?>
			<a id = "next" href="national_parks.php?page=<?=$page+1?>"><?="Next Page"?></a>
		<?php } ?>
</body>
</html>