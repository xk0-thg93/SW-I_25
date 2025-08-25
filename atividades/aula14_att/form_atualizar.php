<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
</head>
<body>
    <?php
        include_once 'pedaco.php';
        include_once 'conexao.php';

        $id=$_GET['id']
    ?>
    <h2>Formulário para atualização de livro</h2>
    <div class="container">
        <form action="#" method="POST">

        <?PHP
        $sql = "SELECT * FROM livros WHERE id =$id";
        $stmt = $pdo->query($sql);
        while ($livro = $stmt->fetch(PDO::FETCH_ASSOC)) {

            echo "Título:" . $livro['titulo'] . "<br>";
            echo "Gênero:" . $livro['genero'] . "<br>";
            echo "Autor:" . $livro['autor'] . "<br>";
            echo "Ano:" . $livro['ano'] . "<br>";
            echo "Páginas:" . $livro['paginas'] . "<br><br>";
        }
        ?>
        <div class="mb-3">

            <input type="text" value=
            "
            <?php
                echo $livro['id'];
            ?>
            "
             name="titulo" class="form-control">
        </div>
       
        <div class="mb-3">
            <input type="text" name="genero" class="form-control">
        </div>

        <div class="mb-3">
            <input  type="text" name="autor" class="form-control">
        </div>
       
        <div class="mb-3">
            <input type="text" name="ano" class="form-control">
        </div>
        
        <div class="mb-3">
            <input type="text" name="paginas" class="form-control">
        </div>
       
        <button type="submit" class="btn btn-primary">ATUALIZAR LIVRO</button>
        </form>
        <a class="btn btn-danger"href="index.php" type="button" class="btn btn-primary">Voltar</a>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js" integrity="sha384-ndDqU0Gzau9qJ1lfW4pNLlhNTkCfHzAVBReH9diLvGRem5+R9g2FzA8ZGN954O5Q" crossorigin="anonymous"></script>
</body>
</html>