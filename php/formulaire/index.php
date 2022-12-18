<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaire</title>
</head>
<body>
    <form action="php/submit-contact.php" method="POST">
        <label for="prenom">Prénom</label>
        <input type="text" id="prenom" name="prenom" placeholder="sacha" required>
        <label for="nom">Nom</label>
        <input type="text" id="nom" name="nom" placeholder="Guignard" required>
        <label for="email">Email</label>
        <input type="email" id="email" name="email" placeholder="sacha.guignard@gmail.fr" required>
        <label for="commentaire">Commentaire</label>
        <input type="text" id="commentaire" name="commentaire" placeholder="ce que vous voulez faire parvenir" required>
        <button type="submit" >Envoyer</button>
    </form>
</body>
</html>