<?php

    $n = $_POST['numero'];
    $txt = "Tabuada do $n \n";

    for ($i = 1; $i <= 10; $i++) 
        $txt .= "$i x $n = " . ($i * $n) . " \n";

    file_put_contents("tabuada.txt", $txt);
    
    echo "<pre>$txt</pre>";
 
?>    