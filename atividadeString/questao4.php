<?php
    $frase = $_POST['frase']." ";
    $palavra1 = $_POST['palavra1'];
    $palavra2 = $_POST['palavra2'];
    $fraseFinal = '';
    $nametemp = '';

    for($i = 0; $i < strlen($frase); $i++){
        if($frase[$i] != ' '){
            $nametemp .= $frase[$i];
        }
        else{
            if($nametemp == $palavra1){
                echo $palavra2;
                echo ' ';
                $nametemp = '';
            }
            else{
                echo $nametemp;
                echo ' ';
                $nametemp = '';
            }
        }
    }
?>
