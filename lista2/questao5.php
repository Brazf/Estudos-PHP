<!--

5 – Para uma eleição ser considerada válida é necessário que a soma dos votos de todos os 
candidatos seja superior a soma dos votos brancos e nulos. Na aldeia da folha, foi realizada a 
eleição do sexto Hokage. Nela os candidatos foram: Naruto Uzumaki, Sakura Haruno e Shin 
Aburame. Faça um programa que informe o vencedor da eleição se a mesma for considerada 
válida.

-->

<?php

    $naruto = 51;
    $sakura = 50;
    $aburame = 15;
    $brancos = 40;
    $nulos = 16;
    $votosValidos = $naruto+$sakura+$aburame;
    $votosInvalidos = $nulos + $brancos;


    if($votosValidos > $votosInvalidos){
        echo "A eleição foi válida!<br>";
        if($naruto > $sakura && $naruto > $aburame){
            echo "Naruto venceu a eleição";
        }
        elseif($sakura > $naruto && $sakura > $aburame){
            echo "Sakura venceu a eleição";
        }
        elseif($aburame > $sakura && $aburame > $naruto){
            echo "Aburame venceu a eleição";
        }
        else{
            echo "O resultado da eleição foi um empate.";
        }
    }
    else{
        echo "A eleição foi considerada inválida pois o número de votos inválidos foi superior.";
    }



?>