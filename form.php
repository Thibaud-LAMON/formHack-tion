<?php
if (isset($_POST['submit'])) {

    $email = $_POST['email'];

    $sujet = $_POST['sujet'];

    $to = "your-email-address@example.com";
    $subject = "formation : $sujet";
    $message = '
  Bonjour, \r
  
  je prend contact avec vous pour vous faire part de mon intérêt\r
  pour la formation "' . $sujet . '".\r
  Veuillez me répondre à l\'addresse suivante:' . $email . '.';
    $headers = "De : $email";

    mail($to, $subject, $message, $headers);
    header("Location: index.html");
}
