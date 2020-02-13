<?php

echo "Tu surfes sur le web en semaine plutôt le : "; 
 
$tab = $_POST["Fjour"];
foreach ($tab as $jour)      
{ 
    echo " $jour - "; 
}