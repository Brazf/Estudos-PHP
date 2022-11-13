<!--
3 - Ao comprar um determinando produto o cliente pagará 2% multiplicado pela 
quantidade de meses relacionado a divisão do pagamento. Exemplo: Produto para pagar 
em um mês: valor do produto + 2%; Produto para pagar em dois meses: valor do produto 
+ 4%; Produto para pagar em três meses: valor do produto + 6%;
Faça um programa que leia o valor do produto, o número de parcelas e informe o valor 
final a ser pago.
-->
<?php

    $valor = $_POST['valor'];
    $parcelas = $_POST['parcelas'];
    $valor_final;

    if($parcelas <= 0){
        echo "Valor à vista : R$ $valor";
    }
    elseif($parcelas == 1){
        $valor_final = $valor + $valor*0.02;
        echo "Valor final: R$ $valor_final";
    }
    else{
        $valor_final = $valor + $valor * ($parcelas*0.02);
        echo "Valor final: R$ $valor_final";
    }

    
?>