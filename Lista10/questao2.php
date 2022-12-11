<!-- 

2 - Fazer um programa que
Gere 10 valores inteiros positivos aleatórios entre 1 e 30.
Exiba o fatorial de cada valor gerado.

-->

<?php

    $fatorial = 1;
    for ($i=0; $i < 10; $i++) { 
        $num_aletario = rand(1,30);
        for ($a = 1; $a <= $num_aletario; $a++) { 
            $fatorial *= $a;
        };
        echo "Valor do fatorial de ${num_aletario} = ${fatorial}<br>";
        $fatorial = 1;
    };

?>

