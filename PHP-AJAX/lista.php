<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

</head>
<body>
	<div class="container">
		<div class="text-center mt-5 mb4">
			
			<h1>PHP MySQL Search</h1>

			<div class="row">
				<input type="text" class="form-control mt-5" id="live_search" placeholder="Search...">
			</div>	
			<div>
				<div id="searchresult">

			</div>x
			</div>
		</div>
	</div>	

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

	<script type="text/javascript">
		$(document).ready(function(){

			$("#live_search").keyup(function(){
				
				var input = $(this).val();

				//alert(input);	

				if(input != ""){
					$.ajax({
						url:"search.php",
						method:"POST",
						data: {input:input},

						success:function(data){
							$("#searchresult").html(data);
						}

					});
				} else {
					$("searchresult").css("display", "none");
				}
			});

		});
	</script>
</body>
</html>