<!--

-O modelo morcego preto possui motor 1.0 aspirado, consome um litro 
de gasolina a cada 16km e o aluguel era de $300.

-modelo vampiro voador, possui motor 2.0 
aspirado, consome um litro de gasolina a cada 11km e o valor do aluguel é de $500.

- A distância entre Gotham City e Metrópolis é de 295Km. 

-Sendo assim, desenvolva um programa que informe 
quanto o Sr. Wayne gastou locando o veículo e viajando até Gotham City. Para a atividade,
considerar o preço da gasolina igual a $0,75.

-->

<?php

    $morcego = (295/16)*0.75+300;
    $vampiro = (295/11)*0.75+500;
    echo "Usando o medelo (Morcego Preto) o senhor Wayne irá gastar: ".number_format($morcego,2,"."," ");
    echo "<br>";
    echo "Usando o medelo (Vampiro Voador) o senhor Wayne irá gastar:".number_format($vampiro,2,"."," ");


?>
