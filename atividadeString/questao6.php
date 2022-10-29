<?php
    $frase = $_POST['frase'];

    for($i = 0; $i < strlen($frase); $i++){
        echo "$frase[$i]<br>";
    }
?>