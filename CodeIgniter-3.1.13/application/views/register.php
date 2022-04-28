
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
				<h1 class="text-start mt-2">Cadastre-se</h1>
			</div>
			<div class="col-6 text-end mt-5">
				<a href="<?php echo site_url('dashboard')?>">
					<button class="btn btn-primary">Dashboard</button>
				</a>	
			</div>
		</div>
	</div>

	<form action="<?php echo site_url('Register/registerSave')?>" method="post">
		<div class="container">
			<div class="alert alert-danger mt-2" role="alert">
				Usuário ja registrado!
			</div>
			<div class="mb-3">
				<label for="exampleFormControlInput1" class="form-label">Nome</label>
				<input type="name" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com" name="nome">
			</div>
			<div class="mb-3">
				<label for="exampleFormControlInput1" class="form-label">E-mail</label>
				<input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com" name="email">
			</div>
			<div class="mb-3">
				<label for="exampleFormControlInput1" class="form-label">Cidade</label>
				<input type="name" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com" name="cidade">
			</div>
			<div class="mb-3">
				<label for="exampleFormControlInput1" class="form-label">Estado</label>
				<input type="name" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com" name="uf">
			</div>
			<button type="submit" class="btn btn-primary">Cadastrar</button>
		</div>	
	</div>
</form>
<script type="text/javascript" src="<?php echo base_url('assets/js/index.js')?>"></script>
</body>
</html>