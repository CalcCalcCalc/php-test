<?php

//declare variables with "$"
$name = "Alec";

// call variables with "$variableName"
echo $name;

// variables are parsed inside strings
echo "</br><p>My name is $name</p>";

// Strings can be concatinated using "."
$string1 = "First string";
$string2 = "Second string";
echo "<p>".$string1.". ".$string2."</p>";

//calculation is simple
$myNumber = 42;
$calculation = $myNumber * 31 / 55 * 3;
echo "<p>The result of the calculation is ".$calculation."</p>";

//booleans are either 1 (true) or " " (false)
$trueBool = true;
$falseBool = false;
echo "<p>True looks like this: ".$trueBool.", and false looks like this: ".$falseBool."</p>";

//We can nest variables, but is not common
$nestedVariable = "name";
echo "<p>".$$nestedVariable"</p>;

?>
