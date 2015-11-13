<?php
function pagecontroller() {
	$things = array("Movie" => "The Tree of Life", "Band" => "Evanescence", "Music Genre" => "Folk", "Video Game" => "Dragon Age: Origins", "Superhero" => "Batman");
	return array(
		'things' => $things
	);
}
extract(pagecontroller());
?>
<!DOCTYPE html>
<html>
<head>
	<title>My Favorite Things</title>
</head>
<body>
	<table>
	<?php foreach($things as $thing => $subs): ?>
		<tr>
		<th><?= $thing ?></th>
		<td><?= $subs ?></td>
		</tr>
		<?php endforeach; ?>
	</table>
</body>
</html>