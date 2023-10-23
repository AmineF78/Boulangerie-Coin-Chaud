<?php 
require_once 'inc/init.php'
?>

<!DOCTYPE html>
<html>
<head>
    <title>Contactez-nous</title>
    <link rel="stylesheet" type="text/css" href="style.css">

</head>
<body>
    <h1>Contactez-nous</h1>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Récupérez les données du formulaire
        $nom = $_POST["nom"];
        $email = $_POST["email"];
        $message = $_POST["message"];

        // Utilisez la fonction mail() ou un service tiers pour envoyer l'e-mail
        $destinataire = "aminefakhri84@gmail.com";  
        $sujet = "Nouveau message depuis le site web";
        $headers = "From: " . $email;

        mail($destinataire, $sujet, $message, $headers);

        // Affichez un message de confirmation
        echo "<p>Merci, votre message a été envoyé avec succès!Nous vous recontacterons dans un délai ne dépassant pas 24h.</p>";
    }
    ?>

    <form method="post" action="contact.php">
        <label for="nom">Nom :</label>
        <input type="text" name="nom" id="nom" required>

        <label for="email">Adresse e-mail :</label>
        <input type="email" name="email" id="email" required>

        <label for="message">Message :</label>
        <textarea name="message" id="message" required></textarea>

        <input type="submit" value="Envoyer">
    </form>
</body>
</html>
