<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>

	<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.5/css/jquery.dataTables.css">

	<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.js"></script

</head>
<body>
	<h1>Datatables</h1>

	<table id="exemplo" class="table display">
		<thead>
			<tr>
				<td>Nome</td>
			</tr>
			<tbody>
				<tr>Patric</tr>
			</tbody>
		</thead>
	
	</table>

	<script
	src="https://code.jquery.com/jquery-3.6.0.js"
	integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk="
	crossorigin="anonymous"></script>

	<script type="text/javascript">
		
		$(document).ready( function () {
			$('#exemplo').DataTable();
		} );
	</script>
</body>
</html>