<?php
    require_once "ConexaoBD/Conexao.php"; 
    require_once "Controller.php";

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
        <h1>Titulo Artigo</h1>
        <form action="adicionar-artigo.html" method="post">
            <p>
                <label for="">Digite o título do artigo</label>
            </p>
            <p>
                <label for="">Digite o conteúdo do artigo</label>
            </p>
            <p>
                <button class="botao">Voltar</button>
            </p>
        </form>
    </div>
</body>

</html>