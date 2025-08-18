<?php
    require 'conexao.php';
    $id = 2; 
    $novoAutor = "J. K. Rowling";
    $sql = "UPDATE loja SET autor = :autor WHERE id = :id";
    $stmt = $pdo->prepare($sql);
    $stmt->bindParam(':autor', $novoAutor);
    $stmt->bindParam(':id', $id);
    if ($stmt->execute()) {
        echo "Livro atualizado com sucesso!";
    } else {
        echo "Erro ao atualizar livro.";
    }
?>