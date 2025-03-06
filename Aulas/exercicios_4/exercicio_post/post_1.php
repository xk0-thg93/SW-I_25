<?php
    $login = $_POST["login"];
    $senha = $_POST["senha"];
    $loginetec = "etec";
    $senhaetec = "informatica";

    if (($login === $loginetec) && ($senhaetec === $senha)){
        echo"Login está tudo nos conformes!";
    }else{
        echo"Ocorreu um erro  no login";
    }
?>