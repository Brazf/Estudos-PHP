<!--
    10 – Exiba os 50 primeiros termos do somatório e o valor de S.
S = - 1 - 2 + 3 + 4 - 5 - 6 + 7 + 8 ...

-->

<?php

    $a = 1;
    $saida = 2;
    $subtracao = 0;
    $adicao = 0;
    $soma = 0;
    for($i = 0; $i < 25; $i++){
        for ($j = $a; $j <= $saida; $j++) { 
            if($i % 2 == 0){
                echo "- $j ";
                $subtracao = $j+($j-1);
            }
            elseif($i % 2 != 0){
                echo "+ $j ";
                $adicao = $j+($j-1);
            }
        }
        $soma -= $subtracao;
        $subtracao = 0;
        $soma += $adicao;
        $adicao = 0;
        $a += 2;
        $saida += 2;
    }

    echo "resultado do somatório: $soma";


?>