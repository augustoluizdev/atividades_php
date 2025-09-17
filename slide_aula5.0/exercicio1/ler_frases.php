<?php

$arquivo = "frases.txt";

$conteudo = file_get_contents($arquivo);
    
    echo "<h3>Conteúdo do arquivo:</h3>";
    echo "$conteudo";

?>