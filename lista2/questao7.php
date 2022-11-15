<!--
7 – Triângulo é um polígono de três lados e três ângulos. Há sete tipos de triângulos e sua
classificação depende da disposição dos ângulos podendo ser: isósceles, equilátero, escaleno,
retângulo, obtuso, agudo ou equiângulo. Para uma figura geométrica ser considerada um
triângulo é necessário que a mesma possua três lados e que o valor de um lado isolado não seria
maior do que a soma dos outros dois lados. Ex: (Lado_a = 2, Lado_b = 3, Lado_c = 4) forma um
triângulo; . Ex2: (Lado_a = 12, Lado_b = 3, Lado_c = 4) não forma um triângulo; Faça um
programa que leia três valores inteiros. Informe se esses valores forma um triângulo. Caso
forme, informe que tipo de triângulo foi formado: isósceles, equilátero ou escaleno.
-->


<?php
    $lado1 = $_POST['lado1'];
    $lado2 = $_POST['lado2'];
    $lado3 = $_POST['lado3'];

    if(($lado1 + $lado2 > $lado3) && ($lado1 + $lado3 > $lado2) && ($lado2 + $lado3 > $lado1)){
        echo "Os valores passados formam uma triângulo: ";
        if(($lado1 == $lado2 and $lado1 == $lado3) or ($lado2 == $lado3 and $lado2 == $lado1)){
            echo "equilátero";
        }
        elseif(($lado1 == $lado2) or ($lado2 == $lado3) or ($lado1 == $lado3)){
            echo "isósceles";
        }
        else{
            echo "escaleno";
        }
    }
    else{
        echo "Os valores passados não formam uma triângulo.";
    }
?>