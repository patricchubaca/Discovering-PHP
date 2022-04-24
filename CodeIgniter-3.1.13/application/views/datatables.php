<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>

	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

	<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/dt/jq-3.6.0/dt-1.11.5/datatables.min.css"/>

	<script type="text/javascript" src="https://cdn.datatables.net/v/dt/jq-3.6.0/dt-1.11.5/datatables.min.js"></script>

</head>
<body>
	
	<div class="container">
		<div class="container">
			<h1>DataTables</h1>
		</div>
		<table class="table" id="tableUsuarios">
			<thead>
				<tr>
					<th scope="col">#</th>
					<th scope="col">First</th>
					<th scope="col">Last</th>
					<th scope="col">Handle</th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<th scope="row">1</th>
					<td>Mark</td>
					<td>Otto</td>
					<td>@mdo</td>
				</tr>
			</tbody>
		</table>
	</div>	

	<script type="text/javascript">
		
		$(document).ready(function() {
			$('#tableUsuarios').DataTable( {
				"ajax": "data/arrays.txt"
			} );
		} );
	</script>
</body>
</html>