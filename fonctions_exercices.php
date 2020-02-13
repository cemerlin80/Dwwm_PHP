<?php

function lien($l, $t) {
    echo "<a href=\"${l}\">${t}</a>";
}

lien("http://www.lien.com/", "texte du lien");



function somme($t) {
    $total = 0;
    foreach ($t as $v) {
        $total += $v;
    }
    return $total;
}

$tab = array(4, 5, 2, 1);
echo somme($tab);


function complex_password($p) {
    if (preg_match("/\S{8,}/", $p) 
    && preg_match("/[A-Z]/", $p) 
    && preg_match("/[a-z]/", $p) 
    && preg_match("/[0-9]/", $p)) {
        return TRUE;
    }
    else {
        return FALSE;
    }
}

echo complex_password("Ad4")?"oui":"non";
echo complex_password("dfgDfgd9")?"oui":"non";
