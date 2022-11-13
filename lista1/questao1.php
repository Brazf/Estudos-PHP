<!--
1 - Faça um programa que leia a idade de uma pessoa e informe quantos segundos a 
mesma viveu. O valor em segundos será aproximado, visto que deverá considerar que 
todos os anos têm 365 dias e desprezar os meses vividos pela pessoa antes de fazer 
aniversário. Exemplo: Se uma pessoa completa 35 anos no dia 20/05/2021, significa que 
a mesma viveu aproximadamente 34 anos e 11 meses e 28 dias. No entanto, só será 
considerado 34 anos.
-->

<?php

    $idade = $_POST['idade'];
    $segundosVida = $idade * 31536000;

    echo "Segundos de vida: $segundosVida";
?>