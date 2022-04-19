
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
		<h1>Cadastre-se</h1>

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
				<tr>
					<?php
					foreach($inscritos as $inscrito){ ?>
						<th scope="row"><?php echo $inscrito['nome'] ?></th>
						<td><?php echo $inscrito['email'] ?></td>
						<td><?php echo $inscrito['cidade'] ?></td>
						<td><?php echo $inscrito['uf'] ?></td>
						<td><button type="button" class="btn btn-danger">Deletar</button>
							<button type="button" class="btn btn-secondary">Editar</button>
						</td>

					<?php } ?>
				</tr>

			</tbody>
		</table>	


	</div>

	

</body>
</html>