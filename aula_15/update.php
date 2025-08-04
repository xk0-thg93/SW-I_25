<?php
    require 'conexao.php';
    $id_livro = 0;
    $novoAutor = "J. K. Rowling";
    $sql = "UPDATE biblioteca SET autor = :autor WHERE id_livro = :id_livro";
    $stmt = $pdo->prepare($sql);
    $stmt->bindParam(':autor', $novoAutor);
    $stmt->bindParam(':id_livro', $id_livro);
    if ($stmt->execute()) {
        echo "Livro atualizado com sucesso!";
    } else {
        echo "Erro ao atualizar livro.";
    }
?>