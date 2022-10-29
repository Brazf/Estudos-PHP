<?php

        $soma = 0;
        $subtracao = 1;

        for($valor = 2; $valor <= 11; $valor++ ){
        
            $fatorial = 1;

            for($i=1; $i <= $valor; $i++){
                $fatorial *= $i;   
            }
            $soma += $fatorial - $subtracao;
            $subtracao ++;
        }

        
        echo $soma;
        echo "</br>";
        
?>