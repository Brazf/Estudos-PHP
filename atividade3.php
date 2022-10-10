<?php


    echo '<table border="1">';
        echo '<tr>';
            echo '<td>';
                echo 'oi';
            echo '<td>';
        echo '</tr>';
    echo '</table>';

    echo "</br>";
    echo "</br>";
    echo "</br>";

    for($a = 1; $a <= 100; $a++){
        if($a < 10){
            echo "0$a", " ";
        } else {
            echo $a, " ";
        }
        
        if($a % 10 == 0){
            echo "</br>";
        }
    }
   

?>