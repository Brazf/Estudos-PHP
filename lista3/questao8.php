<?php
    echo "Batalha do Comilão";

    $loki  = rand(1, 100);
    $volstagg = rand(1,100);

    if($loki > $volstagg){
        echo "Loki vençeu a batalha do comilão";
    }
    else{
        echo "Volstagg vençeu a batalha do comilão";
    }

    
    echo "Batalha das Flechas";

    $distanciaLoki = 0;
    $distanciaFrandal = 0;

    for ($i=0; $i < 10; $i++) { 
        $distanciaFrandal = rand(1, 60);    
        $distanciaLoki = rand(1, 60);        
    }
    
    if($loki > $volstagg){
        echo "Volstagg vençeu a batalha das Flechas";
    }
    else{
        echo "Loki vençeu a batalha das Flechas";
    }

    echo "Batalha do Polegar";

    $polegarLoki = 1;
    $polegarHogun = 2;
    $resultado = rand(1, 2);

    if($resultado == 1){
        echo "Loki vençeu a Batalha do Pelegar";
    }
    else{
        echo "Hogun vençeu a Batalha do Pelegar";
    }

    

?>