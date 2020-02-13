<?php
try {
    $db = new PDO("mysql:host=localhost;dbname=record;charset=utf8", "root", "root");
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
catch(PDOException $er) {
    echo $er->getMessage();

}

$param1 = $_GET["param1"];

$requete = $db->prepare("SELECT * FROM artist where artist_id>?");
$requete->execute(array($param1));

$tableau = $requete->fetchAll(PDO::FETCH_OBJ);

foreach($tableau as $ligne) {
    echo $ligne->artist_name . "<br>";
}
