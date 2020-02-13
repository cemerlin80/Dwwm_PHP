<pre>
    <?php
        print_r($_POST);
    ?>
</pre>
<hr>
<pre>
    <?php
        print_r($_FILES);
    ?>
</pre>


<?php

move_uploaded_file($_FILES["fic1"]["tmp_name"], "./documents/" . $_FILES["fic1"]["name"]);

?>