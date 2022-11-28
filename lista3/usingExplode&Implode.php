<?php

    echo "USO DO EXPLODE<br>";
    $pizza = "piece1 piece2 piece3 piece4 piece5 piece6";

    // EXPLODE TRANSFORMANDO A VARIÁVEL PIECES EM UM ARRAY BASEADO NA STRING VARIÁVEL PIZZA
    $pieces = explode(" ", $pizza);

    // USANDO FOR PARA EXIBICAÇÃO DO ARRAY CRIADO COM EXPLODE
    echo "<br>Usando for<br>";
    for ($i=0; $i < count($pieces); $i++) { 
        echo "$pieces[$i] <br>";
    }

    
    // USANDO FOREACH PARA EXIBICAÇÃO DO ARRAY CRIADO COM EXPLODE
    echo "<br>Usando foreach<br>";
    foreach ($pieces as $key => $value) {
        echo "$value<br>";
    }


    echo "<br>Teste SRTLEN e COUNT<br>";
    $nome = "Fabio";
    echo "Palavra usada no teste: ".$nome;
    // STRLEN CALCULA DO TAMANHO DA STRING ( IMPORTANTE NÃO USAR ACENTOS, POIS ELES INFLUENCIAM NO TAMANHO)
    echo "<br>tamanho usando strlen: ".strlen($nome);
    // COUNT CALCULA O TAMANHO DO ARRAY
    echo "<br>count não calcula o tamanho de uma string não ser que seja um array de string: NÃO FUNCIONA<br>"; 

    echo "<br>USO DO IMPLODE";

    // USANDO O IMPLODE NÓS TRANSFORMAMOS UM ARRAY EM UMA STRING SÓ
    echo "<br>";
    $usandoInclude = implode(',', $pieces);
    echo "<br>";
    echo "Usando Implode num array, ele retorna todos elementos dentro de uma String: ".$usandoInclude;
?>