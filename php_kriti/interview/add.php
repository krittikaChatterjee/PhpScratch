<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</head>
<body>
	
	<div>
		<div class="container">
			<form action="addshow.php" method="POST">
				<div id="input">
					<label>Degree</label>
					<input type="text" name="d1[]" class="form-control" required>
					<br>
				</div>
				<button id="btn" class="btn btn-sm btn-info">submit</button>
				<button id="btn1" class="btn btn-sm btn-primary">add more</button>
				
			</form>
		</div>

		<script>
			$('document').ready(function(){
				$('#btn1').click(function(e){
					e.preventDefault();
		$('#input').append('<label>Degree</label><input type="text" name="d1[]" class="form-control"><br>')

				})
			})
		</script>
	</div>

</body>
</html>