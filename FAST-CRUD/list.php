<?php
    include_once "conexao.php";

    $sql ="SELECT id, nome_curso, descricao_curso,carga_horaria FROM tb_cursos";
    $sqlBusca = $conn->prepare($sql);
    
    $sqlBusca->execute();

    $dados = "";

    while($row_usuario = $sqlBusca->fetch(PDO::FETCH_ASSOC)){
        extract($row_usuario);
        $dados.= "<tr>
                      <td>$id</td>  
                      <td>$nome_curso</td>
                      <td>$descricao_curso</td>
                      <td>$carga_horaria</td>  
                      <td></td>    
                  <tr>";

    };

    echo $dados;




    ?>