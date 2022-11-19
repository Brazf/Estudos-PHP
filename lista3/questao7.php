<!--

7 – Fazer um programa que leia a média de 20 alunos e informe quando foram aprovados. Sabe-se que a nota mínima para aprovação será 7.

-->

<?php

    $notas = array();

    $notas[0] = $_POST['nota1'];
    $notas[1] = $_POST['nota2'];
    $notas[2] = $_POST['nota3'];
    $notas[3] = $_POST['nota4'];
    $notas[4] = $_POST['nota5'];

    $quantAlunosAprovados = 0;
    
    for ($i= 0; $i < count($notas); $i++) { 
        if($notas[$i] >= 7 ){
            $quantAlunosAprovados++;
        }
    }

    echo "Quantidade de alunos aprovados: ".$quantAlunosAprovados;
?>