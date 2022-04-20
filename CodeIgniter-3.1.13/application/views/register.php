
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>

	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>


		<h3 > Registro de Usuários </h3>	

		<form action="<?php echo site_url('Register/teste'); ?>" method="post">
			<div class="container">
				<div class="mb-3">
					<label for="exampleFormControlInput1" class="form-label">Nome</label>
					<input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
				</div>
				<div class="mb-3">
					<label for="exampleFormControlInput1" class="form-label">E-mail</label>
					<input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
				</div>
				<div class="mb-3">
					<label for="exampleFormControlInput1" class="form-label">Cidade</label>
					<input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
				</div>
				<div class="mb-3">
					<label for="exampleFormControlInput1" class="form-label">Estado</label>
					<input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
				</div>
				<button type="button" class="btn btn-primary">Primary</button>
			</div>	
		</div>
	</form>
</body>
</html>