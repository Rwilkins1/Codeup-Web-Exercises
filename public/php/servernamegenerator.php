<?php 
$adjectives = array("Swankey", "Culturally Insensative", "Starving", "Hipster", "Self-Righteous", "Slightly Above-Average", "Participation Award-Winning", "One-Eyed One-Horned Flying Purple", "Swaggariffic", "Psychoneuroendocrinological");
$nouns = array("Hipster", "Chartered Accountant", "Hypochondriac", "Otorhinolaryngologist", "Walrus", "Starburst", "Hello Kitty Fun Kart", "Gungan", "People Eater", "PTO Mom");
$adrand = array_rand($adjectives);
$norand = array_rand($nouns);
?>
<!DOCTYPE html>
<html>
<head>
	<title>Server Name Generator</title>
	<style type="text/css">
		body {
			background-color: skyblue;
		}
		h2 {
			text-align: center;
			text-shadow: 2px 2px 2px black;
			color: #669900;
			background-color: gray;
			padding: 10px;
			margin-top: 25%;
			margin-left: 25%;
			margin-right: 25%;
			box-shadow: 2px 2px 2px black;
		}
		h3 {
			text-align: center;
			color: black;
			background-color: gray;
			margin-top: -20px;
			margin-left: 25%;
			margin-right: 25%;
			padding: 10px;
			box-shadow: 2px 2px 2px black;
		}
	</style>
</head>
<body>
	<h2>Your Server Name is:</h2>
	<h3><?php 
	echo $adjectives[$adrand] . " " . $nouns[$norand];
	?></h3>

</body>
</html>