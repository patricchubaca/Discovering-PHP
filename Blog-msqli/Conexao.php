<?php

    $mysql = new mysqli('localhost','root', 'root','BLOG');
    $mysql->set_charset('utf8');
    $consulta =  $mysql->query('SELECT * FROM artigos');
    $artigos =   $consulta->fetch_all(MYSQLI_ASSOC);
    
    if($mysql == TRUE){
        echo "Banco Conectado";
    }else{
        echo "Sem sucesso";
    }
