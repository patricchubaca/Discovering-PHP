<?php
     require_once "../ConexaoBD/Conexao.php"; 
     require_once "../Controller.php";
     
     if ($_SERVER['REQUEST_METHOD'] === 'POST'){
        $artigo = new Artigo($mysql);
        $artigos = $artigo->addsArtigo($_POST['titulo'], $_POST['conteudo'], $_POST['carga']);
        
        file_put_contents('/tmp/degubPatric', date('H:i:s').print_r($artigos, 1)."\n", FILE_APPEND);



        
     }
    
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
        <h1>Adicionar Artigo</h1>
        <form action="adicionar-artigo.php" method="POST">
            <p>
                <label for="">Digite o título do artigo</label>
                <input class="campo-form" type="text" name="titulo" id="titulo" />
            </p>
            <p>
                <label for="">Digite a carga horária do Artigo</label>
                <input class="campo-form" type="text" name="carga" id="carga"></input>
            </p>
            <p>
                <label for="">Digite o conteúdo do artigo</label>
                <textarea class="campo-form" type="text" name="conteudo" id="conteudo"></textarea>
            </p>
            <p>
        
                <button class="botao">Criar Artigo</button>
            </p>
        </form>
    </div>
</body>

</html>