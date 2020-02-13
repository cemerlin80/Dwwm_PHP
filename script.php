<?php
if ( $_SERVER['REQUEST_METHOD'] == "POST") {
    $nom = $_POST["nom"];
    $prenom = $_POST["prenom"];
    echo $_POST["secret"];
}
else {
    $nom="...";
    $renom="...";
}
?>


Bonjour <?= $nom?> <?= $prenom ?>