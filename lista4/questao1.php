<?php

//9 – Exiba a soma dos primeiros 50 termos de S
//S = 2 – 4 + 6 – 8 + 10

$soma = 0;

for ($i=1; $i < 11; $i++) { 
    if($i % 2 == 0 && $i % 2 == 0){
        $soma += $i;
    }
    elseif ($i % 2 == 0 && $i % 4 == 0) {
        $soma -= $i;
    }
}

echo "Soma dos numeros: ${soma}";

?>