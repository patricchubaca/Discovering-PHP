<?php
    require_once "backend.php";

    $mysql = new mysqli('localhost','root', 'root','BLOG');
    $mysql->set_charset('utf8');

    if($mysql == TRUE){
        echo "Banco Conectado";
    }else{
        echo "Sem sucesso";
    }


    $artigo = new Artigo();
    $artigos = $artigo->exibirTodos();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="style.css" media="screen" />

    <title>Meu Blog</title>
</head>
<body>
    <?php foreach($artigos as $artigo){ ?>
    <div id="container">
        <h1> <?php echo $artigo['titulo']; ?></h1>
        <h2>
            <a href =""><?php echo $artigo['link']; ?>
            </a>
        </h2>
        <p><?php echo $artigo['conteudo'] ?></p>
    </div>
    <?php } ?>
</body>
</html>

