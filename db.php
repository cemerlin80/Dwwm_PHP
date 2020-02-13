<?php
try {
    $db = new PDO("mysql:host=localhost;dbname=record;charset=utf8", "root", "root");
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
catch(PDOException $er) {
    echo $er->getMessage();
}