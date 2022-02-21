<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script>
   function button(){

    alert('teste');
    }

</script>
 
  <title>Document</title>
</head>
<body>
  <h1>Formulário para cadastro</h1>
  <form>
    <label for="fname">Nome do curso:</label><br>
    <input type="text" id="fname" name="nomeCurso" value=""><br>
    <label for="lname">Carga horária:</label><br>
    <input type="text" id="lname" name="cargaHoraria" value=""><br>
    <label for="lname">Descrição:</label><br>
    <input type="text" id="lname" name="descricaoCurso" value=""><br><br>
    <button  onclick="button()">teste</button>
  </form>

  <?php

  require_once ('./vendor/autoload.php');

  use src\Database\ConexaoDB;

  $conn = ConexaoDB::conectar();
  $stmt = $conn->prepare("SELECT * FROM artigos");
  $stmts = $stmt->execute();
  $lista = $stmt->fetchAll(PDO::FETCH_ASSOC);
  

  
  ?>
</body>

</html>