<?php
    $frase  = $_POST['frase'];
    $quatd_palavras = 1;
    for($i = 0; $i < strlen($frase); $i++){
        if($frase[$i] == " "){  
            $quatd_palavras ++;
        }
    }

    echo "Quantidade de palavras: ".$quatd_palavras;
?>