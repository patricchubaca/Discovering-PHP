<!doctype html>
  <html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap core CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Occtoplus</title>
  </head>
  <body class="light">
    <div class="container">
      <div class="mt-5">
        <h1 class="">Occtoplus</h1>
      </div>
      <div class="py-3">
        <h3>Cadastro de Bancos para Remessa</h3>  
      </div>
      <form method="POST" action="/banco">
        @csrf
        <div class="container">
          <div class="row g-3">
            <div class="col-sm-3 mx-5">
              <label for="firstName" class="form-label">Boleto Emitido</label>
              <select class="form-select" aria-label="Default select example">
                <option selected>Open this select menu</option>
                <option value="1">One</option>
                <option value="2">Two</option>
                <option value="3">Three</option>
              </select>
            </div>

            <div class="col-sm-3 mx-5">
              <label for="lastName" class="form-label">CNAB</label>
              <select class="form-select" aria-label="Default select example">
                <option selected>Open this select menu</option>
                <option value="1">One</option>
                <option value="2">Two</option>
                <option value="3">Three</option>
              </select>
            </div>

            <div class="container">
              <div class="row g-3">
                <div class="col-sm-2">
                  <label for="firstName" class="form-label">Nº Banco</label>
                  <input type="text" class="form-control" id="firstName" placeholder="" name="numero" required>
                  <div class="invalid-feedback">
                    Valid first name is required.
                  </div>
                </div>

                <div class="col-sm-2">
                  <label for="lastName" class="form-label">Agência - Digito</label>
                  <input type="text" class="form-control" id="lastName" placeholder="" name="agencia" required>
                  <div class="invalid-feedback">
                    Valid last name is required.
                  </div>
                </div>

                <div class="col-sm-2">
                  <label for="lastName" class="form-label">Conta Corrente - Digito</label>
                  <input type="text" class="form-control" id="lastName" placeholder="" name="conta_corrente" required>
                  <div class="invalid-feedback">
                    Valid last name is required.
                  </div>
                </div>

                <div class="col-sm-2">
                  <label for="lastName" class="form-label">Nome do Banco</label>
                  <input type="text" class="form-control" id="lastName" placeholder="" name="nome_banco" required>
                  <div class="invalid-feedback">
                    Valid last name is required.
                  </div>
                </div>
                <div class="container">
                  <div class="row g-3">
                    <div class="col-sm-2">
                      <label for="firstName" class="form-label">Carteiras</label>
                      <input type="text" class="form-control" id="firstName" placeholder="" value="" required>
                      <div class="invalid-feedback">
                        Valid first name is required.
                      </div>
                    </div>

                    <div class="col-sm-2">
                      <label for="lastName" class="form-label">Convenio</label>
                      <select class="form-select" aria-label="Default select example">
                        <option selected>Select</option>
                        <option value="1">One</option>
                        <option value="2">Two</option>
                        <option value="3">Three</option>
                      </select>
                    </div>

                    <div class="col-sm-2">
                      <label for="lastName" class="form-label">% Juros Diários</label>
                      <input type="text" class="form-control" id="lastName" placeholder="" value="" required>
                      <div class="invalid-feedback">
                        Valid last name is required.
                      </div>
                    </div>

                    <div class="col-sm-2">
                      <label for="lastName" class="form-label">Dias P/ Protesto.</label>
                      <input type="text" class="form-control" id="lastName" placeholder="" value="" required>
                      <div class="invalid-feedback">
                        Valid last name is required.
                      </div>
                    </div>

                    <div class="container">
                      <div class="row g-3">
                        <div class="col-sm-2">
                          <label for="firstName" class="form-label">Correntista</label>
                          <input type="text" class="form-control" id="firstName" placeholder="" name="correntista" required>
                          <div class="invalid-feedback">
                            Valid first name is required.
                          </div>
                        </div>

                        <div class="col-sm-2">
                          <label for="lastName" class="form-label">Tipo</label>
                          <select class="form-select" aria-label="Default select example" name="cor_tipo">
                            <option selected>Select</option>
                            <option value="1">One</option>
                            <option value="2">Two</option>
                            <option value="3">Three</option>
                          </select>
                        </div>

                        <div class="col-sm-2">
                          <label for="lastName" class="form-label">CPF / CNPJ</label>
                          <input type="text" class="form-control" id="lastName" placeholder="" name="" required>
                          <div class="invalid-feedback">
                            Valid last name is required.
                          </div>
                        </div>

                        <div class="col-sm-2">
                          <label for="lastName" class="form-label">Conta Contab.</label>
                          <input type="text" class="form-control" id="lastName" placeholder="" value="" required>
                          <div class="invalid-feedback">
                            Valid last name is required.
                          </div>
                        </div>

                        <div class="container">
                          <div class="row g-3">
                            <div class="col-sm-2">
                              <label for="firstName" class="form-label">Telefone</label>
                              <input type="text" class="form-control" id="firstName" placeholder="" name="fone" required>
                              <div class="invalid-feedback">
                                Valid first name is required.
                              </div>
                            </div>

                            <div class="col-sm-2">
                              <label for="lastName" class="form-label">Identificação</label>
                              <input type="text" class="form-control" id="lastName" placeholder="" value="" required>
                              <div class="invalid-feedback">
                                Valid last name is required.
                              </div>
                            </div>

                            <div class="col-sm-2">
                              <label for="lastName" class="form-label">Contrato Calção</label>
                              <input type="text" class="form-control" id="lastName" placeholder="" name="contrato_caucao" required>
                              <div class="invalid-feedback">
                                Valid last name is required.
                              </div>
                            </div>

                            <div class="col-sm-2">
                              <label for="lastName" class="form-label">COD / Beneficiário</label>
                              <input type="text" class="form-control" id="lastName" placeholder="" value="" required>
                              <div class="invalid-feedback">
                                Valid last name is required.
                              </div>
                            </div>

                            <div class="container">
                              <div class="row g-3">
                                <div class="col-sm-8">
                                  <label for="firstName" class="form-label">Instrução 1</label>
                                  <input type="text" class="form-control" id="firstName" placeholder="" name="instrucao1" required>
                                  <div class="invalid-feedback">
                                    Valid first name is required.
                                  </div>
                                </div>

                                <div class="col-sm-8">
                                  <label for="lastName" class="form-label">Instrução 2</label>
                                  <input type="text" class="form-control" id="firstName" placeholder="" name="instrucao2" required>
                                  <div class="invalid-feedback">
                                    Valid first name is required.
                                  </div>
                                </div>

                                <div class="col-sm-8">
                                  <label for="lastName" class="form-label">Instrução 3</label>
                                  <input type="text" class="form-control" id="lastName" placeholder="" name="instrucao3" required>
                                  <div class="invalid-feedback">
                                    Valid last name is required.
                                  </div>
                                  <button type="submit" class="btn btn btn-dark btn-lg my-4">Register</button>
                                </div>
                              </form>
                            </div>
                          </body>
                          </html>