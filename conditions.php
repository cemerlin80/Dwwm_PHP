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
        $a = -44;
        if ($a>0) {
            echo "positif";
        }
        else {
            echo "négatif";
        }
    ?>

    <?php if ($a>0) { ?>
        positif
    <?php } else { ?>
        négatif
    <?php } ?>

    <?php if ($a>0): ?>
        positif
    <?php else: ?>
        négatif
    <?php endif; ?>
</body>
</html>