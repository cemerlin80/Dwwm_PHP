<pre>
<?php
    // $tab1["Somme"] = "Amiens"; 
    // $tab1["Nord"] =  "Lille";
    // $tab1["Oise"] = "Beauvais";

    $tab1 = array(
        "Somme" => "Amiens",
        "Nord" => "Lille",
        "Oise" => "Beauvais",

    );

    //echo $tab1["Oise"];

    foreach ($tab1 as $dep => $ville) {
        echo "$ville $dep <br>";
    }

    

    //print_r($tab1);

?>
</pre>