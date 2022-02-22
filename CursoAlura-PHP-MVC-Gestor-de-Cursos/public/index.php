<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Document</title>
</head>
<body>
<?php

    if($_SERVER['PATH_INFO'] === '/listar-cursos'){
        require 'listar-cursos.php';
    } else {
        require 'novo-curso.php';
    }

?>

</body>
</html>