<?php
    $name = $_GET['nome'];
    $n1 = $_GET['nota1'];
    $n2 = $_GET['nota2'];
    $n3 = $_GET['nota3'];

    if (is_numeric($n1) && is_numeric($n2) && is_numeric($n3)){
        $soma = $n1+$n2+$n3;
        $media = $soma/3;
        echo("A média das 3 notas é: " . $media);
    }else{
        echo "Nem todas as notas são valores numéricos";
    }
?>