<?php
// Allows me to connect to the database and grab keys
	require '../../parks_login.php';
	require '../../db_connect.php';
	require '../../input.php';

// Sets the maximum number of pages depending on the row count
	$maxrows = $dbc->query('SELECT COUNT(*) FROM national_parks');
	$maxpagecount = $maxrows->fetch(PDO::FETCH_ASSOC);
	foreach($maxpagecount as $maximum) {
		$maximumpages = $maximum;
	}
	$maxpage = (ceil($maximumpages/4));

// Puts the seeder information/Initial database information on the page
	$query = $dbc->prepare('SELECT * FROM national_parks LIMIT :lim OFFSET :off');
	$page = isset($_GET['page']) ? round($_GET['page']) : 1; 
	// If you try to enter a nonexistant page, you get sent back to the start
	if(isset($_GET['page']) && (($_GET['page'] > $maxpage || $_GET['page'] < 1) || !is_numeric($_GET['page']))) {
		header('location: national_parks.php');
		die();
	}
	$offset = (($page-1)*4);
	$query->bindValue(':lim', 4, PDO::PARAM_INT);
	$query->bindValue(':off', $offset, PDO::PARAM_INT);
	$query->fetchAll(PDO::FETCH_ASSOC);
	$query->execute();

// Allows the user to insert a park
	function insertpark($dbc)
	{
		$name = Input::getString('parkname');
		$location = Input::getString('parklocation');
		$date = Input::getString('date');
		$area = Input::getString('area');
		$description = Input::getString('parkdescription');

		$inner = 'INSERT INTO national_parks (name, location, date_established, area_in_acres, description) VALUES (:name, :location, :date_established, :area_in_acres, :description)';
		$query = $dbc->prepare($inner);
		$query->bindValue(':name', $name, PDO::PARAM_STR);
		$query->bindValue(':location', $location, PDO::PARAM_STR);
		$query->bindValue(':date_established', $date, PDO::PARAM_STR);
		$query->bindValue(':area_in_acres', $area, PDO::PARAM_STR);
		$query->bindValue(':description', $description, PDO::PARAM_STR);
		$query->fetchAll(PDO::FETCH_ASSOC);
		$query->execute();
	}

// Allows the user to delete a park based on name
	function deletepark($dbc)
	{
		$deletename = Input::getString('delete');
		$deletequery = $dbc->prepare('DELETE FROM national_parks WHERE name = :name');
		$deletequery->bindValue(':name', $deletename, PDO::PARAM_STR);
		$deletequery->execute();
	
	}

// Checks to see if the inputs for the park insertion form are filled.
	if(Input::notempty('parkname') && Input::notempty('parklocation') && Input::notempty('date') && Input::notempty('area') && Input::notempty('parkdescription')) {
		insertpark($dbc);
	}

// Checks to see if the input for the park deletion form is filled.
	if(Input::notempty('delete')) {
		deletepark($dbc);
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
	// If not on the first page, show the 'previous' button.
		if(isset($_GET['page']) && $_GET['page'] != 1) { ?>
			<a id = "previous" href="national_parks.php?page=<?=$page-1?>">Previous Page</a>
		<?php } 

	// If not on the last page, show the 'next' button
		if(!isset($_GET['page']) || $_GET['page'] < $maxpage) { ?>
			<a id = "next" href="national_parks.php?page=<?=$page+1?>">Next Page</a>
		<?php }

	// If on the last page, show the 'home' button
		if(isset($_GET['page']) && $_GET['page'] == $maxpage) { ?>
			<a id = "home" href = "national_parks.php">Home</a>
		<?php } ?>

		<h2>Didn't find the Park you were looking for?</h2>
		<h3>Fill in the information below</h3>
		<form method = "POST" action = "national_parks.php">
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
		<h2>Want to delete a Park?</h2>
		<h3>Enter the park name below!</h3>
		<form method = "POST" action = "national_parks.php">
			<p>
				<label for "delete">Park to Delete</label>
				<input type = "text" id = "delete" name = "delete">
			</p>
			<button type = "submit" value = "submit">Delete</button>
		</form>
</body>
</html>