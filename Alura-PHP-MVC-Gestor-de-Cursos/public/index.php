<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Document</title>
</head>
<body>
<?php

    switch($_SERVER['PATH_INFO']){
        case '/listar-curso':
            require 'listar-cursos.php';
            break;
        case '/adicionar-curso';
            require 'adicionar-cursos.php';
            break;
        case '/novo-curso';
            require 'novo-curso.php';
            break;

    }

?>

</body>
</html>