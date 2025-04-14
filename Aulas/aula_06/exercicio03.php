<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EXERCÍCIOP - 03</title>

    <style>
        table, th, td {
            border: 1px solid black;
            border-collapse: collapse;
        }
        th, td {
            padding: 8px;
            text-align: center;
        }
    </style>
</head>
<body>
    <table>
        <tr>
            <th>Nome</th>
            <th>Preço</th>
            <th>Categoria</th>
        </tr>

    <?php
        $produtos = [
            ['nome' => 'Notebook Lenovo IdeaPad 3', 'preco' => 2899.90, 'categoria' => 'eletronicos'],
            ['nome' => 'Fone de Ouvido Bluetooth JBL Tune 510BT', 'preco' => 249.99, 'categoria' => 'eletronicos'],
            ['nome' => 'Geladeira Consul Frost Free Duplex', 'preco' => 2999.00, 'categoria' => 'eletrodomesticos'],
            ['nome' => 'Cama Box Casal com Baú Ortobom', 'preco' => 1299.00, 'categoria' => 'moveis']
        ];

        $cores = [
            'eletronicos' => 'rgba(103, 218, 99, 0.57)',
            'eletrodomesticos' => 'rgba(235, 83, 215, 0.68)',
            'moveis' => 'rgba(240, 103, 103, 0.7)'
        ];

        foreach ($produtos as $produto) {
            $cor = $cores[$produto['categoria']];
            echo "<tr style='background-color: $cor;'>";
            echo "<td>{$produto['nome']}</td>";
            echo "<td>R$ " . number_format($produto['preco'], 2, ',', '.') . "</td>";
            echo "<td>{$produto['categoria']}</td>";
            echo "</tr>";
        }
    ?>
    </table>

</body>
</html>