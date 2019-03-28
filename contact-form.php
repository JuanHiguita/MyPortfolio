<?php

  $name = $_POST['name'];
  $email = $_POST['email'];
  $message = $_POST['message'];



  $email_from = 'juansehiguita@gmail.com';
  $email_subject = "New Work Contact";
  $email_body = "Contact name: $name.\n".
                "Contact email: $email.\n".
                "Contact Message: $message.\n";

  $to = "juansehiguita@gmail.com";

  $headers = "From: $email_from \r\n";
  $headers = "Reply-To: $email \r\n";

  mail($to, $email_subject, $email_body, $headers);

  header("Location: index.html");

?>
