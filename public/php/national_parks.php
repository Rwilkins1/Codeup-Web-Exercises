<?php
	require '../../parks_login.php';
	require '../../db_connect.php';
	$query = 'SELECT * FROM national_parks LIMIT 4 OFFSET ';
	$page = isset($_GET['page']) ? $_GET['page'] : 1; 
	$offset = (($page-1)*4);
	$stmt = $dbc->query($query . $offset)->fetchAll(PDO::FETCH_ASSOC);

	if(isset($_GET['page']) && ($_GET['page'] > 3 || $_GET['page'] < 1)) {
		header('location: national_parks.php');
		die();
	}
?>
<!DOCTYPE html>
<html>
<head>
	<title>National Parks</title>
	<style type="text/css">
		body {
			background-image: url(../img/forest.png);
			text-align: center;
			color: orange;
			text-shadow: 5px 5px 5px solid black;
		}
		table {
			background-color: gray;
			color: black;
			margin-bottom: 15px;
			margin-left: 32%;
			margin-top: -15px;
			box-shadow: 5px 5px 5px black;
			border: 1px solid black;
		}
		th {
			border: 1px solid black;
		}
		td {
			border: 1px solid black;
			background-color: #C0C0C0;
			padding: 15px;
		}
		td:hover {
			background-color: white;
			box-shadow: 5px 5px 5px black;
		}
		a {
			background-color: #444;
			color: orange;
			box-shadow: 2px 2px 2px gray inset;
			padding: 8px;
			text-decoration: none;
		}
		a:active {
			background-color: gray;
			box-shadow: 5px 5px 5px #444 inset;
		}
	</style>
</head>
<body>
	<h2>National Parks</h2>

	<table>
			<tr>	
				<th>Park Name</th>
				<th>Location</th>
				<th>Date Established</th>
				<th>Area in Acres</th>
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
			<a id = "previous" href="national_parks.php?page=<?=$page-1?>">Previous Page</a>
		<?php } ?>

	<?php
		if(!isset($_GET['page']) || $_GET['page'] < 3) { ?>
			<a id = "next" href="national_parks.php?page=<?=$page+1?>">Next Page</a>
		<?php } ?>
</body>
</html>