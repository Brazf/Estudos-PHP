<?php

    // USANDO STR_REPLACE (USANDO PARA MODFICAR UMA STRING)
    echo "<br>USANDO STR_REPLACE (USANDO PARA MODFICAR UMA STRING)<br>";

    $domain = "www.americanas.com.br";
    echo "<br>Original:<br>";
    echo $domain;
    echo "<br>Modificado:<br>";
    echo str_replace("americanas", "lg", $domain);
    
    // USANDO O SUBSTR
    echo "<br>";
    echo "<br>USANDO O SUBSTR<br>";
    echo "<br>";
    
    echo "<br>Utilizando substr para pegar o dóminio:<br>";
    echo substr($domain, 0, 3);
    echo "<br>Utilizando substr para pegar o dóminio:<br>";
    echo substr($domain, 2);

    // USANDO O STRLEN
    echo "<br>";
    echo "<br>USANDO O STRLEN<br>";
    echo "<br>";

    echo "String: $domain<br>Tamaho:".strlen($domain);
?>