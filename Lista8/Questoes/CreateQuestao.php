<!--

1 – Uma rede de aluguel de automóveis lhe contratou para desenvolver um sistema para
controle de combustível. Existem duas categorias de veículos. O luxo e econômico. Cada
categoria tem dois tipos de veículos (A e B). Veículo luxo tipo A consome 1 litros de
gasolina a cada 8 KM, veículo luxo tipo B consome 1 litro de gasolina a cada 10Km,
veículos econômicos do tipo A consomem 1 litro de gasolina a cada 15km e veículos
econômicos do tipo B consomem 1 litros de gasolina a cada 18Km. Faça um programa
que:
a - Gere um arquivo txt onde cada linha será preenchida de forma aleatória, com as
seguintes informações: Tipo do veículo e Número de Km percorrido pelo veículo.
Exemplo:

1;234
3;321
1;10
Onde:

I - Tipo de veículo
1 - Para veículo luxo tipo A
2 - Para veículo luxo tipo B
3 - Para veículo econômico tipo A
4 - para veículo econômico tipo B

II - Quilômetro percorrido
O valor da quilometragem poderá variar entre 0 e 500km.


b - Leia o arquivo txt gerado. Onde cada linha contém apenas um veículo e a
quilometragem percorrida pelo mesmo.
c - Informe quanto de combustível foi gasto pelo veículo.
d - Informe quanto de combustível foi gasto no total.
e - Só é considerado que o veículo foi locado se a quilometragem for superior a 0. Sendo
assim, informe quantos veículos foram locados

-->

<?php

    /*a - Gere um arquivo txt onde cada linha será preenchida de forma aleatória, com as
    seguintes informações: Tipo do veículo e Número de Km percorrido pelo veículo.*/

    $veiculos = fopen("veiculos.txt", "w");

    for ($i=0; $i < 10; $i++) {
        $tipoVeiculo = rand(1, 4);
        $km = rand(0, 500);
        fwrite($veiculos, "$tipoVeiculo;$km \r\n");
    }

    fclose($veiculos);

    /*b - Leia o arquivo txt gerado. Onde cada linha contém apenas um veículo e a
    quilometragem percorrida pelo mesmo.*/
    echo "<br>Leia o arquivo txt gerado. Onde cada linha contém apenas um veículo e a
    quilometragem percorrida pelo mesmo.<br>";

    $leitura = fopen("veiculos.txt", "r");

    while(!feof ($leitura)){
        $linha = fgets($leitura);
        echo "$linha<br>";
    }

    fclose($leitura);

    /* c - Informe quanto de combustível foi gasto pelo veículo. */

    echo "<br>Informe quanto de combustível foi gasto pelo veículo<br>";
    $leitura = fopen("veiculos.txt", "r");

    while(!feof ($leitura)){
        $linha = fgets($leitura);
        if(substr($linha, 0, 1) == 1){
            $trajeto = substr($linha, 2);
            $gasto = $trajeto/8;
            echo "Este Veículo tipo 1 gastou: $gasto litros<br>";
        }
        elseif(substr($linha, 0, 1) == 2){
            $trajeto = substr($linha, 2);
            $gasto = $trajeto/8;
            echo "Este Veículo tipo 2 gastou: $gasto litros<br>";
        }
        elseif (substr($linha, 0, 1) == 3) {
            $trajeto = substr($linha, 2);
            $gasto = $trajeto/8;
            echo "Este Veículo tipo 3 gastou: $gasto litros<br>";
        }
        elseif (substr($linha, 0, 1) == 4){
            $trajeto = substr($linha, 2);
            $gasto = $trajeto/8;
            echo "Este Veículo tipo 4 gastou: $gasto litros<br>";
        };
    }

    fclose($leitura);

    /*d - Informe quanto de combustível foi gasto no total.*/


    $gastototal = 0;

    $leitura = fopen("veiculos.txt", "r");

    echo "<br>Informe quanto de combustível foi gasto no total<br>";

    while(!feof ($leitura)){
        $linha = fgets($leitura);
        if(substr($linha, 0, 1) == 1){
            $gastototal += substr($linha, 2);
        }
        elseif(substr($linha, 0, 1) == 2){
            $gastototal += substr($linha, 2);
        }
        elseif (substr($linha, 0, 1) == 3) {
            $gastototal += substr($linha, 2);
        }
        elseif (substr($linha, 0, 1) == 4){
            $gastototal += substr($linha, 2);
        };
    }

    fclose($leitura);

    echo "Total de combustivel gasto:".$gastototal;

    /*e - Só é considerado que o veículo foi locado se a quilometragem for superior a 0. Sendo
    assim, informe quantos veículos foram locados.*/

    echo "<br><br>Só é considerado que o veículo foi locado se a quilometragem for superior a 0. Sendo
    assim, informe quantos veículos foram locados.<br>";

    $qantVeiculos = 0;

    $leitura = fopen("veiculos.txt", "r");

    echo "<br>Informe quanto de combustível foi gasto no total<br>";

    while(!feof ($leitura)){
        $linha = fgets($leitura);
        if(substr($linha, 2) > 0){
            $qantVeiculos++;
        }
    }

    fclose($leitura);

    echo "Quantidade veículos alocados: ".$qantVeiculos;

?>