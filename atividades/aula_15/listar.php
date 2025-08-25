<?php
    require 'conexao.php';
    $sql = "SELECT * FROM biblioteca";
    $stmt = $pdo->query($sql);
    while ($blibioteca = $stmt->fetch(PDO::FETCH_ASSOC)) {
        echo "ID: " . $blibioteca['id_livro'] . "<br>";
        echo "titulo: " . $blibioteca['titulo'] . "<br>";
        echo "genero: " . $blibioteca['genero'] . "<br>";
        echo "ano: " . $blibioteca['ano'] . "<br>";
        echo "autor: " . $blibioteca['autor'] . "<br>";
        echo "paginas: " . $blibioteca['paginas'] . "<br>";
    }
?>

<!-- titulo
genero
ano
autor
paginas -->