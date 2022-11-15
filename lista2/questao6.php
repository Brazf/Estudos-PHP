<!-- 


6 - O triângulo retângulo é uma figura geométrica formada por três lados. Ele possui um ângulo 
reto, cuja medida é de 90°, e dois ângulos agudos, menores que 90°. Pitágoras, que foi um 
filósofo, matemático, astrônomo e músico grego pré-socrático. Nasceu na ilha de Samos no ano 
aproximado de 570 a.C. e morreu, provavelmente, em 496 a.C.. Foi um exímio geômetra, 
deixando como principal contribuição para a Matemática a descoberta da relação de igualdade 
entre o quadrado da hipotenusa e a soma dos quadrados dos catetos no interior de um triângulo 
retângulo, o que ficou conhecido como teorema de Pitágoras. Sendo assim, utilizando o teorema 
de Pitágoras faça um programa que leia três valores inteiros e informe se foram um triângulo 
retângulo.

-->

<?php

    $cat1 = $_POST['cat1'];
    $cat2 = $_POST['cat2'];
    $hipo = $_POST['hipo'];

    if(pow($cat1, 2) + pow($cat2, 2) == pow($hipo,2)){
        echo "O valores passados são de um triângulo retângulo";
    }
    else{
        echo "Os valores passados não correspodem a um triângulo retângulo";
    }





?>