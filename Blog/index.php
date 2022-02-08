<?php
    $artigo = [
        'titulo' => 'Primeiros passos com JavaScript',
        'descricao' => 'Vamos ver os conteudos da linguaguem JavaScript',  
    ];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Meu Blog</title>
</head>
<body>
    <h1> <?php echo $artigo['titulo']; ?> </h1>
    <h2>
        <a href ="primeiros-passos-com-sping.html">
            <?php echo $artigo['descricao']; ?>    
        </a>
    </h2>

    <p> Lorem Ipsum é simplesmente uma simulação de texto da indústria tipográfica e de impressos, e vem sendo utilizado desde o século XVI, quando um impressor desconhecido pegou uma bandeja de tipos e os embaralhou para fazer um livro de modelos de tipos. Lorem Ipsum sobreviveu não só a cinco séculos, como também ao salto para a editoração eletrônica</p>

    <h2>
        <a href ="primeiros-passos-com-sping.html">
            <?php echo $artigo['descricao']; ?>    
        </a>
    </h2>

    
    <p> Lorem Ipsum é simplesmente uma simulação de texto da indústria tipográfica e de impressos, e vem sendo utilizado desde o século XVI, quando um impressor desconhecido pegou uma bandeja de tipos e os embaralhou para fazer um livro de modelos de tipos. Lorem Ipsum sobreviveu não só a cinco séculos, como também ao salto para a editoração eletrônica</p>

</body>
</html>

