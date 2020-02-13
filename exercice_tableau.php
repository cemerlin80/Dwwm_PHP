<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <table border="1">
        <tr>
            <th></th>
            <?php for($c=0; $c<13; $c++): ?>
                <th >
                    <?= $c ?>
                </th>
            <?php endfor; ?>
        </tr>
        <?php for($l=0; $l<13; $l++): ?>
            <tr>
                <th><?= $l ?></th>
                <?php for($c=0; $c<13; $c++): ?>
                    <td>
                        <?= $l*$c ?>
                    </td>
                <?php endfor; ?>
            </tr>
        <?php endfor; ?>
    </table>
</body>
</html>