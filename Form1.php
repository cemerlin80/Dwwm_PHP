

<?php


if ( $_SERVER['REQUEST_METHOD'] == "POST") {
    $nom = $_POST["nom"];
    $prenom = $_POST["prenom"];
    $adresse = $_POST["adresse"];
    $CP = $_POST["CP"];
    $ville = $_POST["ville"];
    $mail = $_POST["mail"];
    $tel = $_POST["tel"];
    $liste = $_POST["liste"];
   // echo $_POST["secret"];
}
else {
    $nom="...";  // Aucun champ remplie
    $prenom="...";
    $adresse="...";
    $CP="...";
    $ville="...";
    $mail="...";
    $tel="...";
    $liste="...";
}

// Ajouter regex
// Ajouter un compteur

?>

Bonjour Mr :<?= $nom?>. <?= $prenom ?>.<br> 
Adresse : <?= $adresse?>.<br>
Code Postal : <?= $CP?>.<br>
Ville : <?= $ville?>.<br>
Votre adresse mail : <?= $mail?>.<br>  
Votre numéro de téléphone :<?= $tel?>.<br>
Votre liste :<?= $liste?>   














