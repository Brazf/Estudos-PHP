<!--
    Desta forma, para auxiliar na construção do software 
compreende-se que 1flash = 300.000 Km/s. Faça um programa que gere aleatoriamente o valor,
em flash, de cada corredor. Informe quem venceu a corrida e a velocidade de cada corredor em 
Km/s

-->

<?php
    
    $flash = 300000;
    
    $JesseQuick = rand(1, 100)*$flash;
    $BarryAllen = rand(1, 100)*$flash;
    $WallyWest = rand(1, 100)*$flash;
    $DrWells = rand(1, 100)*$flash;
    $JayGarrick = rand(1, 100)*$flash;
    $MaxMercury = rand(1, 100)*$flash;

    if($JesseQuick > $BarryAllen and $JesseQuick > $WallyWest and $JesseQuick > $DrWells and $JesseQuick > $JayGarrick and $JesseQuick > $MaxMercury ){
        echo "Jesse Quick ganhou a corrida na velocidade: $JesseQuick km/s";
    }
    elseif($BarryAllen > $JesseQuick and $BarryAllen > $WallyWest and $BarryAllen > $DrWells and $BarryAllen > $JayGarrick and $BarryAllen > $MaxMercury){
        echo "Barry Allen Ganhou a corrida, na velocidade de: $BarryAllen km/s";
    }
    elseif($WallyWest > $JesseQuick and $WallyWest > $BarryAllen and $WallyWest > $DrWells and $WallyWest > $JayGarrick and $WallyWest > $MaxMercury){
        echo "Wally West ganhou a corrida, na velocidade de: $WallyWest km/s ";
    }
    elseif($DrWells > $JesseQuick and $DrWells > $BarryAllen and $DrWells > $WallyWest and $DrWells > $JayGarrick and $DrWells > $MaxMercury) {
        echo "Dr Wells ganhou a corrida na velocidade de: $DrWells km/s ";
    }
    elseif($JayGarrick > $JesseQuick and $JayGarrick > $BarryAllen and $JayGarrick > $WallyWest and $JayGarrick > $DrWells and $JayGarrick > $MaxMercury){
        echo "Jay Garrick ganhou a corrida na velocidade de: $JayGarrick km/s";
    }
    elseif($MaxMercury > $JesseQuick and $MaxMercury > $BarryAllen and $MaxMercury > $WallyWest and $MaxMercury > $DrWells and $MaxMercury > $JayGarrick){
        echo "Max Mercury ganhou a corrida na velocidade de: $MaxMercury km/s";
    }
    else{
        echo "Deu empate!";
    }
?>