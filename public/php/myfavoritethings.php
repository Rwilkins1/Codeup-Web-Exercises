<?php
$things = array("Movie" => "The Tree of Life", "Band" => "Evanescence", "Music Genre" => "Folk", "Video Game" => "Dragon Age: Origins", "Superhero" => "Batman");
?>
<!DOCTYPE html>
<html>
<head>
	<title>My Favorite Things</title>
</head>
<body>
	<table>
	<?php foreach($things as $thing => $subs) { ?>
		<tr>
		<th><?php echo $thing ?></th>
		<td><?php echo $subs ?></td>
		</tr>
		<?php } ?>
	</table>
</body>
</html>