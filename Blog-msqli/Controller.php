<?php


class Artigo
{
    private $mysql;

    public function __construct(mysqli $mysql)
    {
        $this->mysql = $mysql;
    }

    public function saveArticle()
    {
        
    }

    public function exibirTodos(): array
    {
        $resultado = $this->mysql->query('SELECT id, titulo, conteudo, cargaHoraria FROM artigos');
        $artigos = $resultado->fetch_all(MYSQLI_ASSOC);

        return $artigos;
    }
    public function encontrarPorId(string $id): array
    {
        $selecionaArtigo = $this->mysql->prepare("SELECT id, titulo, conteudo, cargaHoraria FROM artigos WHERE id = ?");
        $selecionaArtigo->bind_param('s', $id);
        $selecionaArtigo->execute();
        $artigos = $selecionaArtigo->get_result()->fetch_assoc();
        
        return $artigos;
    }
    public function dropId(string $id){

    }
    public function addsArtigo(string $titulo, string $conteudo, string $carga): void
    {
        $selecionaArtigo = $this->mysql->prepare('INSERT INTO artigos  (titulo, conteudo, cargaHoraria ) VALUES(?,?,?);');
        $selecionaArtigo->bind_param('sss', $titulo, $conteudo, $carga);
        
        $selecionaArtigo->execute();        
    }
    public function editArticle(string $id)
    {

    }
  
  }


 