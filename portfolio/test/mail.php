<?php
if (isset($_POST['nom'], $_POST['email'], $_POST['sujet'], $_POST['message'])) {
  // Valide les données du formulaire
  $nom = trim($_POST['nom']);
  $email = trim($_POST['email']);
  $sujet = trim($_POST['sujet']);
  $message = trim($_POST['message']);
  $errors = [];
  if (empty($nom)) {
    $errors[] = "Le nom est obligatoire.";
  }
  if (empty($email) || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $errors[] = "L'adresse email est obligatoire et doit être valide.";
  }
  if (empty($sujet)) {
    $errors[] = "Le sujet est obligatoire.";
  }
  if (empty($message)) {
    $errors[] = "Le message est obligatoire.";
  }
  // Si il y a des erreurs, affiche-les et arrête le script
  if (!empty($errors)) {
    echo "Des erreurs se sont produites :<br>";
    foreach ($errors as $error) {
      echo " - $error<br>";
    }
    exit;
  }
  // Sinon, traite les données et envoie le mail
  $headers = "From: envoi@sachaguignard.fr\r\n";
  $headers .= "Reply-To: $nom <$email>\r\n";
  $success = mail('contacts@sachaguignard.fr', $sujet, $message, $headers);
  if ($success) {
    // Le mail a été envoyé avec succès
    echo "Merci pour votre message ! Nous vous répondrons dès que possible.";
  } else {
    // Une erreur s'est produite lors de l'envoi du mail
    echo "Une erreur s'est produite lors de l'envoi de votre message. Veuillez réessayer.";
  }
}
?>