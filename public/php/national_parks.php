<?php
	require '../../parks_login.php';
	require '../../db_connect.php';
	// require '../../park_seeder.php';
	require '../../input.php';


	$query = $dbc->prepare('SELECT * FROM national_parks LIMIT :lim OFFSET :off');
	$page = isset($_GET['page']) ? round($_GET['page']) : 1; 
	// $maxpage = ($dbc->rowCount())/4;
	// var_dump($maxpage);
	if(isset($_GET['page']) && (($_GET['page'] > 3 || $_GET['page'] < 1) || !is_numeric($_GET['page']))) {
		header('location: national_parks.php');
		die();
	}
	$offset = (($page-1)*4);
	$query->bindValue(':lim', 4, PDO::PARAM_INT);
	$query->bindValue(':off', $offset, PDO::PARAM_INT);
	$query->fetchAll(PDO::FETCH_ASSOC);
	$query->execute();

	// $name = isset($_POST['parkname']) ? $_POST['parkname'] : '';
	// $location = isset($_POST['parklocation']) ? $_POST['parklocation'] : '';
	// $date = isset($_POST['date']) ? $_POST['date'] : '';
	// $area = isset($_POST['area']) ? $_POST['area'] : '';
	// $description = isset($_POST['parkdescription']) ? $_POST['parkdescription'] : '';

	function insertpark($dbc)
	{
		$name = Input::get('parkname');
		$location = Input::get('parklocation');
		$date = Input::get('date');
		$area = Input::get('area');
		$description = Input::get('parkdescription');

		$inner = 'INSERT INTO national_parks (name, location, date_established, area_in_acres, description) VALUES (:name, :location, :date_established, :area_in_acres, :description)';
		$query = $dbc->prepare($inner);
		$query->bindValue(':name', $name, PDO::PARAM_STR);
		$query->bindValue(':location', $location, PDO::PARAM_STR);
		$query->bindValue(':date_established', $date, PDO::PARAM_STR);
		$query->bindValue(':area_in_acres', $area, PDO::PARAM_STR);
		$query->bindValue(':description', $description, PDO::PARAM_STR);
		$query->fetchAll(PDO::FETCH_ASSOC);
		$query->execute();
		var_dump($_POST);
	}
		// $stmt = $dbc->prepare('INSERT INTO national_parks (name, location, date_established, area_in_acres, description) VALUES (:name, :location, :date_established, :area_in_acres, :description)');
		// $stmt->fetchAll(PDO::FETCH_ASSOC);
		// $stmt->execute(array(':name' => $name, ':location' => $location, ':date_established' => $date, ':area_in_acres' => $area, ':description' => $description));
		// header('location: national_parks.php');

	if(Input::notempty('parkname') && Input::notempty('parklocation') && Input::notempty('date') && Input::notempty('area') && Input::notempty('parkdescription')) {
		insertpark($dbc);
	}

	// $stmt = $dbc->query($query . $offset)->fetchAll(PDO::FETCH_ASSOC);

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
			margin-top: -15px;
			box-shadow: 5px 5px 5px black;
			border: 1px solid black;
		}
		th {
			border: 1px solid black;
		}
		th:hover {
			background-color: black;
			color: white;
			box-shadow: 5px 5px 5px black;
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
				<th>Description</th>
			</tr>
		<?php
			foreach($query as $parkarray) { ?>
			<tr>
				<td><?=$parkarray['name']?></td>
				<td><?=$parkarray['location']?></td>
				<td><?=$parkarray['date_established']?></td>
				<td><?=$parkarray['area_in_acres']?></td>
				<td><?=$parkarray['description']?></td>
			</tr>
			<?php } ?>
	</table>

	<?php
		if(isset($_GET['page']) && $_GET['page'] != 1) { ?>
			<a id = "previous" href="national_parks.php?page=<?=$page-1?>">Previous Page</a>
		<?php } 

		if(!isset($_GET['page']) || $_GET['page'] < 3) { ?>
			<a id = "next" href="national_parks.php?page=<?=$page+1?>">Next Page</a>
		<?php }

		if(isset($_GET['page']) && $_GET['page'] == 3) { ?>
			<a id = "home" href = "national_parks.php">Home</a>
		<?php } ?>

		<h2>Didn't find the Park you were looking for?</h2>
		<h3>Fill in the information below</h3>
		<form method = "POST">
			<p>
				<label for "parkname">Park Name</label>
				<input type = "text" id = "parkname" name = "parkname">
			</p>
			<p>
				<label for "parklocation">Location</label>
				<input type = "text" id = "parklocation" name = "parklocation">
			</p>
			<p>
				<label for "date">Date Established</label>
				<input type = "text" id = "date" name = "date">
			</p>
			<p>
				<label for "area">Area (in Acres)</label>
				<input type = "text" id = "area" name = "area">
			</p>
			<p>
				<label for "parkdescription">Description</label>
				<textarea id = "parkdescription" name = "parkdescription">Enter a short description of the park</textarea>
			</p>
			<button type = "submit" value = "submit">Submit</button>
		</form>
</body>
</html>