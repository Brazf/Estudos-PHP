<?php
    $frase = $_POST['frase'];

    for($i = strlen($frase)-1; $i >= 0; $i--){
        echo $frase[$i];
    }
?>