<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EXERCÍCIO 01 - AULA 06</title>

    <style>
        table {
            border-collapse: collapse;
            width: 60%;
            margin: 20px auto;
        }
        td {
            border: 1px solid black;
            padding: 8px;
            text-align: center;
        }
    </style>

</head>
<body>
    <table>
    <?php
        for ($a = 1; $a <= 8; $a++) {
            if ($a % 2 == 0) {
                echo '<tr style="background-color: blue;">';
            } else {
                echo '<tr style="background-color: red;">';
            }
            for ($b = 1; $b <= 4; $b++) {
                echo "<td>Linha $a Coluna $b</td>";
            }
            echo "</tr>";
        }
    ?>
    </table>
</body>
</html>