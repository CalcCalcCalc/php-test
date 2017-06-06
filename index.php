<?php

$family = array("Howard", "Beth", "Jim", "Christine");

foreach ($family as $key => $value) {

  $family[$key] = $value." Smith";

  echo $key." ".$value." </br>";
}

?>
