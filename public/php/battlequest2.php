<?php

// Title
$divider = "------------------------------------------------------------------------------" . PHP_EOL;
echo $divider;
echo "                         Battle Quest 2: The Battlening                        " . PHP_EOL;
echo $divider;

// Big Picture Variables
$incorrect = "I guess my options weren't good enough for you. Goodbye." . PHP_EOL;
$dead = "You have run out of health!\nYour Journey Ends\n";
$page = "|                                                                            |";
$break = $page . PHP_EOL . $page . PHP_EOL . $page . PHP_EOL . $page . PHP_EOL . $page . PHP_EOL . $page . PHP_EOL . $page . PHP_EOL . $page . PHP_EOL . $page . PHP_EOL . $page . PHP_EOL . $page . PHP_EOL . $page . PHP_EOL;

// Enemies
class Enemy
{
	public  $title;
	public  $hp;
	public  $damage;
}
$rat = new Enemy;
$rat->title = "The Rat";
$rat->hp = 3;
$rat->damage = 1;
// Name setter
fwrite(STDOUT, "Brave Traveller, Enter Thy Name: ");
$name = trim(fgets(STDIN));
echo $divider;

// Skill point allocation
fwrite(STDOUT, $name . ", You have 10 skill points. Enter a number between 1 and 10 to attribute to strength. All leftover points will be attributed to speed." . PHP_EOL);
$strength = ((int)trim(fgets(STDIN)));
$speed = 10 - $strength;
$youmax = (10-$speed)+1;
$health = 100;

echo $divider;

// Opening Message
$opening = "Hello, " . $name . "!" . PHP_EOL . "Your strength is: " . $strength . PHP_EOL . "Your speed is: " . $speed . PHP_EOL . "Your HP is: " . $health . PHP_EOL . "And your chance to hit enemies is: " . $youmax . " to 1" . PHP_EOL . "You are about to embark on a grand adventure! In order to progress in this game you must type in your response to a situation, not the number assigned to it. If you make spelling errors, the game will end, so check your work carefully! However, the answers are neither case nor puntuation sensitive, so there is no need to worry about that. To start playing, type in 'Start', and then press the 'Enter' key!" . PHP_EOL;
if ($strength < 10 && $strength >= 0) {
	fwrite(STDOUT, $opening);
	$answer = preg_replace('#[^a-zA-Z0-9 ]#', '', strtolower(trim(fgets(STDIN))));	
} else {
	echo $incorrect;
	die();
}

// First Question
echo $break;
echo $break;
$question1 = "You awaken to find yourself standing up. The smell of burning flesh fills your nostrils. You look around and realize that you are in a dungeon, but you are not locked up. You are standing in front of a cell and you see a man lying on the ground, burned to a crisp. Suddenly, everything comes back to you. You were at one point the Man in the cell. You defeated a wizard to escape your confinement only to find yourself faced with a riddling dragon, an enlightened sage, and good and evil themselves. Good and Evil offered you a wish, and you chose to become the very wizard that you faced in the dungeon in order to save the world. As this realization comes to you, you realize that something is wrong. You are not dead. The man who is you on the inside of the cell is dead, but you who are the wizard is still alive. The entire point of wishing to become the wizard was that you would die to save the world, but you have failed to kill yourself. What do you do?" . PHP_EOL . "1) Call out" . PHP_EOL . "2) Confine yourself" . PHP_EOL . "3) Cast a spell" . PHP_EOL . "4) Scream!" . PHP_EOL;
if ($answer == preg_replace('#[^a-zA-Z0-9 ]#', '', strtolower("Start"))) {
	fwrite(STDOUT, $question1);
	$answer1 = preg_replace('#[^a-zA-Z0-9 ]#', '', strtolower(trim(fgets(STDIN))));
} else {
	echo $incorrect;
	die();
}

// Second Question
echo $break;
echo $break;
$question2_1 = "'Good! Evil!' You call out, 'Can you hear me?'\nSuddenly you are transported to a black abyss with no ceiling, floor, or walls. Good and Evil stand in front of you. '$name, something is very wrong!' they say in tandem. 'There isn't much time to explain. We need to get you through the tutorial!'\n'The tutorial?' You ask.\nA giant rat appears out of nowhere\n'Defeat this rat! It has $rat->hp Health!' Good and Evil say. What do you do?" . PHP_EOL . "1) Attack" . PHP_EOL . "2) Use Health Pack" . PHP_EOL;
$question2_2 = "You feel a rush of energy flow over you as you cast a spell from the back of your head. You find yourself in a bright green field, nearly blinded by the sun. As you look upon the field, you realize that no harm is befalling it, despite the fact that you have left the dungeon. A giant rat appears out of nowhere. 'Crap. This must be a tutorial,' you say to yourself, 'I'll need to defeat this rat. It has $rat->hp Health!' What do you do?\n1) Attack\n2) Use Health Pack\n";

if ($answer1 == preg_replace('#[^a-zA-Z0-9 ]#', '', strtolower("Call out")) || $answer1 == preg_replace('#[^a-zA-Z0-9 ]#', '', strtolower("Scream!"))) {
	fwrite(STDOUT, $question2_1);
	$answer2 = preg_replace('#[^a-zA-Z0-9 ]#', '', strtolower(trim(fgets(STDIN))));
} else if ($answer1 == preg_replace('#[^a-zA-Z0-9 ]#', '', strtolower("Cast a spell"))) {
	fwrite(STDOUT, $question2_2);
	$answer2 = preg_replace('#[^a-zA-Z0-9 ]#', '', strtolower(trim(fgets(STDIN))));
} else if ($answer1 == preg_replace('#[^a-zA-Z0-9 ]#', '', strtolower("Confine yourself"))) {
	echo "You go and sit in the cell forever.\nYour Journey Ends\n";
	die();
} else {
	echo $incorrect;
	die();
}

// Battle
$hurt = $rat->hp - $strength;
$health = $health - $rat->damage;
echo $break;
echo $break;
$attack = "You attack $rat->title for $strength damage. $rat->title now has $hurt Health. $rat->title attacks you for $rat->damage Damage. You now have $health Health. What do you do?\n1) Attack\n2) Use Health Pack\n";
$miss = "You attempt to attack $rat->title, but you miss. $rat->title has $rat->hp Health. $rat->title attacks you for $rat->damage Damage. You now have $health Health. What do you do?\n1) Attack\n2) Use Health Pack\n";
$heal = "";
$healfail = "";

if($answer2 == preg_replace('#[^a-zA-Z0-9 ]#', '', strtolower("Attack")) && ($rat->hp > 0)) {
	$a = mt_rand(1, $youmax);
	$hurt = ($rat->hp) - $strength; 
	if ($a <= 2) {
		$health = $health - $rat->damage;
		fwrite(STDOUT, $attack);
		$action = preg_replace('#[^a-zA-Z0-9 ]#', '', strtolower(trim(fgets(STDIN))));
	} else {
		fwrite(STDOUT, $miss);
		$action = preg_replace('#[^a-zA-Z0-9 ]#', '', strtolower(trim(fgets(STDIN))));
	}
} else if ($answer2 == preg_replace('#[^a-zA-Z0-0 ]#', '', strtolower("Use Health Pack"))) {
	if ()
}

?>