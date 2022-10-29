<?php
    $frase = $_POST['frase'];
    $palavra1 = $_POST['palavra1'];
    $palavra2 = $_POST['palavra2'];
    $frase_nova = " ";
    $palavrateste = " ";
    $cont = 0; 
    for($i = 0; $i < strlen($frase); $i++){
        if($frase[$i] != " "){
            $palavrateste .= $frase[$i];
        }
        else{
            if($palavrateste == $palavra1){
                $
            }
            else{
                $palavrateste = "error!";
            }
        }
    }    
    
    echo $palavrateste;
    echo $frase_nova;        

?>
