<?php
    $tab = file("liens.txt");

    foreach ($tab as $ligne) { ?>        
        <a href="<?= $ligne ?>"><?= $ligne ?></a><br>
    <?php } ?>


<hr>
<table border="1">
    <tr>
        <th>Surname</th> 
        <th>Firstname</th> 
        <th>Email</th> 
        <th>Phone</th> 
        <th>City</th> 
        <th>State</th>    
    </tr>
<?php

    $tab = file("http://bienvu.net/misc/customers.csv");

    foreach ($tab as $ligne) { 
        $t = explode(",", $ligne);    
    ?>        
        <tr>
            <td><?= $t[0] ?> </td>
            <td><?= $t[1] ?> </td>
            <td><?= $t[2] ?> </td>
            <td><?= $t[3] ?> </td>
            <td><?= $t[4] ?> </td>
            <td><?= $t[5] ?> </td>
        </tr>
    <?php } ?>
</table>