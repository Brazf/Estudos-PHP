<?php

    $num1 = $_POST['num1'];
    $num2 = $_POST['num2'];

    if($num1 < $num2){
        echo "O Número 1 é menor que o Número 2";
    }
    else{
        echo "O Número 2 é menor que o Número 1";
    }
?>