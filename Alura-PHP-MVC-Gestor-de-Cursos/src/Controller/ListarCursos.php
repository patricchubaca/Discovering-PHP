<?php

namespace Alura\Cursos\Controller;

use Alura\Cursos\Entity\Curso;
use Alura\Cursos\Infra\EntityManagerCreator;

class ListarCursos{

    private $repositorioDeCursos;

    public function __construct(){
        $entityManager = (new \Alura\Cursos\Infra\EntityManagerCreator())
            ->getEntityManager();
        $this->repositorioDeCursos = $entityManager
            ->getRepository(\Alura\Cursos\Entity\Curso::class);
    }

    public function processaRequisição(Type $var = null)
    {
      
        $cursos = $this->repositorioDeCursos->findAll();
    
    }
}