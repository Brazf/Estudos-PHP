<?php

    $adicao = fopen("veiculos.txt", "a");

    fwrite($adicao, "Eu estou ficando bom nisso!");

    fclose($adicao);


?>