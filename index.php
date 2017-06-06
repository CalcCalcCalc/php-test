<!-- <p>Prime number validator</p> -->

<form method="post">

  <input name="name" type="text">

  <input name="password" type="text">

  <input type="submit" value="Go!">

</form>


<?php

  $users = array("Alex" => "abc123", "Jeff" => "xyz987");

  $name = $_POST["name"];
  $password = $_POST["password"];

  if ($_POST){
    foreach($users as $key => $value){
      if (($key == $name) && ($value == $password)){
        echo "<p>Welcome ".$name."</p>";
        return;
      }
    }
    echo "<p>Please enter a correct username an password</p>";
  }

?>
