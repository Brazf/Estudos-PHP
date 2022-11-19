<!--
6 – Fazer um programa que gere 5 palpites para apostar na megasena
-->

<?php

    $numMegaSena = array();

    for ($i = 0; $i < 6 ; $i++) { 
        $numMegaSena[$i] = rand(1, 60); 
    }

    while($numMegaSena[0] == $numMegaSena[1] or $numMegaSena[0] == $numMegaSena[2] or $numMegaSena[0] == $numMegaSena[3] or $numMegaSena[0] == $numMegaSena[4] or $numMegaSena[0] == $numMegaSena[5]){
        $numMegaSena[0] = rand(1, 60);
    }
    while($numMegaSena[1] == $numMegaSena[0] or $numMegaSena[1] == $numMegaSena[2] or $numMegaSena[1] == $numMegaSena[3] or $numMegaSena[1] == $numMegaSena[4] or $numMegaSena[1] == $numMegaSena[5]){
        $numMegaSena[1] = rand(1, 60);
    }
    while($numMegaSena[2] == $numMegaSena[0] or $numMegaSena[2] == $numMegaSena[1] or $numMegaSena[2] == $numMegaSena[3] or $numMegaSena[2] == $numMegaSena[4] or $numMegaSena[2] == $numMegaSena[5]){
        $numMegaSena[2] = rand(1, 60);
    }
    while($numMegaSena[3] == $numMegaSena[1] or $numMegaSena[3] == $numMegaSena[2] or $numMegaSena[3] == $numMegaSena[0] or $numMegaSena[3] == $numMegaSena[4] or $numMegaSena[3] == $numMegaSena[5]){
        $numMegaSena[3] = rand(1, 60);
    }
    while($numMegaSena[4] == $numMegaSena[1] or $numMegaSena[4] == $numMegaSena[2] or $numMegaSena[4] == $numMegaSena[3] or $numMegaSena[4] == $numMegaSena[0] or $numMegaSena[4] == $numMegaSena[5]){
        $numMegaSena[4] = rand(1, 60);
    }
    while($numMegaSena[5] == $numMegaSena[1] or $numMegaSena[5] == $numMegaSena[2] or $numMegaSena[5] == $numMegaSena[3] or $numMegaSena[5] == $numMegaSena[4] or $numMegaSena[5] == $numMegaSena[0]){
        $numMegaSena[5] = rand(1, 60);
    }
    
    for ($i = 0; $i < count($numMegaSena) ; $i++) { 
        echo "$numMegaSena[$i],"; 
    }
?>