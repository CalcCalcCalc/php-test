<?php

  $emailto = "alecdsstone@gmail.com";

  $subject = "I hope this works!";

  $body = "I think you're awesome";

  $headers = "From: donotreply@herokuapp.com";

  if (mail($emailto, $subject, $body, $headers)){
    echo "The email was sent successfully!";
  } else {
    echo "The email could not be sent.";
  }

 ?>
