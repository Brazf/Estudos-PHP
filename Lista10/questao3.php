<!--
3 - Fazer um programa que
Leia 5 trios de valores inteiros positivos correspondentes aos lados de uma figura.
Informe quantos formam um triângulo e o tipo de triângulo formado

Obs Para que seja possível formar um triângulo é necessário que a soma de dois lados seja superior ao valor do terceiro lado.
-->


<?php
for ($i=0; $i < 3; $i++) {
    echo"    <form action='questao3.php' method='post'>
                Digite o valor do lado A:
                <input type='text' name='ladoA'>
                Digite o valor do lado B:
                <input type='text' name='ladoB'>
                Digite o valor do lado C:
                <input type='text' name='ladoC'>
                <input type='submit' value='Consultar'>
            </form>
        ";

    $ladoA  = $_POST['ladoA'];
    $ladoB  = $_POST['ladoB'];
    $ladoC  = $_POST['ladoC'];

    if (($ladoA + $ladoB > $ladoC) and ($ladoA + $ladoC > $ladoB) and ($ladoB + $ladoC > $ladoA) ) {
        echo "O números passados formam um triangulho: ";
        if( ($ladoA == $ladoB) and ($ladoA == $ladoC) and ($ladoC == $ladoB) ){
            echo "equilátero";
        }
        elseif (($ladoA == $ladoB) or ($ladoA == $ladoC) or ($ladoC == $ladoB) ) {
            echo "isósceles";
        }
        else{
            echo "escaleno";
        }
    }
    else{
        echo "O números passados não formam uma triangulo";
    }
}

?>