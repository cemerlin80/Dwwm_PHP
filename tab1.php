<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <pre>
    <?php
        //$tableau = array(); // instruction optionnelle
        $tableau[5] = "Pomme"; 
        $tableau[] = "Poire"; 
        $tableau[] = "Banane";
        $tableau[] = "Raisin";

        //$tableau = array("Pomme", "Poire", "Banane");

        //print_r($tableau);

        // for ($i=0; $i < count($tableau); $i++) { 
        //     echo $tableau[$i] . "<br>";
        // }

        foreach($tableau as $ligne) {
            echo $ligne . "<br>";
            if ($ligne == "Poire") break;
        }
    ?>
    </pre>
</body>
</html>