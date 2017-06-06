<!-- <p>Prime number validator</p> -->

<form>

  <input name="number" type="text">

  <input type="submit" value="Go!">

</form>


<?php

  if ($_GET["number"] == false){
    echo "<p>Please enter a number.<p/>";
  } else {
    $num = $_GET["number"];
    $trueText = "<p>".$num." is prime.</p>";
    $falseText = "<p>".$num." is NOT prime.</p>";
    if ($num <= 1){
      echo $falseText;
      return;
    } elseif ($num <= 3){
      echo $trueText;
      return;
    } elseif (($num % 2 == 0) || ($num % 3 == 0)){
      echo $falseText;
      return;
    }
    $i = 5;
    while ($i * $i <= $num){
      if (($num % i == 0) || ($num % ($i + 2) == 0)){
        echo $falseText;
        return;
      }
      $i = $i + 6;
    }
    echo $trueText;

  }

 ?>
