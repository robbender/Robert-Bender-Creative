<?php
  $firstName = $_POST['firstName'];
  $lastName = $_POST['lastName'];
  $email = $_POST['email'];
  $message = $_POST['message'];

  $email_from = 'Robert Bender Creative';
  $email_subject = 'New Message from Robert Bender Creative Contact';
  $email_body = 'Name: $firstName.\n'.
                'Email: $email.\n'.
                'Message: $message.\n';

  $to = 'hello@robertbender.net';
  $headers = 'From: $email_from \r\n';
  $headers .='Reply-To: $email \r\n';

  mail($to,$email_subject,$email_body,$headers);

  header('location: index.html');
 ?>
