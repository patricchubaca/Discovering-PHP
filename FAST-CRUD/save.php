<?php
     include_once "conexao.php";

     $arrayDados = filter_input_array(INPUT_POST, FILTER_DEFAULT);

     file_put_contents('/tmp/debub.txt', date('H:i:s').print_r($arrayDados, 1)."\n", FILE_APPEND);

     if (empty($arrayDados['nome_curso'])){

          $retorna = ['erro'=> true,'msg' => "<div class='alert alert-danger' role='alert'>Preencha o nome!</div>"];
         
     }elseif(empty($arrayDados['descricao_curso'])){
              
          $retorna = ['erro'=> true,'msg' => "<div class='alert alert-danger' role='alert'>Preencha a descrição do curso!</div>"];
          
     }elseif(empty($arrayDados['carga_horaria'])){

          $retorna = ['erro'=> true,'msg' => "<div class='alert alert-danger' role='alert'>Preencha a carga horária do curso!</div>"];
          
      }else{
          $sql = "INSERT INTO tb_cursos (nome_curso, descricao_curso, carga_horaria) VALUES (:nome_curso, :descricao_curso, :carga_horaria)";

          $registroDados = $conn->prepare($sql);
     
          $registroDados->bindParam(':nome_curso', $arrayDados['nome_curso']);
          $registroDados->bindParam(':descricao_curso', $arrayDados['descricao_curso']);
          $registroDados->bindParam(':carga_horaria', $arrayDados['carga_horaria']);
     
          $registroDados->execute();
     
          if($registroDados->rowCount()){
               $retorna = ['erro'=> false,'msg' => "<div class='alert alert-success' role='alert'>Usuário cadastrado com sucesso!</div>"];
          }else{
               $retorna = ['erro' => true, 'msg'=> "<div class='alert alert-danger' role='alert'>Erro ao cadastrar!</div>"];
          }
      }
      echo json_encode($retorna);

             
          

   

