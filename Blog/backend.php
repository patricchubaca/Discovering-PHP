<?php

class  Artigo {
    public function exibirTodos():array{
        $artigos = [
            [
                'link' => 'primeiros_passos_com_html',
                'titulo' => 'Crimeiros passos com HTML5',
                'conteudo' => 'Hoje vamos utilizar a lingueguem de marcação HTML',
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



 