<?php
class Model
{
	private $attributes = [];

	public function __set($key, $value)
	{
		$this->attributes[$key] = $value;
	}

	public function __get($key)
	{
		if (array_key_exists($key, $this->attributes)) {
			return $this->attributes[$key];
		}

		return null;
	}
}

$blah = new Model();
$blah->firstname = 'Reagan';
$blah->lastname = 'Wilkins';
$blah->age = 22;
$blah->favoriteband = "Evanescence";
$blah->favoritevideogame = "Dragon Age: Origins";
$blah->height = "5'9";
$blah->weight = "170lbs";
$blah->parents = ['Mike', 'Paige'];
$blah->betterhalf = "Christine";
$blah->betterhalfparents = ['Jay', 'Carolyn'];
$blah->betterhalfdogs = ['Layla', 'Sprocket'];
$blah->bestfriend = "Mason";
$blah->bestfriendparents = ['Rocky', 'Sue'];
$blah->bestfrienddog = "Gracie";
$blah->siblings = ['Hunter', 'Hadley', 'Hollis'];
$blah->favoritemovie = "The Tree of Life";
$blah->favoriteactor = "Jimmy Stewart";
$blah->favoritebook = "In Cold Blood";
$blah->favoriteauthor = "Truman Capote";
$blah->favoritesongwriter = "Jonathan Coulton";
$blah->favoritelanguage = "JavaScript or PHP";
$blah->leastfavoritelanguage = "CSS";
$blah->favoritechristmascarol = "The First Noel";
$blah->leastfavoritechristmascarol = "Oh Little Town of Bethleham";
$blah->favoritegameofthronescharacter = "Arya Stark";
$blah->favoritesuperhero = "Batman";
$blah->dogs = ['Bo', 'Mia', 'Sparey'];
$blah->rabbit = "Sampras";
$blah->chinchilla = "Luna";
echo $blah->firstname . " " . $blah->lastname . PHP_EOL;
print_r($blah);
?>