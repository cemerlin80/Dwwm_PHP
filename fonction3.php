<?php

function Test() { 
    static $a=0; 
    echo $a."<br>"; 
    $a++; 
} 
  
 // Appel de la fonction (2 fois)
 Test(); 
 Test(); 