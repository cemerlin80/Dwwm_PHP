<?php

$departements = array(
    "Hauts-de-france" => array("Aisne", "Nord", "Oise", "Pas-de-Calais", "Somme"),
    "Bretagne" => array("Côtes d'Armor", "Finistère", "Ille-et-Vilaine", "Morbihan"),
    "Grand-Est" => array("Ardennes", "Aube", "Marne", "Haute-Marne", "Meurthe-et-Moselle", "Meuse", "Moselle", "Bas-Rhin", "Haut-Rhin", "Vosges"),
    "Normandie" => array("Calvados", "Eure", "Manche", "Orne", "Seine-Maritime")
);

ksort($departements);

echo "<table border='1'>";

foreach ($departements as $key => $value) {
    echo "<tr>";
    echo "<td>$key</td>";
    echo "<td>";
    sort($value);
    // foreach ($value as $ville) {
    //     echo $ville . "<br>";
    // }
    echo join("<br>", $value);
    echo "</td>";
    echo "<td>" . count($value) . "</td>";
    echo "</tr>";
}
echo "</table>";