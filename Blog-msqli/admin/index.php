<?php
    require_once "../ConexaoBD/Conexao.php";
    require_once "../Controller.php";

    //$artigo = new Artigo($mysql);
    //$artigos = $artigo->addsArtigo($_POST['conteudo'], $_POST['titulo']);

    //file_put_contents('/tmp/degubPatric', date('H:i:s').print_r($artigos, 1)."\n", FILE_APPEND);


?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <title>Página administrativa</title>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="../style.css">
</head>

<body>
    <div id="container">
        <h1>Página Administrativa</h1>
        <div>
       
            <div id="artigo-admin">
                <p></p>
                <nav>
                    <a class="botao" href="admin/editar-artigo.html">Editar</a>
                    <a class="botao" href="admin/excluir-artigo.html">Excluir</a>
                </nav>
      
        </div>

            <div id="artigo-admin">
                <p>O que é Metodologia Ágil?</p>
                <nav>
                    <a class="botao" href="admin/editar-artigo.html">Editar</a>
                    <a class="botao" href="admin/excluir-artigo.html">Excluir</a>
                </nav>
            </div>
            <div id="artigo-admin">
                <p>Como é o funil do Growth Hacking?</p>
                <nav>
                    <a class="botao" href="admin/editar-artigo.html">Editar</a>
                    <a class="botao" href="admin/excluir-artigo.html">Excluir</a>
                </nav>
            </div>
        </div>
        <a class="botao botao-block" href="adicionar-artigo.html">Adicionar Artigo</a>
    </div>
</body>
</html>