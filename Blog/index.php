<?php
    $artigos = [
        [
            'link' => 'primeiros_passos_com_html',
            'titulo' => 'Primeiros passos com HTML5',
            'conteudo' => 'Hoje vamos utilizar a lingueguem de marcação HTML' 
        ],
        [
            'link' => 'logica de programação com JS',
            'titulo' => 'Primeiros passos com JavaScript',
            'conteudo' => 'Vamos ver os conteudos da linguaguem JavaScript' 
        ]
    ];
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

