<!-- Levando esse conceito para o universo da DC Comic, foram criadas as terras paralelas. Essas 
ocupam o mesmo lugar no espaço, mas não se chocam por vibrarem em velocidades distintas. 
Sabe-se que essas vibrações são medidas utilizando a escala vibro. Escala essa, que é formada 
apenas por números inteiros. Sabe-se também que nenhuma terra vibra em valor inferior a 30 
vibro. Ciente dessa informação, Imperiex desejou criar mais três terras. Pediu que desenvolva 
um sistema para escolher três números interior e distintos. Superiores a 0 e inferiores a 30. 
-->


<?php

    $terra1 = rand(1, 30);
    $terra2 = rand(1, 30);
    $terra3 = rand(1, 30);

    while(($terra1 == $terra2) or ($terra1 == $terra3)) {
        $terra1 = rand(1, 30);
    }
    while(($terra2 == $terra1) or ($terra2 == $terra3)) {
        $terra2 = rand(1, 30);
    }
    while(($terra3 == $terra2) or ($terra3 == $terra1)) {
        $terra3 = rand(1, 30);
    }    

    echo "Terra 1: $terra1<br>";
    echo "Terra 2: $terra2<br>";
    echo "Terra 3: $terra3<br>";

?>