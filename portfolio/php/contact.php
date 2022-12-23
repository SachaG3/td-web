<?php
// Inclure PHP Mailer
include_once '../vendor/autoload.php';
use PHPMailer\PHPMailer\PHPMailer;


// Récupérer les données du formulaire
$email = $_POST['email'];
$subject = $_POST['sujet'];
$message = $_POST['message'];

// Valider les données du formulaire (si nécessaire)
if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
  // Adresse e-mail non valide, afficher une erreur
  echo 'Adresse e-mail non valide';
  exit;
}
$contenu = file_get_contents('juipnb.txt');
// Créer un nouvel objet PHPMailer
$mail = new PHPMailer;

// Configurer les paramètres de connexion à votre serveur de messagerie
$mail->isSMTP();
$mail->Host = 'smtp.gmail.com';
$mail->SMTPAuth = true;
$mail->Username = 'sacha.guignard@sts-sio-caen.info';
$mail->Password = $contenu;
$mail->SMTPSecure = 'tls';
$mail->Port = 587;

// Configurer les paramètres de votre message
$mail->setFrom($email, 'Contact Form');
$mail->addAddress('contacts@sachaguignard.fr', 'Nom du destinataire');
$mail->addReplyTo($email, $nom);
$mail->Subject = $subject;
$mail->Body = $message;

// Envoyer le message
if(!$mail->send()) {
    echo 'Erreur lors de l\'envoi du message: ' . $mail->ErrorInfo;
} else {
    echo 'Message envoyé avec succès!';
}
