
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>

	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
	<div class="container">
		<div class="row">
			<div class="col-6">
				<h1 class="text-start mt-2">Listagem dos cadastrados</h1>
			</div>
			<div class="col-6 text-end mt-5">
				<a href="<?php echo site_url('Register/pageRegister')?>">
					<button class="btn btn-primary">Cadastrar</button>
				</a>	
			</div>
		</div>
	</div>
	<div class="container">
		<table class="table">
			<thead>
				<tr>
					<th scope="col">Nome</th>
					<th scope="col">E-mail</th>
					<th scope="col">Cidade</th>
					<th scope="col">Estado</th>
					<th scope="col">Ações</th>
				</tr>
			</thead>
			<tbody>
				<?php
				foreach($inscritos as $inscrito){ ?>
					<tr>
						<th scope="row"><?php echo $inscrito['nome'] ?></th>
						<td><?php echo $inscrito['email'] ?></td>
						<td><?php echo $inscrito['cidade'] ?></td>
						<td><?php echo $inscrito['uf'] ?></td>
						<td>
							<a href="<?php echo site_url('DropRegister/DropRegister')?>">
								<button class="btn btn-danger">Deletar</button>
							</a>
								<a href="<?php echo site_url('EditRegister/EditRegister/'.$inscrito['id']);?>">
								<button class="btn btn-warning">Editar</button>
							</a>	
						</td>
					</tr>
				<?php } ?>
			</tbody>
		</table>
	</body>
	</html>