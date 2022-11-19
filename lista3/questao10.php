<!--
    10 – Exiba os 50 primeiros termos do somatório e o valor de S.
S = - 1 - 2 + 3 + 4 - 5 - 6 + 7 + 8 ...

-->

<?php

    for($i = 2; $i < 51; $i++){
        if($i % 2 == 0){
            echo "-$i";
        }
        else{
            echo "+$i";
        }
    }


?>