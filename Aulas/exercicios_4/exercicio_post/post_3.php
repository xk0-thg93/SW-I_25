<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $cor = $_POST["cor"];
    ?>
    <h2>QUal cor de fundo deseja?</h2>
    <form method="POST">
        <select name="cor">
            <option value="Blue"> Azul </option>
            <option value="Red"> Vermelho </option>
            <option value="Green"> Verde </option>
            <option value="Yellow"> Amarelo </option>
        </select>
        <input type="submit" value="Enviar">
    </form>
    <body style="background-color: <?php echo"$cor";?>">
</body>
</html>
    