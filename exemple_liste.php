<?php

    require("db.php");

    require("header.php");

    $discs = $db->query("select * from disc")->fetchAll(PDO::FETCH_OBJ);
?>

<table>
    <?php foreach($discs as $disc): ?>
        <tr>
            <td>
                <?= $disc->disc_title ?>
            </td>
        </tr>
    <?php endforeach; ?>
</table>




<?php
    require("footer.php");
?>