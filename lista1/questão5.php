<!-- 
5 - A fórmula que converte a temperatura medida em Fahrenheit para Celsius é:
°F = °C × 1, 8 + 32
Faça um programa que leia uma temperatura em Fahrenheit e informe o valor em Celsius
-->

<?php

    $fahrenheit = $_POST['temperatura'];
    $celsius = ($fahrenheit - 32) * 5/9;
    printf("Temperatura em Celsius: %1\$.2f", $celsius);

?>