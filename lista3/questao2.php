<!--
    2 - Segundo o site https://www.todamateria.com.br, potenciação é a operação matemática 
utilizada para escrever de forma resumida números muito grandes, onde é feita a multiplicação 
de n fatores iguais que se repetem. Em outras palavras, para se calcular a potência, multiplica-se o valor da base por ela mesmo a quantidade de vezes definida no expoente. Linguagens de 
programação realizam essa operação com o auxílio do operador **. No entanto, se 
imaginarmos que esse operador não existe. Como podemos calcular a potência de um número? 
Vamos tentar? Faça um programa que leia a base e o expoente de uma potência e exiba o 
resultado da mesma. 

--> 

<?php

    $base = $_POST['base'];
    $expoente = $_POST['expoente'];
    $resultado = $base;
    
    for($i = 0; $i < $expoente-1; $i++){
        $resultado = $resultado * $base; 
    }

    echo "Resultado da potenciação: $resultado";

?>