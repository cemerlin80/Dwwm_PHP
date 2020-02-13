<?php

// $sql = "insert into artist (artist_name) values ('" . $_POST["name"] . "');";

// echo "<pre>$sql</pre>";

// $db = new PDO("mysql:host=localhost;dbname=record;charset=utf8", "root", "root");
// $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

// $db->query($sql);


$sql = "insert into artist (artist_name) values (?);";

echo "<pre>$sql</pre>";

$db = new PDO("mysql:host=localhost;dbname=record;charset=utf8", "root", "root");
$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

$requete = $db->prepare($sql);
$requete->execute(array($_POST["name"]));


