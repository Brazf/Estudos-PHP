<?php
// CRIAR AQUIVO

$txt = fopen("desenvolvimentoWeb.txt", "w");
// ADIÇÃO NO MOMENTO DA CRIAÇÃO
/*
$write = fwrite($txt, "Nome: Pedro CPF: 000000\r\n
Nome: Amanda CPF: 2222222222222222222222\r\n
Nome: Pedro CPF: 33333\r\n
Nome: Maria CPF: 123\r\n
Nome: Ricardo CPF: 456");
*/
fclose($txt);
echo "Arquivo criado <BR>";

?>