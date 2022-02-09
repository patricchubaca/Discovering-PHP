<?php

class  Artigo {
     function exibirTodos():array{
        $artigos = [
            [
                'link' => 'primeiros_passos_com_PHP',
                'titulo' => 'Crimeiros passos com O PHP',
                'conteudo' => 'Hoje vamos utilizar a lingueguem de programação PHP',
                'cargaHoraria' => '33:30' 
            ],
            [
                'link' => 'logica de programação com JS',
                'titulo' => 'Primeiros passos com JavaScript',
                'conteudo' => 'Vamos ver os conteudos da linguaguem JavaScript',
                'cargaHoraria' => '47:50' 
            ]
        ];

        return $artigos;
    }
}



 