<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>CRUD</h1>
  <?php
    include_once "conexao.php";
    $sql ="SELECT nome_curso, descricao_curso,carga_horaria FROM tb_cursos";
    $sqlBusca = $conn->prepare($sql);
    $teste = $sqlBusca->execute();
    $listas = $sqlBusca->fetchAll(PDO::FETCH_ASSOC);

  echo  "<pre>";
  var_dump($listas);
  echo  "</pre>";

    ?>
    <table class="table">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Nome</th>
      <th scope="col">Emails</th>
      <th scope="col">Acoes</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>Mark</td>
      <td>Otto</td>
      <td>@mdo</td>
    </tr>
  </tbody>
</table>
</body>
</html>