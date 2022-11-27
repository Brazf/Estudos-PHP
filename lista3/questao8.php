<?php

    $vitoriasLoki = 0;

    echo "Batalha do Comilão<br>";

    $loki  = rand(1, 100);
    $volstagg = rand(1,100);

    if($loki > $volstagg){
        echo "Loki vençeu a batalha do comilão<br>";
        $vitoriasLoki++;
    }
    else{
        echo "Volstagg vençeu a batalha do comilão<br>";
    }

    
    echo "<br>Batalha das Flechas<br>";

    $distanciaLoki = 0;
    $distanciaFrandal = 0;

    for ($i=0; $i < 10; $i++) { 
        $distanciaFrandal = rand(1, 60);    
        $distanciaLoki = rand(1, 60);        
    }
    
    if($loki > $volstagg){
        echo "Volstagg vençeu a batalha das Flechas<br>";
        $vitoriasLoki++;
    }
    else{
        echo "Loki vençeu a batalha das Flechas<br>";
    }

    echo "<br>Batalha do Polegar<br>";

    $polegarLoki = 1;
    $polegarHogun = 2;
    $resultado = rand(1, 2);

    if($resultado == 1){
        echo "Loki vençeu a Batalha do Pelegar<br>";
        $vitoriasLoki++;
    }
    else{
        echo "Hogun vençeu a Batalha do Pelegar<br>";
    }

    echo "<br>Batalha dos números Pares<br>";

    $PrimeroNumLoki = 0;
    $SegundoNumLoki = 0;

    $PrimeroNumValquiria = 0;
    $SegundoNumValquiria = 0;
    
    $contadorNumeros = 1;

    for($i=0; $i < $contadorNumeros; $i++) {

        // NÚMEROS DO LOKI
       $PrimeroNumLoki = rand(1,20);
       $SegundoNumLoki = rand(1,20);
       // NÚMEROS DE VALQUÍRIA
       $PrimeroNumValquiria = rand(1,20);
       $SegundoNumValquiria = rand(1,20);

       if(($PrimeroNumLoki == $SegundoNumLoki) && ($PrimeroNumLoki % 2 == 0)){
        echo "Loki Venceu a Batalha dos números Pares<br>";
        $vitoriasLoki++;
       }
       elseif (($PrimeroNumValquiria == $SegundoNumValquiria) && ($PrimeroNumValquiria % 2 == 0)) {
        echo "Valquíria Venceu a Batalha dos números Pares<br>";
       }
       else{
        $contadorNumeros++;
       }
    
    }   
       echo "<br>Batalha das Espadas<br>";

        $ataqueLoki =0;
        $pontosLoki = 0; 

        $ataqueSif =0;
        $pontosSif = 0;

        $contadorAtaques = 3;


    for ($i=0; $i < $contadorAtaques; $i++) { 
            $ataqueLoki = rand(1,20);
            $ataqueSif = rand(1,20);
            if($ataqueLoki > $ataqueSif){
                $pontosLoki++;
            }
            elseif ($ataqueLoki < $ataqueSif) {
                $pontosSif++;
            }
            else{
                $contadorAtaques++;
            }
        }

        if ($pontosLoki > $pontosSif) {
            echo "Loki venceu a Batalha das Espadas<br>";
            $vitoriasLoki++;
        }
        else{
            echo "Lady Sif venceu a Batalha das Espadas<br>";
        }

        
        // CONTAGEM DE VITÓRIAS

        echo "<br>O NOVO DEFENSOR DE ASGARD:<br>";

        if($vitoriasLoki >= 3){
            echo "<br>Loki venceu sem trapaça. Agora ele é o defensor de Asgard! <br>";
        }
        else{
            $vitoriasLoki++;
            echo "<br>Loki venceu, mas com trapaça. Agora ele é o defensor de Asgard!<br>";
        }
    

?>