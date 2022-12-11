<?php

    $arquivo = fopen("desenvolvimentoWeb.txt", "r");
    
    echo "<p>";
        while (!feof ($arquivo)) {
            $linhas = fgets($arquivo);
            echo "$linhas<br>";
        }
        fclose($arquivo);
    echo"</p>";

?>