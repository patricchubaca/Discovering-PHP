<?php

    $mysql = new mysqli('localhost','root', 'root','BLOG');
    $mysql->set_charset('utf8');
   
    if($mysql == False){
       echo "Sem conexão com o banco de dados";
   
    }