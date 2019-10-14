<?php

function send_mail($email) {
  $from = "Email from $email";
  $to = $email;
  $subject = "Developer Appreciation Week";

  $body = "Hurray! Your cupcakes are on the way";

  $mailed = mail($to, $subject, $message, $from);

  if($mailed) {
    echo 'Mailed'
  }

}

 ?>
