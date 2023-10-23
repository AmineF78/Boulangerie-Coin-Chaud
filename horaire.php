<?php
require_once 'inc/init.php';
require_once 'inc/head.php';
?>

<!DOCTYPE html>
<html>
<head>
    <title>Horaires d'ouverture</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

    <div class="main-container">
        <div class="navbar-container">
            <h1 class="logo">Boulangerie Coin Chaud</h1>
            <button class="cart-icon">
                <i class="fas fa-shopping-cart"></i>
                <span class="cart-item-qty">0</span>
            </button>
        </div>
    </div>
    <div class="horaires-container">
    <h1 class="products-heading">Horaires d'ouverture</h1>
<div class="horaires-list">
    <?php
    $horaires = array(
        "Lundi" => "7h00 - 20h00",
        "Mardi" => "7h00 - 20h00",
        "Mercredi" => "7h00 - 20h00",
        "Jeudi" => "7h00 - 20h00",
        "Vendredi" => "7h00 - 20h00",
        "Samedi" => "7h00 - 20h00",
        "Dimanche" => "Fermé"
    );

    echo "<ul>";
    foreach ($horaires as $jour => $horaire) {
        echo "<li>$jour : $horaire</li>";
    }
    echo "</ul>";
    ?>
    </div>
    </div>
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
