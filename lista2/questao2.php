<!--
    2 - Sabendo que a fórmula para calcular o peso ideal é:
➢ Para mulheres: (62.1 * altura) – 44.7;
➢ Para homens: (72.2 * altura) – 58;
Faça um programa que recebe o sexo e a altura de uma pessoa e informe o peso ideal
-->

<?php

    $peso = $_POST['peso'];
    $altura = $_POST['altura'];
    $sexo = $_POST['sexo'];

    if($sexo == 'm'){
        $ideal = (72.2 * $altura) - 58;
        echo "Seu peso ideal é : $ideal";
    }
    else{
        $ideal = (62.1 * $altura) - 58;
        echo "Seu peso ideal é : $ideal";
    }

?>