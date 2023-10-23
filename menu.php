<?php
require_once 'inc/init.php'

?>

<!DOCTYPE html>
<html>
<head>
    <title>Menu</title>
    <link rel="stylesheet" type="text/css" href="style.css">

</head>
<body>
    <h1>Menu</h1>

    <?php
    // Utilisez la connexion à la base de données depuis votre fichier init.php
    $sql = "SELECT description, nom FROM produits";
    $result = mysqli_query($connexion, $sql);

    // Initialisez le tableau du menu
    $menu = array();

    // Récupérez les produits de la base de données
    while ($row = mysqli_fetch_assoc($result)) {
        $description = $row['description'];
        $produit = $row['nom'];

        if (!isset($menu[$description])) {
            $menu[$description] = array();
        }

        $menu[$description][] = $produit;
    }

    // Affichez les catégories et les produits
    foreach ($menu as $description => $produits) {
        echo "<h2>$description</h2>";
        echo "<ul>";
        foreach ($produits as $produit) {
            echo "<li>$produit</li>";
        }
        echo "</ul>";
    }

   
    ?>

</body>
</html>
