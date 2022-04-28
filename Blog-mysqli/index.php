<?php
   require_once "ConexaoBD/Conexao.php"; 
   require_once "Controller.php";
   
   $artigo = new Artigo($mysql);
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
        <h2>
            <a href ="artigoNovo.php?id=<?php echo $artigo['id'];?>
             ">   
                <h1> <?php echo $artigo['titulo']; ?></h1>
            </a>
        </h2>
        <p><?php echo $artigo['conteudo'] ?></p>

        <p>Carga Horaria: <?php echo $artigo['cargaHoraria'] ?></p>
    </div>
    <?php } ?>
</body>
</html>

