<!--
5 – O gerente do estacionamento de um shopping deseja saber o lucro diário gerado pela parada 
de veículos. Ele informa que o estacionamento encontra-se com valores promocionais e por 
isso, não será cobrado taxa extra pelo tempo decorrido. Também foi informado que apenas três 
tipos de veículos serão taxados. Moto pagará R$4,00; carro pagará R$ 8,00 e ônibus pagará R$ 
20,00. Sabe-se que 400 veículos utilizaram o estacionamento do shopping. Informe o lucro ao 
final do dia.
-->


<?php

    $moto = 40*4.00;
    $carros = 60*8.00;
    $onibus = 300*20.00;
    $lucroDiario = $moto + $carros = $onibus;

    echo "Lucro diário:".number_format($lucroDiario, 2, ".");

?>