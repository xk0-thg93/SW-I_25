<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exemlo 03 - php</title>
</head>
<body>
    <?php
        $nome = "Thiago"
    ?>
    <p>OI meu  nome é <?php echo "$nome";?></p>
    <p>OI meu  nome é <?php echo $nome;?></p>
    <p><?php echo "OI meu nome é " . $nome;?><p>
</body>
</html>