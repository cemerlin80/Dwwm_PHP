<?php

$mois = array(
    "Fevrier" => 28,
    "Mars" => 31,
    "Mai" => 31,
    "Janvier" => 31,
    "Avril" => 30
);

ksort($mois);

echo "<table border='1'>";
foreach ($mois as $key => $value) {
    echo "<tr>";
    echo "<td>$key</td>";
    echo "<td>$value</td>";
    echo "</tr>";
}
echo "</table>";

asort($mois);

echo "<table border='1'>";
foreach ($mois as $key => $value) {
    echo "<tr>";
    echo "<td>$key</td>";
    echo "<td>$value</td>";
    echo "</tr>";
}
echo "</table>";
