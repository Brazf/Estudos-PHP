<?php

    $leitura = fopen("veiculos.txt", "r");

    while(!feof ($leitura)){

        $linha = fgets($leitura);
        echo "$linha<br>";

    }

    fclose($leitura);
    


?>