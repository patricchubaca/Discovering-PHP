<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Doguito Petshop | Cadastro de produto</title>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Pacifico&display=swap" rel="stylesheet"> 
    <link rel="stylesheet" href="./assets/css/base/base.css">
    <link rel="stylesheet" href="./assets/css/componentes/cabecalho.css">
    <link rel="stylesheet" href="./assets/css/componentes/cartao.css">
    <link rel="stylesheet" href="./assets/css/cadastra_cliente.css">
    <link rel="stylesheet" href="./assets/css/componentes/inputs.css">
    <link rel="stylesheet" href="./assets/css/componentes/botao.css">
    <link rel="stylesheet" href="./assets/css/cadastro_produto.css">
</head>

    <header class="cabecalho container">
        <img src="./assets/img/doguitoadm.svg" alt="Logo Doguito" class="cabecalho__logo">
        <nav>
            <ul class="cabecalho__lista-navegacao">
                <li class="cabecalho__link"><a href="#">Dashboard</a></li>
                <li class="cabecalho__link"><a href="#">Produtos</a></li>
                <li class="cabecalho__link"><a href="lista_cliente.html">Clientes </a></li>
                <li class="cabecalho__link"><a href="#">Pets</a></li>
            </ul>
        </nav>
    </header>
    <main class="container flex flex--centro flex--coluna">
        <section class="cartao cadastro">
            <h1 class="cartao__titulo">Cadastrar um produto</h1>
            <form action="./cadastro_produto_concluido.html" class="flex flex--coluna">
                <div class="input-container">
                    <input name="nome" id="nome" class="input" type="text" placeholder="Nome">
                    <label class="input-label" for="nome">Nome</label>
                    <span class="input-mensagem-erro">Este campo não está válido</span>
                </div>
                <div class="input-container cadastro__preco-container">
                    <input name="preco" id="preco" class="input" type="text" placeholder="Preço">
                    <label class="input-label" for="preco">Preço</label>
                    <span class="input-mensagem-erro">Este campo não está válido</span>
                </div>
                <div class="input-container cadastro__descricao-container">
                    <input class="input" name="descricao" id="descricao" placeholder="Descrição">
                    <label class="input-label" for="descricao">Descrição</label>
                    <span class="input-mensagem-erro">Este campo não está válido</span>
                </div>
                <button class="botao">Cadastrar produto</button>
            </form>
        </section>
    </main>

    <h1>CRUD</h1>
    <table class="table">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Nome</th>
      <th scope="col">Emails</th>
      <th scope="col">Acoes</th>
    </tr>
</thead>
  <?php 
      include_once "list.php";
   ?>
  <?php foreach($listas as $lista){ ?>
  <tbody>
    <tr>
      <td><?php echo $lista['id']; ?></td>
      <td><?php echo $lista['nome_curso']; ?></td>
      <td><?php echo $lista['descricao_curso']; ?></td>
      <td><?php echo $lista['carga_horaria']; ?></td>
      <td>vaziu</td>
    </tr>
  </tbody>
  <?php } ?>
</table>


</body>
</html>