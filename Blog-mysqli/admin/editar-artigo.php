<?php

    require_once "../ConexaoBD/Conexao.php"; 
    require_once "../Controller.php";
    require_once "../src/redireciona.php";

        if ($_SERVER['REQUEST_METHOD'] === 'POST')
        {
            $artigo = new Artigo($mysql);
            $debugArticle = $artigo->editar($_POST['id'], $_POST['titulo'], $_POST['conteudo'], $_POST['cargaHoraria']);

            redireciona('/admin/index.php');   
        }

            $editeArticle = new Artigo($mysql);
            $art = $editeArticle->encontrarPorId($_GET['id']);
        
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <link rel="stylesheet" type="text/css" href="../style.css">
    <meta charset="UTF-8">
    <title>Editar Artigo</title>
</head>

<body>
    <div id="container">
        <h1>Editar Artigo</h1>
        <form action="editar-artigo.php" method="POST">
            <p>
                <label for="titulo">Digite o novo título do artigo</label>
                <input class="campo-form" type="text" name="titulo" id="titulo" value="<?php echo $art['titulo']; ?>" />
            </p>
            <p>
                <label for="conteudo">Digite o novo conteúdo do artigo</label>
                <input class="campo-form" type="text" name="conteudo" value ="<?php echo $art['conteudo']; ?>" id="titulo"></input>
            </p>
            <p>
                <input type="text" name="cargaHoraria" value="<?php echo $art['cargaHoraria']; ?>" />
            </p>
            <p>
                <input type="hidden" name="id" value="<?php echo $art['id']; ?>" />
            </p>
            <p>
                <button class="botao">Editar Artigo</button>
            </p>
        </form>
    </div>
</body>

</html>