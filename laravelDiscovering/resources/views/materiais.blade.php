<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Occtoplus</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.4/css/bulma.min.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <link rel="stylesheet" href="./CSS/style.css">
</head>
<body>
  <div class="container is-max-widescreen mt-5">
    <section class="section">
      <div class="container">
        <h1 class="title">
          Occtoplus
        </h1>
        <p class="subtitle">
         Registro dos <strong>produtos</strong>.
         <div class="text-end mb-5">
          <div class="column" id="UM">
            <button class="button is-medium button is-info"><a id="button" href="{{url('/')}}">Dashboard</a></button>
          </div>
        </div>
      </p>
    </div>

    <form method="POST" action="/materiais">
     @csrf 
     <h3 class="text-center">
      Registre seu <strong>Produto.</strong>
    </h3>
    <div class="columns">
      <div class="column">
        <div class="columns">
          <div class="column">
            <div class="field">
              <label class="label">Sigla:</label>
              <div class="control">
                <input class="input" type="text" placeholder="PG" name="sigla">
              </div>
            </div>
            <div class="field">
              <label class="label">Descrição do Tipo:</label>
              <div class="control">
                <input class="input" type="text" placeholder="Consumo" name="tipo">
              </div>
            </div>
            <div class="field">
              <label class="label">Formula:</label>
              <div class="control">
                <input class="input" type="text" placeholder="J" name="formula">
              </div>
            </div>
            <div class="field">
              <label class="label">Código /Sped:</label>
              <div class="control">
                <input class="input" type="text" placeholder="A" name="codigo_sped">
              </div>
            </div>
            <button class="button is-success is-medium">Registrar Produtos</button>
          </div>
        </div>
      </div>
    </div>
  </form>
</body>
</html>