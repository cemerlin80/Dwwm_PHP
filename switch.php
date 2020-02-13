<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <?php
        $a = 7; 
 
        switch ($a) { 
          case 0 : 
            echo '$a = 0'; 
            break; 
         
          case 1 : 
            echo '$a = 1'; 
            break; 
         
          case 2 : 
            echo '$a = 2'; 
            break; 

          default : 
            echo "$a n'est pas égale à 1,2 ou 3"; 
        } 

    ?>
</body>
</html>