<?php
// Informations de connexion à la base de données
$serveur = "localhost";
$utilisateur = "root";
$motdepasse = "root";
$basededonnees = "Bdd-Boulangerie";

// Connexion à la base de données
$connexion = mysqli_connect($serveur, $utilisateur, $motdepasse, $basededonnees);

// Vérification de la connexion
if (!$connexion) {
    die("La connexion à la base de données a échoué : " . mysqli_connect_error());
}
?>
