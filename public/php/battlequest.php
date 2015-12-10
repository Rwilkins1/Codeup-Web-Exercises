<?php

// Name setter
$divider = "------------------------------------------------------------------------------" . PHP_EOL;
echo $divider;
echo "                                 Battle Quest                                 " . PHP_EOL;
echo $divider;

fwrite(STDOUT, "Brave Traveller, Enter Thy Name: ");
$name = trim(fgets(STDIN));
echo $divider;
// Skill point allocation
fwrite(STDOUT, $name . ", You have 10 skill points. Enter a number between 1 and 10 to attribute to strength. All leftover points will be attributed to speed." . PHP_EOL);
$strength = ((int)trim(fgets(STDIN)));
$speed = 10 - $strength;

echo $divider;

// Opening Message
$opening = "Hello, " . $name . "!" . PHP_EOL . "Your strength is: " . $strength . PHP_EOL . "Your speed is: " . $speed . PHP_EOL . "You are about to embark on a grand adventure! When prompted, type in the response you would like to give, not the number of the response. Make sure to check your response carefully, as if you make a spelling error you will be sent back to the beginning. Responses are NOT case sensitive, however, and punctuation does not matter, so no need to worry about that. Type in 'Start' and press the 'Enter' key to begin!" . PHP_EOL;
$incorrect = "Guess my options weren't good enough for you. You lose." . PHP_EOL;
if ($strength < 10 && $strength >= 0) {
	fwrite(STDOUT, $opening);
	$answer = preg_replace('#[^a-zA-Z0-9 ]#', '', strtolower(trim(fgets(STDIN))));
} else {
	echo $incorrect;
	die();
}

// First Question

echo $divider;

$question1 = "You awaken to see naught but darkness. You feel cold stone below your back. The sound of running water cascades in the distance, and you can hear the pitter-patter of small paws surrounding you. You hear a voice say, 'I did it.' What do you do?" . PHP_EOL . "1) Try to get up" . PHP_EOL . "2) Call out" . PHP_EOL . "3) Accept your fate and remain lying down forever" . PHP_EOL . "4) Scream!" . PHP_EOL;
if ($answer == strtolower('Start')) {
	fwrite(STDOUT, $question1);
	$answer1 = preg_replace('#[^a-zA-Z0-9 ]#', '', strtolower(trim(fgets(STDIN))));
} else {
	echo "Guess you aren't ready to start then. Re-enter the file name to try again!" . PHP_EOL;
	die();
}

// Second Question

echo $divider;

$question2_1 = "You attempt to get up, but find that you are held down by chains. You exert all your strength into breaking them, but it is of no avail. Suddenly, you hear the voice from before call to you. 'Hello, " . $name . "', it says. How do you respond?" . PHP_EOL . "1) How do you know my name?" . PHP_EOL . "2) Where am I?" . PHP_EOL . "3) Your voice is GAY!" . PHP_EOL . "4) Scream!" . PHP_EOL;
$question2_2 = "'Why the f*** is it so dark?!' You call out. The voice from before responds, 'All is dark to those who do not wish to see, " . $name . ".' How do you respond?" . PHP_EOL . "1) How do you know my name?" . PHP_EOL . "2) Where am I?" . PHP_EOL . "3) What the f*** is that supposed to mean?" . PHP_EOL . "4) Scream!" . PHP_EOL;
$question2_3 = "The voice from before calls out, 'Dude! Why are you screaming?!' How do you respond?" . PHP_EOL . "1) Because I'm chained to the ground, why do you think?" . PHP_EOL . "2) Who are you?" . PHP_EOL . "3) Because I become aroused when I'm chained to the ground" . PHP_EOL . "4) Scream!" . PHP_EOL;

if ($answer1 == preg_replace('#[^a-zA-Z0-9 ]#', '', strtolower("Try to get up"))) {
	fwrite(STDOUT, $question2_1);
	$answer2 = preg_replace('#[^a-zA-Z0-9 ]#', '', strtolower(trim(fgets(STDIN))));
} else if ($answer1 == preg_replace('#[^a-zA-Z0-9 ]#', '', strtolower("Call out"))) {
	fwrite(STDOUT, $question2_2);
	$answer2 = preg_replace('#[^a-zA-Z0-9 ]#', '', strtolower(trim(fgets(STDIN))));
} else if ($answer1 == preg_replace('#[^a-zA-Z0-9 ]#', '', strtolower("Accept your fate and remain lying down forever"))) {
	echo "Your Journey Ends" . PHP_EOL;
	die();
} else if ($answer1 == preg_replace('#[^a-zA-Z0-9 ]#', '', strtolower("Scream!"))) {
	fwrite(STDOUT, $question2_3);
	$answer2 = preg_replace('#[^a-zA-Z0-9 ]#', '', strtolower(trim(fgets(STDIN))));
} else {
	echo $incorrect;
	die();
}

// Third Question

echo $divider;

$question3_1 = "'That isn't important,' the voice responds, 'what matters is getting you out of here. My name is Alikhramavharghrantallensuaze. I'm a wizard'. How do you respond?". PHP_EOL . "1) Wizards exist?" . PHP_EOL . "2) A wizard? You mean, like Gandalf?!" . PHP_EOL . "3) A wizard? More like a fairy, given how gay you are!" . PHP_EOL . "4) Scream!" . PHP_EOL;
$question3_2 = "'You're in a dungeon,' the voice responds, 'you've been down here for the past twenty years, but that isn't what matters. What matters is getting you out of here. My name is Alikhramavharghrantallensuaze. I'm a wizard.'". PHP_EOL . "1) Twenty years?!" . PHP_EOL . "2) A wizard? You mean, like Gandalf?!" . PHP_EOL . "3) GAY!" . PHP_EOL . "4) Scream!" . PHP_EOL;
$question3_3 = "'Whoa, whoa, whoa, whoa, whoa, whoa, whoa, whoa, whoa! Hold on a second!' The voice calls out. How do you respond?". PHP_EOL . "1) Sorry. This is just really scary for me. Can you get me out of here?" . PHP_EOL . "2) You sound like a wizard. *gasp* Are you Gandalf?!" . PHP_EOL . "3) Sorry, my gaydar was going off!" . PHP_EOL . "4) Scream!" . PHP_EOL;
if ($answer2 == preg_replace('#[^a-zA-Z0-9 ]#', '', strtolower("How do you know my name?")) || $answer2 == preg_replace('#[^a-zA-Z0-9 ]#', '', strtolower("Because I'm chained to the ground, why do you think?"))) {
	fwrite(STDOUT, $question3_1);
	$answer3 = preg_replace('#[^a-zA-Z0-9 ]#', '', strtolower(trim(fgets(STDIN))));
} else if ($answer2 == preg_replace('#[^a-zA-Z0-9 ]#', '', strtolower("Where am I?")) || $answer2 == preg_replace('#[^a-zA-Z0-9 ]#', '', strtolower("Who are you?"))) {
	fwrite(STDOUT, $question3_2);
	$answer3 = preg_replace('#[^a-zA-Z0-9 ]#', '', strtolower(trim(fgets(STDIN))));
} else if ($answer2 == preg_replace('#[^a-zA-Z0-9 ]#', '', strtolower("Your voice is GAY!")) || $answer2 == preg_replace('#[^a-zA-Z0-9 ]#', '', strtolower("What the f*** is that supposed to mean?")) || $answer2 == preg_replace('#[^a-zA-Z0-9 ]#', '', strtolower("Because I become aroused when I'm chained to the ground"))) {
	echo "The voice responds, 'I...think I'm gonna go now'." . PHP_EOL . "Your Journey Ends." . PHP_EOL;
	die();
} else if ($answer2 == preg_replace('#[^a-zA-Z0-9 ]#', '', strtolower("Scream!"))) {
	fwrite(STDOUT, $question3_3);
	$answer3 = preg_replace('#[^a-zA-Z0-9 ]#', '', strtolower(trim(fgets(STDIN))));
} else {
	echo $incorrect;
	die();
}

// Fourth Question

echo $divider;

$question4_1 = "'Yes, but that doesn't matter,' the wizard responds, 'but we don't have much time. Will you come with me?'" . PHP_EOL . "1) Yes" . PHP_EOL . "2) No" . PHP_EOL;
$question4_2 = "'NO!!!!!' The wizard screams, as if some personal nerve had been struck. '....no...not at all. Will you come with me or not?'" . PHP_EOL . "1) Yes" . PHP_EOL . "2) No" . PHP_EOL;
$question4_3 = "'WILL YOU EVER STOP SCREAMING?!'" . PHP_EOL . "1) Yes" . PHP_EOL . "2) SCREEEEEEAM!!!!" . PHP_EOL;

if ($answer3 == preg_replace('#[^a-zA-Z0-9 ]#', '', strtolower("Wizards exist?")) || $answer3 == preg_replace('#[^a-zA-Z0-9 ]#', '', strtolower("Twenty years?!")) || $answer3 == preg_replace('#[^a-zA-Z0-9 ]#', '', strtolower("Sorry. This is just really scary for me. Can you get me out of here?"))) {
	fwrite(STDOUT, $question4_1);
	$answer4 = preg_replace('#[^a-zA-Z0-9 ]#', '', strtolower(trim(fgets(STDIN))));
} else if ($answer3 == preg_replace('#[^a-zA-Z0-9 ]#', '', strtolower("A wizard? You mean, like Gandalf?!")) || $answer3 == preg_replace('#[^a-zA-Z0-9 ]#', '', strtolower("You sound like a wizard. *gasp* Are you Gandalf?!"))) {
	fwrite(STDOUT, $question4_2);
	$answer4 = preg_replace('#[^a-zA-Z0-9 ]#', '', strtolower(trim(fgets(STDIN))));
} else if ($answer3 == preg_replace('#[^a-zA-Z0-9 ]#', '', strtolower("A wizard? More like a fairy, given how gay you are!")) || $answer3 == preg_replace('#[^a-zA-Z0-9 ]#', '', strtolower("GAY!")) || $answer3 == preg_replace('#[^a-zA-Z0-9 ]#', '', strtolower("Sorry, my gaydar was going off!"))) {
	echo "You hear footsteps as the voice leaves you behind." . PHP_EOL . "Your Journey Ends" . PHP_EOL . "What are you, a middle-schooler?" . PHP_EOL;
	die();
} else if ($answer3 == preg_replace('#[^a-zA-Z0-9 ]#', '', strtolower("Scream!"))) {
	fwrite(STDOUT, $question4_3);
	$answer4 = preg_replace('#[^a-zA-Z0-9 ]#', '', strtolower(trim(fgets(STDIN))));
} else {
	echo $incorrect;
	die();
}

// Fifth Question

echo $divider;

$question5 = "'Alright. I have three weapons from which to choose. I have a sword, a spear, and a bow. Which would you prefer?'" . PHP_EOL . "1) The Sword" . PHP_EOL . "2) The Spear" . PHP_EOL . "3) The Bow" . PHP_EOL . "4) None of them. I'll use my fists!" . PHP_EOL;

if($answer4 == preg_replace('#[^a-zA-Z0-9 ]#', '', strtolower("Yes"))) {
	fwrite(STDOUT, $question5);
	$answer5 = preg_replace('#[^a-zA-Z0-9 ]#', '', strtolower(trim(fgets(STDIN))));
} else if ($answer4 == preg_replace('#[^a-zA-Z0-9 ]#', '', strtolower("No"))) {
	echo "'FINE! I HOPE YOU ROT IN HERE!'" . PHP_EOL . "Your Journey Ends" . PHP_EOL . "Seriously? What made you think that would work out?" . PHP_EOL;
	die();
} else {
	echo $incorrect;
	die();
}

// Sixth Question

echo $divider;

$question6_1 = "You feel the chains snap off of you and you find the strength to stand. You see a sword being offered to you. You take it in your hand. 'Now, " . $name . ", face me! For I am the one who locked you up down here!' The wizard cries out. You can tell the wizard is close enough to slice at with your sword, but you feel the wizard might also listen to reason. How do you respond?" . PHP_EOL . "1) Slash the Wizard" . PHP_EOL . "2) Throw down your sword" . PHP_EOL . "3) Quote Monty Python" . PHP_EOL . "4) Scream!" . PHP_EOL;
$question6_2 = "You feel the chains snap off of you and you find the strength to stand. You see a spear being offered to you. You take it in your hand. 'Now, " . $name . ", face me! For I am the one who locked you up down here!' The wizard cries out. You can tell the wizard is close enough to stab with your spear, but you feel the wizard might also listen to reason. How do you respond?" . PHP_EOL . "1) Stab the Wizard" . PHP_EOL . "2) Throw down your spear" . PHP_EOL . "3) Quote Monty Python" . PHP_EOL . "4) Scream!" . PHP_EOL;
$question6_3 = "You feel the chains snap off of you and you find the strength to stand. You see a bow and arrow being offered to you. You take them in your hand. 'Now, " . $name . ", face me! For I am the one who locked you up down here!' The wizard cries out. You can tell the wizard is close enough to shoot with your bow and arrow, but you feel the wizard might also listen to reason. How do you respond?" . PHP_EOL . "1) Shoot the Wizard" . PHP_EOL . "2) Throw down your bow and arrow" . PHP_EOL . "3) Quote Monty Python" . PHP_EOL . "4) Scream!" . PHP_EOL;
$question6_4 = "You feel the chains snap off of you and you find the strength to stand. Having been freed from your restraints, you put up your fists with manly prowess. 'Now, " . $name . ", face me! For I am the one who locked you up down here!' The wizard cries out. You can tell the wizard is close enough to beat to a pulp like the little robe wearing snowflake that he is, but you feel the wizard might also listen to reason. How do you respond?" . PHP_EOL . "1) BEAT THE STUFFINGS OUT OF HIM!" . PHP_EOL . "2) Put your hands in your pockets" . PHP_EOL . "3) Quote Monty Python" . PHP_EOL . "4) Scream!" . PHP_EOL;

if($answer5 == preg_replace('#[^a-zA-Z0-9 ]#', '', strtolower("The Sword"))) {
	fwrite(STDOUT, $question6_1);
	$answer6 = preg_replace('#[^a-zA-Z0-9 ]#', '', strtolower(trim(fgets(STDIN))));
} else if ($answer5 == preg_replace('#[^a-zA-Z0-9 ]#', '', strtolower("The Spear"))) {
	fwrite(STDOUT, $question6_2);
	$answer6 = preg_replace('#[^a-zA-Z0-9 ]#', '', strtolower(trim(fgets(STDIN))));
} else if ($answer5 == preg_replace('#[^a-zA-Z0-9 ]#', '', strtolower("The Bow"))) {
	fwrite(STDOUT, $question6_3);
	$answer6 = preg_replace('#[^a-zA-Z0-9 ]#', '', strtolower(trim(fgets(STDIN))));
} else if ($answer5 == preg_replace('#[^a-zA-Z0-9 ]#', '', strtolower("None of them. I'll use my fists!"))) {
	fwrite(STDOUT, $question6_4);
	$answer6 = preg_replace('#[^a-zA-Z0-9 ]#', '', strtolower(trim(fgets(STDIN))));
} else {
	echo $incorrect;
	die();
}

// Seventh Question

echo $divider;

$question7_1 = "You attack the wizard and hear his body fall to the ground. You hear the sound of a door opening in the distance. What do you do?" . PHP_EOL . "1) Walk to the sound" . PHP_EOL . "2) Stay where you are" . PHP_EOL;
$question7_2 = "You put away your weapon of choice. 'What?' The wizard asks, 'Why did you put away your weapon? I just said that I am the one who locked you up in here!'" . PHP_EOL . "How do you respond?" . PHP_EOL . "1) I don't want to fight you" . PHP_EOL . "2) Because...I love you" . PHP_EOL . "3) Sucker!" . PHP_EOL . "4) Wax poetic" . PHP_EOL;
$question7_3 = "You grab the wizard by his robe, throw him on the ground, and start pounding away at him. You feel the impact of his breaking bones as your true weapons mangle his little wet paper towl of a body. As the life fades from the wizard, you hear the sound of a door opening in the distance. What do you do?" . PHP_EOL . "1) Walk to the sound" . PHP_EOL . "2) Stay where you are" . PHP_EOL;
$question7_4 = "'Oh no!' the wizard shouts, 'Not this again!' You see a ball of fire hurtling towards you. You dodge the fireball and attack the wizard. 'Noooooo!' The wizard screams as he dies, 'How could you dodge my firebaaaaaalll?'" . PHP_EOL . "You hear the sound of a door opening in the distance." . PHP_EOL . "What do you do?" . PHP_EOL . "1) Walk to the sound" . PHP_EOL . "2) Stay where you are" . PHP_EOL;

if($answer6 == preg_replace('#[^a-zA-Z0-9 ]#', '', strtolower("Slash the Wizard")) || $answer6 == preg_replace('#[^a-zA-Z0-9 ]#', '', strtolower("Stab the Wizard")) || $answer6 == preg_replace('#[^a-zA-Z0-9 ]#', '', strtolower("Shoot the Wizard"))) {
	fwrite(STDOUT, $question7_1);
	$answer7 = preg_replace('#[^a-zA-Z0-9 ]#', '', strtolower(trim(fgets(STDIN))));
} else if ($answer6 == preg_replace('#[^a-zA-Z0-9 ]#', '', strtolower("Throw down your sword")) || $answer6 == preg_replace('#[^a-zA-Z0-9 ]#', '', strtolower("Throw down your spear")) || $answer6 == preg_replace('#[^a-zA-Z0-9 ]#', '', strtolower("Throw down your bow and arrow")) || $answer6 == preg_replace('#[^a-zA-Z0-9 ]#', '', strtolower("Put your hands in your pockets"))) {
	fwrite(STDOUT, $question7_2);
	$answer7 = preg_replace('#[^a-zA-Z0-9 ]#', '', strtolower(trim(fgets(STDIN))));
} else if ($answer6 == preg_replace('#[^a-zA-Z0-9 ]#', '', strtolower("BEAT THE STUFFINGS OUT OF HIM!")) && $strength >= 5) {
	fwrite(STDOUT, $question7_3);
	$answer7 = preg_replace('#[^a-zA-Z0-9 ]#', '', strtolower(trim(fgets(STDIN))));
} else if ($answer6 == preg_replace('#[^a-zA-Z0-9 ]#', '', strtolower("BEAT THE STUFFINGS OUT OF HIM!")) && $strength < 5) {
	echo "You try to beat the stuffings out of the wizard, but you didn't put enough points in Strength to make it work. You feel a throbbing pain in the limp noodle that is your fist as you punch the wizard, and you fall to the ground, dead." . PHP_EOL . "Your journey ends" . PHP_EOL;
	die();
} else if ($answer6 == preg_replace('#[^a-zA-Z0-9 ]#', '', strtolower("Quote Monty Python"))) {
	echo "'We are the Knights who say...Ni!!!' You shout. You hear nothing in response. You call out again, and again receive no answer." . PHP_EOL . "Your Journey Ends." . PHP_EOL;
	die();
} else if ($answer6 == preg_replace('#[^a-zA-Z0-9 ]#', '', strtolower("Scream!")) && $speed < 5) {
	echo "'Oh no!' The wizard shouts, ''Not this again!' You see a ball of flame hurtling towards you. You try to dodge it, but you didn't put enough points in Speed. You awkwardly try to escape the fireball like the senile tortoise you are, but you are hit by the flames and die." . PHP_EOL . "Your journey ends" . PHP_EOL;
} else if ($answer6 == preg_replace('#[^a-zA-Z0-9 ]#', '', strtolower("Scream!")) && $speed >= 5) {
	fwrite(STDOUT, $question7_4);
	$answer7 = preg_replace('#[^a-zA-Z0-9 ]#', '', strtolower(trim(fgets(STDIN))));
} else {
	echo $incorrect;
	die();
}

// Eigth Question

echo $divider;

$question8_1 = "You walk towards the sound of the open door, and gradually, light from a torch comes into view. You see a door in the distance, lit by several other torches. Now the dungeon is entirely visible. You go up to the door and open it. You step into an enormous room, and on the far end of the room, you see a dragon. You start to turn tail and run, but you hear a booming masculine voice call out. 'Stand thy ground, brave traveller! Behold, for I am a mighty dragon! Thou mayst passeth my by unscathed on condition that thou answerth a veritable gauntlet of riddles!' The dragon calls out. Mine first riddle goeseth thusly: What is thy name?" . PHP_EOL . "1) John Jacob Jingleheimer Smith" . PHP_EOL . "2) " . $name . PHP_EOL . "3) Umm..." . PHP_EOL . "4) Javert" . PHP_EOL;
$question8_2 = "You quickly take out your weapon again and attack the wizard. As he dies, you are suddenly blinded by light. You realize that the light is from a series of torches, and you are now in an entirely different room with a dragon inside of it. 'Behold, brave traveller, for I am a mighty dragon, and the creator of this game didn't want to have to retype the segment where you walk down the hallway to this room!' The remarkably self-aware dragon calls out. 'Thou mayst passeth me by unscathed on condition that thou answerth a veritable gauntlet of riddles. Mine first riddle goeseth thusly: What is thy name?'" . PHP_EOL . "1) John Jacob Jingleheimer Smith" . PHP_EOL . "2) " . $name . PHP_EOL . "3) Umm..." . PHP_EOL . "4) Javert" . PHP_EOL;
$question8_3 = "...Wait....really?" . PHP_EOL . "1) Yes" . PHP_EOL;

if($answer7 == preg_replace('#[^a-zA-Z0-9 ]#', '', strtolower("Walk to the sound"))) {
	fwrite(STDOUT, $question8_1);
	$answer8 = preg_replace('#[^a-zA-Z0-9 ]#', '', strtolower(trim(fgets(STDIN))));
} else if ($answer7 == preg_replace('#[^a-zA-Z0-9 ]#', '', strtolower("Sucker!"))) {
	fwrite(STDOUT, $question8_2);
	$answer8 == preg_replace('#[^a-zA-Z0-9 ]#', '', strtolower(trim(fgets(STDIN))));
} else if ($answer7 == preg_replace('#[^a-zA-Z0-9 ]#', '', strtolower("Stay where you are"))) {
	fwrite(STDOUT, $question8_3);
	$answer8 = preg_replace('#[^a-zA-Z0-9 ]#', '', strtolower(trim(fgets(STDIN))));
} else if ($answer7 == preg_replace('#[^a-zA-Z0-9 ]#', '', strtolower("I don't want to fight you"))) {
	echo "'Well, I do!' The wizard yells. You feel your body evaporate as a ball of fire hurtles towards you." . PHP_EOL . "Your Journey Ends" . PHP_EOL;
	die();
} else if ($answer7 == preg_replace('#[^a-zA-Z0-9 ]#', '', strtolower("Because...I love you"))) {
	echo "'You..you...you do?' The wizard asks with tears evident in his voice. 'Oh, " . $name . ", I had always hoped, but I didn't dare expect it!' You hear a door open in the distance and feel a veiny old hand take your hand. As you and the wizard walk off into the distance, you do not know where you are heading, but you know that, as long as the two of your are together, no adventure, no threat of danger is too daunting." . PHP_EOL . "Congratulations! You got the True Love ending!" . PHP_EOL . "Enter the file name to play again!" . PHP_EOL;
	die();
} else if ($answer7 == preg_replace('#[^a-zA-Z0-9 ]#', '', strtolower("Wax poetic"))) {
	echo "'Because as horrid as this prison is, it is not nearly as dark as the prison inside of all of us' You say. You hear no response. You do, however, hear the sound of cloth on stone, and you infer that the wizard is curled on the ground, writhing in existential despair. Now you will never escape." . PHP_EOL . "Your Journey Ends." . PHP_EOL;
	die();
} else {
	echo $incorrect;
	die();
}

// Ninth Question

echo $divider;

$question9_1 = "'Yea, verily I say unto thee, that is thy name!' The dragon roars. 'Mine second riddles goesetheth thusly: What has four legs in the morning, two in the afternoon, and three at night?'" . PHP_EOL . "1) Crony Capitalism" . PHP_EOL . "2) Umm..." . PHP_EOL . "3) Humans" . PHP_EOL . "4) I know the answer...but how about you tell me just so I can see if I'm right?" . PHP_EOL;
$question9_2 = "You're serious?" . PHP_EOL . "1) Yes" . PHP_EOL;

if($answer8 == strtolower($name)) {
	fwrite(STDOUT, $question9_1);
	$answer9 = preg_replace('#[^a-zA-Z0-9 ]#', '', strtolower(trim(fgets(STDIN))));
} else if ($answer8 == preg_replace('#[^a-zA-Z0-9 ]#', '', strtolower("Yes"))) {
	fwrite(STDOUT, $question9_2);
	$answer9 = preg_replace('#[^a-zA-Z0-9 ]#', '', strtolower(trim(fgets(STDIN))));
} else if ($answer8 == preg_replace('#[^a-zA-Z0-9 ]#', '', strtolower("John Jacob Jingleheimer Smith"))) {
	echo "'His name is my name, too!' The dragon says, 'but it is not thy name.' You feel your body melt as the dragon breathes upon you." . PHP_EOL . "Your Journey Ends" . PHP_EOL;
	die();
} else if ($answer8 == preg_replace('#[^a-zA-Z0-9 ]#', '', strtolower("Umm..."))) {
	echo "The dragon makes a sound similar to an obnoxious 'wrong answer' buzzer and breathes fire on you." . PHP_EOL . "Your Journey Ends" . PHP_EOL;
	die();
} else if ($answer8 == preg_replace('#[^a-zA-Z0-9 ]#', '', strtolower("Javert"))) {
	echo "'I will not forget thy name, but evidently thou hast' The dragon calls out. You feel your skin melt as the dragon breathes fire on you." . PHP_EOL . "Your Journey Ends" . PHP_EOL;
	die();
} else {
	echo $incorrect;
	die();
}

// Tenth Question

echo $divider;

$question10_1 = "'Yea, verily I say unto thee, that is the answer!' The dragon roars. 'I have but one final riddle, and it goesethethethetheth thusly: What is thy greatest desire?" . PHP_EOL . "1) Babes, babes, and more babes" . PHP_EOL . "2) You, dragon. I love you!" . PHP_EOL . "3) A Dire Straights reunion tour" . PHP_EOL . "4) To escape this dungeon" . PHP_EOL;
$question10_2 = "After all this time, you're just going to stay here?" . PHP_EOL . "1) Yeah, I'm good" . PHP_EOL;

if ($answer9 == preg_replace('#[^a-zA-Z0-9 ]#', '', strtolower("Humans"))) {
	fwrite(STDOUT, $question10_1);
	$answer10 = preg_replace('#[^a-zA-Z0-9 ]#', '', strtolower(trim(fgets(STDIN))));
} else if ($answer9 == preg_replace('#[^a-zA-Z0-9 ]#', '', strtolower("Yes"))) {
	fwrite(STDOUT, $question10_2);
	$answer10 = preg_replace('#[^a-zA-Z0-9 ]#', '', strtolower(trim(fgets(STDIN))));
} else if ($answer9 == preg_replace('#[^a-zA-Z0-9 ]#', '', strtolower("Crony Capitalism")) || $answer9 == preg_replace('#[^a-zA-Z0-9 ]#', '', strtolower("Umm...")) || $answer9 == preg_replace('#[^a-zA-Z0-9 ]#', '', strtolower("I know the answer...but how about you tell me just so I can see if I'm right?"))) {
	echo "The dragon makes a sound like an incredibly obnoxious 'wrong answer' buzzer. You feel your skin melt as the dragon breathes fire upon you." . PHP_EOL . "Your Journey Ends" . PHP_EOL;
	die();
} else {
	echo $incorrect;
	die();
}

// Eleventh Question

echo $divider;

$question11_1 = "'Indeed, that is what thou desirest most!' The dragon roars, 'Thou mayst passeth my byeth unscathed!' The dragon takes off flying through a hole in the ceiling, and you see another door on the opposite end of the dungeon. You go to the door and open it. As you do, you are met by a woman with a perm, an itchy looking red dress, and a string of pearls around her neck." . PHP_EOL . "'Hi there, neighbor!' The woman says to you, 'My name is Carrie Ledbetter. I'm with the devonstormholdshire homeowner's association, and I'm taking a survey. If you have time, I'd like to ask you a single question!' Before you have a chance to tell her to buzz off, the woman continues. 'When we enact our new 'if you make a leaf pile in autumn we'll have your family burned alive' edict, will you comply?'" . PHP_EOL . "1) Of course I'll comply! I love you!" . PHP_EOL . "2) What? Hell no!" . PHP_EOL . "3) Ask about the homeowner's association" . PHP_EOL . "4) Fine. I'll comply" . PHP_EOL; 

if ($answer10 == preg_replace('#[^a-zA-Z0-9 ]#', '', strtolower("To escape this dungeon")) || $answer10 == preg_replace('#[^a-zA-Z0-9 ]#', '', strtolower("Babes, babes, and more babes"))) {
	fwrite(STDOUT, $question11_1);
	$answer11 = preg_replace('#[^a-zA-Z0-9 ]#', '', strtolower(trim(fgets(STDIN))));
} else if ($answer10 == preg_replace('#[^a-zA-Z0-9 ]#', '', strtolower("You, dragon. I love you!"))) {
	echo "'T..Truly?!' The dragon asks with tears in its eyes. 'Oh, " . $name . ", I always hoped, but I never dared expect it! Hop on my back, and we'll leave this place together.' You hop onto the dragon's mighty back, and you feel the warmth of its body under you. You hold on tight to its spines as it takes off and flies outside of a hole in the ceiling. As you and the dragon fly out into the darkness of the night, you do not know what fate has in store, what adventures and dangers await you outside of the dungeon walls. But you know that, as long as the two of you are together, no adventure, no threat of danger is too daunting." . PHP_EOL . "Congratulations! You got the True (if unconventional) Love ending!" . PHP_EOL . "Enter the file name to play again!" . PHP_EOL;
	die();
} else if ($answer10 == preg_replace('#[^a-zA-Z0-9 ]#', '', strtolower("A Dire Straights reunion tour"))) {
	echo "'Wrong!' The dragon roars, 'Nobody's greatest desire is that!' You feel your skin melt as the dragon breathes fire upon you." . PHP_EOL . "Your Journey Ends" . PHP_EOL;
	die();
} else if ($answer10 == preg_replace('#[^a-zA-Z0-9 ]#', '', strtolower("Yes"))) {
	echo "You decide that, even though the exit is right in front of you, you are more than content to stay in your dark little dungeon. After all, your dark little dungeon protects you, and without your dark little dungeon, who would build the roads?" . PHP_EOL . "Congratulations! You got the Metaphor for Statism ending!" . PHP_EOL . "Enter the file name to play again!" . PHP_EOL;
	die();
} else {
	echo $incorrect;
	die();
}

// Twelfth Question

echo $divider;

$question12_1 = "'Very good, very good!' the woman responds. 'Since you have chosen the correct answer, I will take you where you need to go. Follow me!' The woman starts walking away, and you follow. You find yourself in a long, dark corridor, and it feels like you walk for hours. Finally, you and the woman come to a door." . PHP_EOL . "'The president of the homeowner's association is through this door. Speak with him, and you may leave this dungeon yet,' the woman says. The door opens slowly with a creak. You walk in and see a skinny old man with a long beard sitting on a cushion surrounded by burning sticks of incense. 'Hello, " . $name . ". I have been expecting you. I am called 'the sage',' the man says. 'It may be that you can leave this dungeon, but in order to tell, you must know yourself. It can be a terror-inducing experience to undergo, but it is the only way that you can leave this place. Are you prepared?'" . PHP_EOL . "1) Yes" . PHP_EOL . "2) No" . PHP_EOL;
$question12_2 = "'Devonstormholdshire? What's that?' You ask. 'Its where we are!' The woman responds, 'You mean you don't own a home here? Well, you're in luck! If you agree to sign over your soul to satan, you can be the owner of all the real estate property in Devonstormholdshire! What do you say?'" . PHP_EOL . "1) Hell yes!" . PHP_EOL . "2) Hell no!" . PHP_EOL;

if ($answer11 == preg_replace('#[^a-zA-Z0-9 ]#', '', strtolower("Fine. I'll comply"))) {
	fwrite(STDOUT, $question12_1);
	$answer12 = preg_replace('#[^a-zA-Z0-9 ]#', '', strtolower(trim(fgets(STDIN))));
} else if ($answer11 == preg_replace('#[^a-zA-Z0-9 ]#', '', strtolower("Ask about the homeowner's association"))) {
	fwrite(STDOUT, $question12_2);
	$answer12 = preg_replace('#[^a-zA-Z0-9 ]#', '', strtolower(trim(fgets(STDIN))));
} else if ($answer11 == preg_replace('#[^a-zA-Z0-9 ]#', '', strtolower("What? Hell no!"))) {
	echo "'Oh, well, I guess I'm going to have to kill you, then!' the woman responds. The woman starts twisting and turning and she turns into a hideous monster five times your size. The woman picks you up and rips you in half." . PHP_EOL . "Your Journey Ends." . PHP_EOL;
	die();
} else if ($answer11 == preg_replace('#[^a-zA-Z0-9 ]#', '', strtolower("Of course I'll comply! I love you!"))) {
	echo "'Y..y..you do?' The woman asks with tears in her eyes. 'Oh, " . $name . ", I always hoped, but I never dared expect it. Come with me, and we'll be homeowners together!' You take the woman's hand in yours, and you walk off together. As you and the woman walk further into the darkness of the dungeon, you don't know what challenges await you or what mountains you will have to climb. But as long as you are together, you know that no adventure, no threat of death is too daunting." . PHP_EOL . "Congratulation! You got the True (suburban) Love Ending!" . PHP_EOL . "Enter the file name to play again!" . PHP_EOL;
	die();
} else {
	echo $incorrect;
	die();
}

// Thirteenth Question

echo $divider;

$question13_1 = "'My first question is this: What is your strength stat?'" . PHP_EOL . "1) " . ($strength-1) . PHP_EOL . "2) " .  $strength . PHP_EOL . "3) Not nearly as strong as my love for you" . PHP_EOL . "4) Wait! I wasn't paying attention at the beginning!" . PHP_EOL;

if ($answer12 == preg_replace('#[^a-zA-Z0-9 ]#', '', strtolower("Yes"))) {
	fwrite(STDOUT, $question13_1);
	$answer13 = preg_replace('#[^a-zA-Z0-9 ]#', '', strtolower(trim(fgets(STDIN))));
} else if ($answer12 == preg_replace('#[^a-zA-Z0-9 ]#', '', strtolower("No"))) {
	echo "'Then I'm afraid you'll never leave this place,' the sage says with sadness in his voice." . PHP_EOL . "Your Journey Ends" . PHP_EOL;
	die();
} else if ($answer12 == preg_replace('#[^a-zA-Z0-9 ]#', '', strtolower("Hell yes!"))) {
	echo "'Very well!' The woman says. 'You now own all of the real estate in Devonstormholdshire! I and every citizen here are now at your disposal...master.'" . PHP_EOL . "Congratulations! You got the Opportunist ending!" . PHP_EOL . "Enter the file name to play again!" . PHP_EOL;
	die();
} else if ($answer12 == preg_replace('#[^a-zA-Z0-9 ]#', '', strtolower("Hell no!"))) {
	echo "'I suppose I'll just have to kill you, then!' the woman says. She turns into a hideous monster five times your size. She picks you up and rips you in half." . PHP_EOL . "Your Journey Ends" . PHP_EOL;
	die();
} else {
	echo $incorrect;
	die();
}

// Fourteenth Question

echo $divider;

$question14_1 = "'Very good,' the sage says, nodding in agreement. 'It seems that you know yourself well enough to pass. If I might ask, though, how is the wizard that locked you in that cell?'" . PHP_EOL . "1) Alive" . PHP_EOL . "2) Dead" . PHP_EOL;

if ($answer13 == $strength) {
	fwrite(STDOUT, $question14_1);
	$answer14 = preg_replace('#[^a-zA-Z0-9 ]#', '', strtolower(trim(fgets(STDIN))));
} else if ($answer13 == $strength-1) {
	echo "'I'm very sorry. That is not your strength stat. I'm afraid you do not know yourself well enough to escape this place.' the sage says." . PHP_EOL . "Your Journey Ends" . PHP_EOL;
	die();
} else if ($answer13 == preg_replace('#[^a-zA-Z0-9 ]#', '', strtolower("Not nearly as strong as my love for you"))) {
	echo "The sage shakes his head. 'There are many True Love endings for this game,' he starts, 'however, I am not one of them.' Knowing that the sage will never love you, you walk back to the cell in which you started. As you stare into the dark abyss of your cell, you realize that even the smallest adventures, even the smallest threats of danger are too daunting to bear" . PHP_EOL . "Congratulations! You got the Forever Alone ending!" . PHP_EOL . "Enter the file name to play again!" . PHP_EOL;
	die();
} else if ($answer13 == preg_replace('#[^a-zA-Z0-9 ]#', '', strtolower("Wait! I wasn't paying attention at the beginning!"))) {
	echo "'Well, you should have been. I'm afraid you don't know yourself well enough to leave this place'." . PHP_EOL . "Your Journey Ends" . PHP_EOL;
	die();
} else {
	echo $incorrect;
	die();
}

// Fifteenth Question

echo $divider;

$question15_1 = "The sage points towards the back of the room he is in. There is another door, and you go to open it. When you open it, you find the door has disappeared along with the room. You are now in a pitch black void with no ceiling and no floor and no walls. You see two figures in the distance and walk towards them. When you reach them, you find that they are two old men. The one on the left has white hair and wears a white robe. The one on the right has black hair and wears a black robe. 'We greet you, " . $name . ", we are good and evil,' the figures say in tandem. 'We have been expecting you for quite some time. We know you must have many questions, and now they shall be answered. You have come to us many times before, and every time, we offered to grant you a single wish. Every time, you chose to save the world. The truth is that, should you leave this dungeon, doom would befall all the earth. When you learned of this, you chose to wish for a way to stop yourself from ever leaving this dungeon. You made your wish, and you returned to this world as Alikhramavharghrantallensuaze, the wizard you faced. That is right, the wizard you faced when you awoke was none other than yourself. Now we extend this same offer of a granted wish to you. Will you brave the death you know awaits you in order to save the world? Will you shirk the responsibility that has befallen you so many times before? Or will you do something else entirely? You must choose.'" . PHP_EOL . "This is the final decision of the game, and the ramifications of your wish will be earth-shattering." . PHP_EOL . "Choose Wisely." . PHP_EOL . "1) Become the wizard" . PHP_EOL . "2) Escape the dungeon" . PHP_EOL . "3) Love" . PHP_EOL . "4) Ban books with mature content" . PHP_EOL; 


if ($answer14 == preg_replace('#[^a-zA-Z0-9 ]#', '', strtolower("Dead"))) {
	echo "'In a way, yes, he is,' the sage says. 'Venture forth, and all will be revealed.'" . PHP_EOL;
	fwrite(STDOUT, $question15_1);
	$finalanswer = preg_replace('#[^a-zA-Z0-9 ]#', '', strtolower(trim(fgets(STDIN))));
} else if ($answer14 == preg_replace('#[^a-zA-Z0-9 ]#', '', strtolower("Alive"))) {
	echo "'A statement that carries more wisdom than you know,' the sage says. 'Venture forth, and all will be revealed.'" . PHP_EOL;
	fwrite(STDOUT, $question15_1);
	$finalanswer = preg_replace('#[^a-zA-Z0-9 ]#', '', strtolower(trim(fgets(STDIN))));
} else {
	echo $incorrect;
	die();
}

// Endgame parameters

echo $divider;

$ending1 = "'I choose to save the world,' you say, 'I will become the wizard, as I have many times before, if it means that the world will be spared the doom that will befall it.' Good and Evil nod their heads, smiles on their faces. 'As you wish,' they say. You feel yourself aging rapidly. You feel a beard begin to grow, and you feel the power of magic coursing through your veins. You close your eyes as great power washes over you. You open your eyes again and find yourself in the dungeon you started in. You see yourself chained to the ground on the inside of a cell, but you are on the outside looking in. You realize that you have indeed gotten your wish, and though you will certainly die, you know that because of your sacrifice, the world will live to see another day." . PHP_EOL . "'I did it.' You say." . PHP_EOL . "The End" . PHP_EOL . "Congratulations! You got the Hero ending!" . PHP_EOL . "Enter the file name to play again!" . PHP_EOL;
$ending2 = "'I have already sacrificed enough for this world,' you say, 'I wish to leave this dungeon.' Good and Evil nod their heads, looks of disappointment on their faces. 'If that is what you wish, then it will be so,' they say. You feel a bright light on your face, causing you to squint. As your eyes adjust, you realize that you are looking directly at the sun. You look down upon a green meadow and realize that you are outside of the dungeon, finally. A shadow falls over the meadow, and you look up and see giant stones and pillars of fire falling from the sky. You realize that good and evil were telling the truth, and now the world will face its doom. As you look upon the burning world, you feel a small pang of guilt, but you know that you have sacrifed enough, and that even if the world had to burn, it was time for your day in the sun." . PHP_EOL . "The End" . PHP_EOL . "Congratulation! You got the Villain ending!" . PHP_EOL . "Enter the file name to play again!" . PHP_EOL;
$ending3 = "'I want nothing more than to spend the rest of my life with the people that I love...the two of you, Good and Evil!' You say. 'Oh, " . $name . ", we always hoped, but we didn't dare expect it!' Good and Evil say with tears in their eyes. 'Come with us, and we will face the world together!' You take the hands of Good and Evil in yours and the three of you walk into the distance. As the three of you walk deeper into the abyss, you don't know what awaits you. But you know that as long as the three of you are together, no adventure, no threat of danger is too daunting." . PHP_EOL . "The End" . PHP_EOL . "Congratulations! You got the True (plural) Love ending!" . PHP_EOL . "Enter the file name to play again!" . PHP_EOL;
$ending4 = "'I want to ban all books with any sexualized content in them!' You say with pride. Good and Evil look at each other, confused. 'Are...are you sure?' they ask. 'Yes, I'm sure! We need to protect our children!' You respond. You feel a rush of power, and somehow, you know that it has been done. You don't know what will become of the world or of you, but you know that no matter what, the children of the world will not grow up with any ideas that are different than yours." . PHP_EOL . "The End" . PHP_EOL . "Congratulations! You got the Soccer Mom ending!" . PHP_EOL . "Enter the file name to play again!" . PHP_EOL;

if ($finalanswer == preg_replace('#[^a-zA-Z0-9 ]#', '', strtolower("Become the wizard"))) {
	echo $ending1;
	die();
} else if ($finalanswer == preg_replace('#[^a-zA-Z0-9 ]#', '', strtolower("Escape the dungeon"))) {
	echo $ending2;
	die();
} else if ($finalanswer == preg_replace('#[^a-zA-Z0-9 ]#', '', strtolower("Love"))) {
	echo $ending3;
	die();
} else if ($finalanswer == preg_replace('#[^a-zA-Z0-9 ]#', '', strtolower("Ban books with mature content"))) {
	echo $ending4;
	die();
} else {
	echo $incorrect;
	die();
}
?>