<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EXERCÍCIO - 02</title>

    <style>
        table {
            border-collapse: collapse;
            margin-top: 20px;
        }
        td {
            border: 1px solid black;
            padding: 8px;
            text-align: center;
        }
    </style>

</head>
<body>
    <h2>Vamos fazer uma tabela!</h2>
    <form method="POST">
    <p>Linhas: <input type="number" name="linha" min="1" required></p>
    <p>Colunas: <input type="number" name="coluna" min="1" required></p>
    <input type="submit" value="Gerar">
</form>

<?php
    $linha = $_POST["linha"];
    $coluna = $_POST["coluna"];

    echo "<h3> Tabela com $linha linhas e $coluna colunas: </h3>";
    echo "<table>";

    $a = 1;
    while ($a <= $linha) {
        echo "<tr>";
        $b = 1;
        while ($b <= $coluna) {
            echo "<td>L$a C$b</td>";
            $b++;
        }
        echo "</tr>";
        $a++;
    }

    echo "</table>";
?>
</body>
</html>