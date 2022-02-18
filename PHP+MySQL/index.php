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

  use src\Database\Database;

  require_once ('./vendor/autoload.php');

  $bd = new Database();

  ?>
</body>

</html>