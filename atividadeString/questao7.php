<?php
    $frase = $_POST['frase'];
    for($i = 0; $i < strlen($frase); $i++){
        if($frase[$i] == "a" or $frase[$i] == "e" or $frase[$i] == "i" or $frase[$i] == "o" or $frase[$i] == "u"){
            echo "<span style='color: red;'>$frase[$i]</span>";
        }else{
            echo $frase[$i];
        }
    }
?>