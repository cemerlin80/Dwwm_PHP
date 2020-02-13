<?php
try {
    $db = new PDO("mysql:host=localhost;dbname=record;charset=utf8", "root", "root");
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
catch(PDOException $er) {
    echo $er->getMessage();

}


$requete = $db->query("SELECT * FROM artist limit 50;");

$tableau = $requete->fetchAll(PDO::FETCH_OBJ);

foreach($tableau as $ligne) {
    echo $ligne->artist_name;
}
