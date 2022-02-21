<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>
  <h1>Formulário para cadastro</h1>
  <form action="salvaDados.php" method="POST">
    <label for="fname">Nome do curso:</label><br>
    <input type="text" id="fname" name="nomeCurso" value=""><br>
    <label for="lname">Carga horária:</label><br>
    <input type="text" id="lname" name="cargaHoraria" value=""><br>
    <label for="lname">Descrição:</label><br>
    <input type="text" id="lname" name="descricaoCurso" value=""><br><br>
    <input type="submit" value="Submit">
  </form>

  <?php

require_once ('./vendor/autoload.php');

  use src\Database\ConexaoDB;

  $conn = ConexaoDB::conectar();
  $stmt = $conn->prepare("SELECT * FROM artigos");
  $stmts = $stmt->execute();
  $lista = $stmt->fetchAll(PDO::FETCH_ASSOC);
    
  print_r($lista);
  //echo $lista;
  ?>
</body>

</html>