<!-- 
1 - Fazer um programa que
Crie uma função que receba como parâmetro de entrada a base e o expoente de uma potência. 
Leia a base e o expoente de N potências e informe o resultado das mesmas.
-->

<?php

$valor1 = $_POST['base'];
$valor2 = $_POST['expoente'];

function potencia ($base, $expoente) {
    
    $resultado = $base;

    for ($i=0; $i < $expoente-1; $i++) { 
        $resultado *= $base;
    }

    return $resultado;
};

echo potencia($valor1, $valor2);

?>