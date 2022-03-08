<!DOCTYPE html>
<html lang="pt">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>CRUD FAST</title>
</head>
<div class="container">
    <h1>CRUD</h1>
    <button type="button" class="btn btn-outline-success float-right" data-toggle="modal" data-target="#cadUsuarioModal">Cadastrar</button>
    
    <table class="table pt-1">
        <br>
        <thead class="thead">
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Curso</th>
                <th scope="col">Descrição</th>
                <th scope="col">Cargahorária</th>
                <th scope="col">Ações</th>
            </tr>
        </thead>
        <tbody>

        </tbody>

    </table>
    <!-- Button trigger modal -->
    <!-- Modal -->
    <div class="modal fade" id="cadUsuarioModal" tabindex="-1" role="dialog" aria-labelledby="cadUsuarioModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="cadUsuarioModalLabel">Cadastro do Curso</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form id="cad-usuario" method="post">
                        <span id="msgAlerta"></span>
                        <span id="msgAlertaErroCad"></span>
                        <label for="name">Nome Curso:</label>
                        <input type="text" class="form-control" id="nome_curso" name="nome_curso" placeholder="Nome do Curso" required>
                        <label for="name">Descricao Curso:</label>
                        <input type="text" class="form-control" id="descricao_curso" name="descricao_curso" placeholder="Descrição do Curso" required>
                        <label for="name">Carga Horária:</label>
                        <input type="text" class="form-control" id="carga_horaria" name="carga_horaria" placeholder="Carga horária do Curso" required>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <input type="submit" class="btn btn-outline-success btn-sm" id="cad-usuario-btn" value="Cadastrar" />
                </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Content here -->
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<script src="index.js"></script>
<link rel="stylesheet" type="text/css" href="stylesheet.css" media="screen" />
</body>

</html>