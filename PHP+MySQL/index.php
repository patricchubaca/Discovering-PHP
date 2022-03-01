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
  <script  src="/public/js/index.js"></script>
  <title>Document</title>
</head>
<body>
  <h1>Formulário para cadastro</h1>
  <form>
    <label for="fname">Nome do curso:</label><br>
    <input type="text" id="titulo" name="titulo" value=""><br>
    <label for="lname">Carga horária:</label><br>
    <input type="text" id="conteudo" name="conteudo" value=""><br>
    <label for="lname">Descrição:</label><br>
    <input type="text" id="cargaHoraria" name="cargaHoraria" value=""><br><br>
    <button onclick="button()">teste</button>
  </form>
  
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

</body>

</html>