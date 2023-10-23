<?php
require_once 'inc/init.php';
?>

<!DOCTYPE html>
<html>
<head>
    <title>Accueil</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.0/css/all.min.css">
</head>
<body>

    <div class="main-container">
    <div class="navbar-container">
            <div class="logo-container">
                <h1 class="logo">Coin Chaud</h1>
            </div>
            <h1 class="marquee-text">Bienvenue à la Boulangerie Coin Chaud</h1>

            <div class="menu-container">
                <ul class="menu">
                    <li><a href="menu.php">Menu</a></li>
                    <li><a href="horaire.php">Horaires</a></li>
                    <li><a href="contact.php">Contactez-nous</a></li>
                </ul>
            </div>
    </div>

    <div class="marquee">
        <div class="track">
            <span class="text-red">Bienvenue à la Boulangerie Coin Chaud</span>
        </div>
    </div>

    <img src="images/boulangerie1.jpeg" alt="Boulangerie Coin Chaud" class="hero-banner-image">

    <p>Nous sommes fiers de vous proposer une délicieuse variété de pains, viennoiseries et gâteaux à des prix IMBATTABLE. Venez nous rendre visite et régalez-vous avec nos produits.</p>

    <h2 class="products-heading">Nos Sections</h2>
    <ul>
        <li><a href="menu.php">Menu</a> - Découvrez notre délicieux assortiment de produits.</li>
        <li><a href="horaire.php">Horaires</a> - Consultez nos horaires d'ouverture.</li>
        <li><a href="contact.php">Contactez-nous</a> - Posez vos questions ou passez une commande.</li>
    </ul>


    <div class="footer-container">
        <div class="icons">
            <i class="fab fa-facebook"></i>
            <i class="fab fa-twitter"></i>
            <i class="fab fa-instagram"></i>
        </div>
        <p>&copy; 2023 Boulangerie Coin Chaud. Tous droits réservés.</p>
    </div>


</body>
</html>
