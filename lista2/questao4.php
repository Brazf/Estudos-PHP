<!--

O Sr. Carlos é o melhor pedreiro de WAKANDA. Foi contratado por T’Challa para revestir o 
muro frontal que protege o castelo com placas de vibranium. As placas são no formato 
quadrangular possuindo 2m em cada lado. Já o muro é no formato retangular, possuindo 100m
de comprimento e 4m de altura. Faça um programa que informe quantas placas de vibranium 
serão necessárias para revestir o muro

-->
<?php

    $area_muro = 100*4;
    $area_placa = pow(2,2);

    echo "Área do muro: $area_muro m². <br>";
    echo "Área da placa: $area_placa m². <br>";

    echo "Total de placas necessárias: ".($area_muro/$area_placa); 

?>

