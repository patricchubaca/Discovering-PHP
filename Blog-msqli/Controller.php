<?php

class  Artigo 
{
    private $mysql;

    public function __construct(mysqli $mysql)
    {
        $this->mysql = $mysql;
    }

    static function exibirTodos():array{

    $resultados = $this->mysql->query('SELECT * FROM artigos');
    $artigos = $resultados->fetch_all(MYSQLI_ASSOC);

        return $artigos;
    }
}



 