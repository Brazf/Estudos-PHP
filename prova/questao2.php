<?php

    
    $vetorA = array();
    $vetorB = array();

    /* RANDOM */
    for($i = 0; $i < 10; $i++){
        $vetorA[$i] = rand(1, 20);
        $vetorB[$i] = rand(1, 20);
    }
    
    /* VETOR A */

    echo "Vetor A: ";
    for($i = 0; $i < count($vetorA); $i++){
        if($vetorA[$i] < 10){
            echo "0".$vetorA[$i]."|";
        }else {
            echo $vetorA[$i]."|";
        }
    }

    echo "</br>";
    
    /*  VETOR B */

    echo "Vetor B: ";
    for($i = 0; $i < count($vetorB); $i++){
        if($vetorB[$i] < 10){
            echo "0".$vetorB[$i]."|";
        }else {
            echo $vetorB[$i]."|";
        }
    }
    
    /* FUNÇÃO ORDENAR */
    function bubbleSort1(&$arr1){
        $n1 = sizeof($arr1);
        for($i1 = 0; $i1 < $n1; $i1++){
            for ($j1 = 0; $j1 < $n1 - $i1 - 1; $j1++){
                if ($arr1[$j1] > $arr1[$j1+1]){
                    $t1 = $arr1[$j1];
                    $arr1[$j1] = $arr1[$j1+1];
                    $arr1[$j1+1] = $t1;
                }
            }
        }
    }
    
    /* INTERSECÇÃO DOS VETORES */
    echo "</br>";
    echo "Intersecção dos Vetores: ";
    for($a = 0; $a < count($vetorA); $a++){
        for($b = 0; $b < count($vetorB); $b++){
            if($vetorA[$a] == $vetorB[$b]){
                echo $vetorA[$a]."|";
                $a ++;
            }
        }
    }


    /* UNIÃO DOS VETORES */
    echo "</br>";
    echo "União dos Vetores: ";
    for($i = 0; $i < count($vetorA); $i++){
        if($vetorA[$i] == $vetorB[$i]){
            echo $vetorA[$i]."|";
        }else{
            echo $vetorA[$i]."|";
            echo $vetorB[$i]."|";
        }
    }


    /* VETOR A ORDENADO*/
    echo "</br>";
    $len1 = sizeof($vetorA);
    bubbleSort1($vetorA);
    echo "Vetor A ordenado : \n";
    for ($i1 = 0; $i1 < $len1; $i1++){
        if($vetorA[$i1] < 10){
            echo "0".$vetorA[$i1]."|";
        }else {
            echo $vetorA[$i1]."|";
        }
    }

    /* VETOR B ORDENADO*/
    echo "</br>";
    $len1 = sizeof($vetorB);
    bubbleSort1($vetorB);
    echo "Vetor A ordenado : \n";
    for ($i1 = 0; $i1 < $len1; $i1++){
        if($vetorB[$i1] < 10){
            echo "0".$vetorB[$i1]."|";
        }else {
            echo $vetorB[$i1]."|";
        }
    }


    
    /* CONTIDO VETORES */
    echo "</br>";
    echo "Contido Vetores: ";
    $contidoA = 0;
    $contidoB = 0;
    for($a = 0; $a < count($vetorA); $a++){
        for($b = 0; $b < count($vetorB); $b++){
            if($vetorA[$a] == $vetorB[$b]){
                echo $vetorA[$a]."|";
                $contidoA ++;
                $a ++;
            }
            if($vetorB[$a] == $vetorA[$b]){
                echo $vetorB[$a]."|";
                $contidoB ++;
                $a ++;
            }
        }
    }

    echo "</br>";
    if($contidoA > $contidoB){
        echo "Vetor B está contido em Vetor A";
    }else{
        echo "Vetor A está contido em Vetor B";
    }

?>