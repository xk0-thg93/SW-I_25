<?php
    $email = $_POST['email'];
    $senha = $_POST['senha'];

    if ($email == 'thiagossantos752@gmail.com' && $senha == '1234'){
        $nome = "Thiago";
        header('Location: privada.php?nome='.$nome);
    } else {
        header('Location: erro.php');
    }
?>
