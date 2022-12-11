<!--
2 - Fazer um programa que
Gere 10 valores inteiros positivos aleatórios entre 1 e 30.
Exiba o fatorial de cada valor gerado.
-->

<!-- 
1 - Fazer um programa que
Crie uma função que receba como parâmetro de entrada a base e o expoente de uma potência. 
Leia a base e o expoente de N potências e informe o resultado das mesmas.
-->

<?php

echo    "<form action='questao2.php' method='post'>
            Digite o valor da base:
                <input type='text' name='base'>
            Digite o valor da expoente:
                input type='text' name='expoente'>
                <input type='submit' value='Calcular'>
        </form>";

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