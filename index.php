<?php

//declare an array inline
$myArray = array("alec", "kittens", "hooray");

//add elements to the end of an array with this
$myArray[] = "jumbles";

// print_r means print readable
print_r($myArray);

//select an element with square brackets
echo $myArray[1];

// declare an array element by element
$anotherArray[0] = "something";
$anotherArray[1] = "something else";

//this way, you can insert an element wherever you like
$anotherArray[6] = "something more";

//...and as whatever you like (easy key value pairs)
$anotherArray["myCatsname"] = "tibbles";
print_r($anotherArray);

//you can make an inline key-value array like this
$thirdArray = array(
  "France" => "French",
  "England" => "English",
  "Germany" => "German");

print_r($thirdArray);

//this shows us the length of the array
echo sizeof($thirdArray);

//remove elements using unset
unset($thirdArray["France"]);

print_r($thirdArray);

?>
