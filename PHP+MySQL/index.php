<?php

  require_once('./vendor/autoload.php');

  use src\Database\ConexaoDB;

  $conn = ConexaoDB::conectar();
  $stmt = $conn->prepare("SELECT * FROM artigos");
  $stmts = $stmt->execute();
  $listas = $stmt->fetchAll(PDO::FETCH_ASSOC);

  ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <title>Document</title>
</head>
<body>

  <body class="container">
    
    <h1 class="text-center">Cadastre-se em um Curso de Tecnologia</h1>
    <p>Preencha os dados a baixo</p>   
    <form class="form">
        
        <div class="form-group">
            <label for="tituloCurso">Nome do curso:</label>
            <input type="text" id="titulo" class="form-control" required autofocus/>        
        </div>    
        
        <div class="form-group">
            <label for="DescricaoCurso">Descrição</label>
            <input type="text" id="conteudo" class="form-control" value="1" required/>
        </div>
        
        <div class="form-group">
            <label for="cargaHoraria">Carga horária:</label>
            <input id="cargaHoraria" type="number" class="form-control"  min="0.01" step="0.01" value="0.0" required />
        </div>
        
        <button class="btn btn-primary" type="submit">Incluir</button>
    </form>
    
    <div class="text-center">
        <button class="btn btn-primary text-center" type="button">
            Apagar
        </button>
    </div> 
</br>
<table class="table table-hover">
  <thead>
    <tr>
      <th scope="col">titulo</th>
      <th scope="col">conteudo</th>
      <th scope="col">cargaHoraria</th>  
    </tr>
  </thead>
  <tbody>
  <?php foreach ($listas as $lista) { ?>
  <tr>
    <td><?php echo $lista['titulo']; ?></td>
    <td><?php echo $lista['conteudo']; ?></td>
    <td><?php echo $lista['cargaHoraria']; ?></td>
  </tr>
  <?php } ?>
  </tbody>
</table>
<script src="./public/js/index.js"></script>
</body>

</html>