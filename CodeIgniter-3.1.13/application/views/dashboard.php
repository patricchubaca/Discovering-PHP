
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>

	<link rel="stylesheet" type="text/css" href="<?php base_url('assets/css/bootstrap.min.css')?>">
</head>
<body>
	<h1>Cadastre-se</h1>

	<?php
	foreach($inscritos as $inscrito){

		echo $inscrito['nome']."</br>";
		echo $inscrito['email']."</br>";
		echo $inscrito['cidade']."</br>";
		echo $inscrito['uf']."</br>";
	}

	 ?>

</body>
</html>