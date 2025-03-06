<?php
    $n1 = $_GET['num1'];
    $n2 = $_GET['num2'];
    $n3 = $_GET['num3'];

    if (($n1 >= $n2) && ($n1 >= $n2)){
        echo"O primeiro valor (".$n1.") é o maior da lista";
    }elseif (($n2 >= $n1) & ($n2 >= $n3)){
        echo"O segundo valor (".$n2.") é o maior da lista";
    }else{
        echo"O terceiro valor (".$n3.") é o maior da lista";
    }


?>