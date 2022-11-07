<!--
2 - Uma pessoa adulta necessita beber dois litros de água por dia. Considerando que a 
pessoa chega à idade adulta quando completa 18 anos, faça um programa que leia a idade 
de uma pessoa e informe a quantidade de água que a mesma deveria ter tomado na idade 
adulta. Para essa atividade considere que o ano possuiu 365 dias.
-->
<?php

    $idade = $_POST['idade'];
    $agua = 0;

    if($idade < 18){
        echo "Você tem menos de 18 anos, quando for adulto volte aqui e receba uma carteirada!";
    }
    elseif($idade == 18){
        echo "Agora você é um adulto, precisa tomar 2 litros de água por dia num total de 730 litros de água por ano.";
    }
    else{
        $agua = ($idade - 18) * 730;
        echo "Você tem $idade anos, já deveria ter tomado $agua litros de água.";
    }    



?>