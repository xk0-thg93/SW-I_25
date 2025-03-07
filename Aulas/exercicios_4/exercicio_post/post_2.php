<?php
    $nome = $_POST["nome"];
    $email = $_POST["email"];
    $data = $_POST["nascimento"];
    $cartao = $_POST["cartaoescolhido"];
    $master = "MasterCard";
    $crefisa = "Crefisa";
    
    echo("Prezado(a) $nome <br>");
    echo("Seu e-mail é $email <br>");
    echo("Nasceu em $data <br>");
    if ($cartao == $master ){
        echo("O cartão selecionado foi: $master");
    }elseif ($cartao == $crefisa){
        echo("O cartão selecionado foi: $crefisa");
    }else{
        echo("Nenhum cartão foi selecionado");
    }
?>