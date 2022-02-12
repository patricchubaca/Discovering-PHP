<?php
    require_once "ConexaoBD/Conexao.php"; 
    require_once "Controller.php";

    $artigo = new Artigo($mysql);
    $artigos = $artigo->encontrarPorId($_GET['id']);


echo "<pre>";
var_dump($artigos);
echo "</pre>";
file_put_contents('/tmp/debugPatric', date('H:i:s').print_r($artigos, 1)."\n", FILE_APPEND);
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <link rel="stylesheet" type="text/css" href="../style.css">
    <meta charset="UTF-8">
    <title>Adicionar Artigo</title>
</head>

<body>
    <div id="container">
        <h1> <?php echo $artigos['titulo']; ?></h1>
        <form action="adicionar-artigo.html" method="post">
            <p>
                <label for=""> <?php echo $artigos['conteudo']; ?></label>
               
            </p>
            <p>
                <label for=""> <?php echo $artigos['cargaHoraria']; ?></label>
               
            </p>
            <p>
                <button class="botao"><a href="index.php">Voltar</a></button>
            </p>
        </form>
    </div>
</body>

</html>