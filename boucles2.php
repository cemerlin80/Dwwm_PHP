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
        for ($a=1; $a<10; $a++) { 
            echo $a; 
        } 

        $a = 1; 
        while ($a < 10) { 
            echo $a; 
            $a++; 
        } 

        $a = 1; 
        do { 
            echo $a; 
            $a++;
        } while ($a < 10); 
    ?>
</body>
</html>