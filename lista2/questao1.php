<?php

    $num1 = $_POST['num1'];
    $num2 = $_POST['num2'];


    if($num2 % 2 == 0){
        echo "O número $num2 é par, portando a soma dos números é igual a:".$num1+$num2; 
    }
    else{
        echo "O número $num2 é ímpar, portando a multiplicação dos números é igual a:".$num1*$num2;
    }
    
?>