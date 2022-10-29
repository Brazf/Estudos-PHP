<?php
    $frase  = $_POST['frase'];
    $quatd_letras = 0;
    for($i = 0; $i < strlen($frase); $i++){
        if($frase[$i] == "a" or $frase[$i] == "e" or $frase[$i] == "i" or $frase[$i] == "o" or $frase[$i] == "u"){  
            $quatd_letras ++;
        }
    }

    echo "Quantidade de vogais: ".$quatd_letras;

?>