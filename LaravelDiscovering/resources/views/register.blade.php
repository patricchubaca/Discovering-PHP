<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>

	<link rel="stylesheet" href="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js">

	<link rel="stylesheet" href="./CSS/style.css">

	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.4/css/bulma.min.css">

</head>
<body>
		<section class="section">
			<div class="container">
				<h1 class="title">
					Register
				</h1>
				<p class="subtitle">
					Save <strong>users</strong>!
					<div class="is-justify-content-flex-end">
						<div class="is-justify-content-flex-end" id="UM">
							<button class="button"><a id="button" href="{{url('/')}}">Register</a></button>
						</div>
					</div>
				</div>
			</p>
		</div>
	</section>
	<form method="POST" action="/save">
	@csrf
	<div class=" mt-5">
		<div class="container">
			<div class="field">
				<label class="label">Name</label>
				<div class="control">
					<input class="input" type="text" placeholder="Nome Completo" name="nome">
				</div>
			</div>
			<div class="field">
				<div class="field">
					<label class="label">E-mail</label>
					<div class="control">
						<input class="input" type="text" placeholder="E-mail"  name="email">
					</div>
				</div>
				<div class="field">
					<div class="field">
						<label class="label">Cidade</label>
						<div class="control">
							<input class="input" type="text" placeholder="Cidade" name="cidade">
						</div>
					</div>
					<div class="field">
						<div class="field">
							<label class="label">UF</label>
							<div class="control">
								<input class="input" type="text" placeholder="Uf" name="uf">
							</div>
						</div>
						

						<div class="field">
							<div class="control">
								<label class="checkbox">
									<input type="checkbox">
									I agree to the <a href="#">terms and conditions</a>
								</label>
							</div>
						</div>

						<div class="field">
							<div class="control">
								<label class="radio">
									<input type="radio" 
									Yes
								</label>
								<label class="radio">
									<input type="radio">
									No
								</label>
							</div>
						</div>

						<div class="field is-grouped">
							<div class="control">
								<button class="button is-link">Submit</button>
							</div>
							<div class="control">
								<button class="button is-link is-light">Cancel</button>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		</form>		
		</body>
		</html>
