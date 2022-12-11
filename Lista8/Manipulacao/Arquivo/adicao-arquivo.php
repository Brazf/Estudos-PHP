<?php
    $pessoa = $_POST["nome"];
    $documento = $_POST["cpf"];

    $open = fopen("desenvolvimentoWeb.txt", "a");
    $write = fwrite($open, "Nome: $pessoa, CPF: $documento \r\n");
    fclose($open);

    echo "Dados adicionado!";
?>