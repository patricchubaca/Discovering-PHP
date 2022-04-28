
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/dt/jq-3.6.0/dt-1.11.5/datatables.min.css"/>

    <script type="text/javascript" src="https://cdn.datatables.net/v/dt/jq-3.6.0/dt-1.11.5/datatables.min.js"></script>

    <link rel="stylesheet" href="./CSS/style.css">

    <title>Laravel</title>
</head>
<body>
    <div class="container">
        <div class="container">
            <h1>Lista dos Cadastrados</h1>
        </div>
        <div class="text-end mb-5">
            <a href="">
                <button class="btn btn-primary">Cadastrar</button>
            </a>    
        </div>
        <table class="table" id="tableUsuarios">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Nome</th>
                    <th scope="col">Email</th>
                    <th scope="col">Cidade</th>
                    <th scope="col">uf</th>

                </tr>
            </thead>
            <tbody>
            </tbody>
        </table>
    </div>  

   
    <script type="text/javascript">
        
      $(document).ready(function() {
            $('#tableUsuarios').DataTable( {
                "ajax": "/nova"
            } );
        } );
    </script>
</body>
</html>