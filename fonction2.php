<?php

$message = "page .. démonstration";

 
function somme($a, $b) { 
    global $message;
    echo "<h2>$message</h2>";
    $c = $a + $b; 
    echo $c; 
} 

function soustraction($a, $b) { 
    global $message;
    echo "<h2>$message</h2>";
    $c = $a - $b; 
    echo $c; 
} 
 
somme(2, 2); 
soustraction(2, 2);