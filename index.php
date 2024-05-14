<?php

    // ar votre adresse email
$to = "apoeydo@gmail.com";

    // Sujet de l'email
$subject = "Notification de consultation de la page";

// Corps du message
$message = "Quelqu'un vient de consulter votre page.";

// En-têtes de l'email
$headers = "From: noreply@votresite.com\r\n";
$headers .= "MIME-Version: 1.0\r\n";
$headers .= "Content-Type: text/html; charset=UTF-8\r\n";

// Envoyer l'email
if (mail($to, $subject, $message, $headers)) {
  echo "Email envoyé avec succès!";
} else {
  // Récupérer l'erreur
  $error = error_get_last();

  // Afficher le message d'erreur
  echo "Erreur lors de l'envoi de l'email: " . $error['message'];
}
                
    ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
   <h1>TEST DE LA FONCTION MAIL DE PHP</h1>
</body>
</html>