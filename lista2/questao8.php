<!--


8 – Faça um programa que leia o tipo de figura geométrica (retângulo, triângulo ou círculo) e
informe a área da mesma. Obs: Cada figura tem uma forma específica para calcular a área. 


-->

<?php

    $escolha = $_POST['escolha'];
    $raio = $_POST['raio']; 
    $altura = $_POST['altura'];
    $base = $_POST['base'];
    $area_circulo = pi()*pow($raio, 2);
    
    switch ($escolha) {
        case '1':
            //A=b*h
            echo "A área do retângulo é: ".($base*$altura);
            break;

        case '2':
            //A=b*h/2
            echo "A área do triângulo é: ".($base*$altura/2);
            break;

        case '3':
            //A=pi*raio²
            echo "A área do círculo é: ".number_format($area_circulo, 2, ",");
            break;

        default:
            echo "<h3>Você digitou um valor não correspondente na escolha da forma geométrica!</h3>";
            break;
    }


?>