

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.4/css/bulma.min.css">

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/dt/jq-3.6.0/dt-1.11.5/datatables.min.css"/>

  <script type="text/javascript" src="https://cdn.datatables.net/v/dt/jq-3.6.0/dt-1.11.5/datatables.min.js"></script>



  <link rel="stylesheet" href="./CSS/style.css">

  <title>Occtoplus</title>

</head>
<body>
  <div class="container is-max-widescreen mt-5">
    <section class="section">
      <div class="container">
        <h1 class="title">
          Occtoplus
        </h1>
        <p class="subtitle">
         Lista de <strong>produtos</strong>!
         <div class="modal" tabindex="-1">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title">Modal title</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body">
                <p>Modal body text goes here.</p>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
              </div>
            </div>
          </div>
        </div>
        <div class="text-end mb-5">
          <div class="column" id="UM">
            <button class="button is-medium button is-info"><a id="button" href="{{url('/registerMateriais')}}">Registrar Material</a></button>
          </div>
        </div>
      </p>
    </div>
    <table class="table" id="tableUsuarios">
      <thead>
        <tr>
          <th scope="col">Sigla</th>
          <th scope="col">Descrição</th>
          <th scope="col">Composição</th>
          <th scope="col">Código Spead</th>
          <th scope="col">Ações</th>
        </tr>
      </thead>
      <tbody>

      </tbody>
    </table>

    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Edit Produtos</h5>
            <div class="control">
            </div>
          </div>
          <form method="POST" id="form-cad-usuario">
            @csrf 
            <div class="modal-body">
              <div class="control">
                <input class="" name="id" type="text" id="editid">
              </div>
              <label>Sigla:</label>
              <div class="control">
                <input class="input is-hovered" name="sigla" type="text" id="editsigla">
              </div>
              <label>Descrição:</label>
              <div class="control">
                <input class="input is-hovered" name="tipo" type="text" id="edittipo">
              </div>
              <label>Composição:</label>
              <div class="control">
                <input class="input is-hovered" name="formula" type="text" id="editformula">
              </div>
              <label>COD Spead:</label>
              <div class="control">
                <input class="input is-hovered" name="codigo_sped" type="text" id="editcodigo_sped">
              </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
              <button type="submit" class="btn btn-primary">Save changes</button>
            </div>
          </form>
        </div>
      </div>
    </div>

    <script type="text/javascript" src="./Javascript/main.js"></script>

   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

 </body>
 </html>