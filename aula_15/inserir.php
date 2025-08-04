<?php
    require 'conexao.php';
    $titulo = "Harry Potter e a pedra filosofal";
    $genero = "Aventura";
    $ano = 2001-01-01;
    $autor = "J.K";
    $paginas = 147;
    $sql = "INSERT INTO biblioteca (titulo, genero, ano, autor, paginas) VALUES (:titulo, :genero, :ano, :autor, :paginas)";
    $stmt = $pdo->prepare($sql);
    $stmt->bindParam(':titulo', $titulo);
    $stmt->bindParam(':genero', $genero);
    $stmt->bindParam(':ano', $ano);
    $stmt->bindParam(':autor', $autor);
    $stmt->bindParam(':paginas', $paginas);
    if ($stmt->execute()) {
        echo "Livro inserido com sucesso!";
    } else {
        echo "Erro ao inserir livro.";
    }
?>

