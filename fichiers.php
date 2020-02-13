<?php


$fp = fopen("essai.txt", "a"); 
 
fputs($fp, "ligne1\n"); 
fputs($fp, "ligne2\n"); 
fputs($fp, "ligne3\n"); 
 
fclose($fp); 


// $tableau = file("essai.txt");

// foreach ($tableau as $ligne) {
//     echo $ligne . "<br>";
// }

echo nl2br(file_get_contents("essai.txt"));



//print_r($tableau);