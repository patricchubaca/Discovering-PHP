<?php
include_once "conexaoDB/conexao.php";
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>PHP FAST CRUD</title>
</head>

<body>
    <div class="container">
        <div class="row mt-4">
            <nav class="navbar navbar-light bg-light mb-5">
                <a class="navbar-brand" href="#">Fast Crud</a>
            </nav>
            <div class="col-lg-12 d-flex justify-content-between align-items-center">
                <div>
                    <h4>Listar Usuários</h4>
                </div>
                <div>
                    <button type="button" class="btn btn-outline-success btn-sm" data-bs-toggle="modal" data-bs-target="#cadUsuarioModal">
                        Cadastrar
                    </button>
                </div>
            </div>
        </div>
        <hr>

        <span id="msgAlerta"></span>

        <div class="row">
            <div class="col-lg-12">
                <span class="listar-usuarios"></span>
            </div>
        </div>
    </div>

    <div class="modal fade" id="cadUsuarioModal" tabindex="-1" aria-labelledby="cadUsuarioModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="cadUsuarioModalLabel">Cadastrar Usuário</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form id="cad-usuario-form">
                        <div class="mb-3">
                            <label for="nome" class="col-form-label">Nome:</label>
                            <input type="text" name="nome" class="form-control" id="nome" placeholder="Digite o nome completo">
                        </div>
                        <div class="mb-3">
                            <label for="email" class="col-form-label">E-mail:</label>
                            <input type="email" name="email" class="form-control" id="email" placeholder="Digite o seu melhor e-mail" required>
                        </div>
                        <!--
                        <div class="mb-3">
                            <label for="email" class="col-form-label">Nome do Curso:</label>
                            <input type="email" name="email" class="form-control" id="nome_curso" placeholder="Digite o seu melhor e-mail" required>
                        </div>
                        <div class="mb-3">
                            <label for="email" class="col-form-label">Descricao Curso:</label>
                            <input type="email" name="email" class="form-control" id="descricao_curso" placeholder="Digite o seu melhor e-mail" required>
                        </div>
                        <div class="mb-3">
                            <label for="email" class="col-form-label">Carga Horária:</label>
                            <input type="email" name="email" class="form-control" id="carga_horaria" placeholder="Digite o seu melhor e-mail" required>
                        </div>
                         -->
                        <div class="modal-footer">
                            <button type="button" class="btn btn-outline-secondary btn-sm" data-bs-dismiss="modal">Fechar</button>
                            <input type="submit" class="btn btn-outline-success btn-sm" id="cad-usuario-btn" value="Cadastrar" />
                        </div>

                    </form>
                </div>

            </div>
        </div>
    </div>


    <div class="modal fade" id="editUsuarioModal" tabindex="-1" aria-labelledby="editUsuarioModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="editUsuarioModalLabel">Editar Usuário</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form id="edit-usuario-form">
                        <span id="msgAlertaErroEdit"></span>
                        <span id="msgAlertaErroCad"></span>
                        <input type="hidden" name="id" id="editid">
                        <div class="mb-3">
                            <label for="nome" class="col-form-label">Nome:</label>
                            <input type="text" name="nome" class="form-control" id="editnome" placeholder="Digite o nome completo">
                        </div>
                        <div class="mb-3">
                            <label for="email" class="col-form-label">E-mail:</label>
                            <input type="email" name="email" class="form-control" id="editemail" placeholder="Digite o seu melhor e-mail" required>
                        </div>
                        <!--
                        <div class="mb-3">
                            <label for="email" class="col-form-label">Nome do Curso:</label>
                            <input type="email" name="email" class="form-control" id="nome_curso" placeholder="Digite o seu melhor e-mail" required>
                        </div>
                        <div class="mb-3">
                            <label for="email" class="col-form-label">Descricao Curso:</label>
                            <input type="email" name="email" class="form-control" id="descricao_curso" placeholder="Digite o seu melhor e-mail" required>
                        </div>
                        <div class="mb-3">
                            <label for="email" class="col-form-label">Carga Horária:</label>
                            <input type="email" name="email" class="form-control" id="carga_horaria" placeholder="Digite o seu melhor e-mail" required>
                        </div>
                            -->
                        <div class="modal-footer">
                            <button type="button" class="btn btn-outline-secondary btn-sm" data-bs-dismiss="modal">Fechar</button>
                            <input type="submit" class='btn btn-outline-danger btn-sm' id="cad-usuario-btn" value="Cadastrar"></input>

                    </form>
                </div>

            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="js/custom.js"></script>
</body>

</html>