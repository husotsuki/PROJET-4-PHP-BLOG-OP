<?php
// Check des entrées du formulaire
if(empty($_POST['name'])      ||
   empty($_POST['email'])     ||
   empty($_POST['phone'])     ||
   empty($_POST['message'])   ||
   !filter_var($_POST['email'],FILTER_VALIDATE_EMAIL))
   {
   echo "No arguments Provided!";
   return false;
   }
   
$name = strip_tags(htmlspecialchars($_POST['name']));
$email_address = strip_tags(htmlspecialchars($_POST['email']));
$phone = strip_tags(htmlspecialchars($_POST['phone']));
$message = strip_tags(htmlspecialchars($_POST['message']));
   
// Creation du mail et envoi des données
$to = 'husotsuki@icloud.com'; 
$email_subject = "Formulaire de Contact P4:  $name";
$email_body = "Vous avez reçu un nouveau message depuis le formulaire de contact de votre site web.\n\n"."Voici les détails :\n\nNom: $name\n\nEmail: $email_address\n\nTelephone: $phone\n\nMessage:\n$message";
$headers = "de: noreply@yourdomain.com\n"; // Il s'agit de l'adresse e-mail à partir de laquelle le message généré sera envoyé. Recommandation d'utiliser quelque chose comme noreply@yourdomain.com.
mail($to,$email_subject,$email_body,$headers);
return true;         
?>
