<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>ci</title>
	<meta name="viewport" content="width=device-width,initial-scale=1.0">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
<div class="container">
	<header class="modal-header"><h1>SignUp</h1></header>
	<form method="post" action="<?php echo base_url();?>index.php/home/submit"  enctype="multipart/form-data">
	<div class="form-group">
		<label>NAME</label>
		<input type="text" name="t1" required class="form-control">
	</div>

	<div class="form-group">
		<label>PHONE</label>
		<input type="number" name="t2" required class="form-control">
	</div>

	<div class="form-group">
		<label>EMAIL</label>
		<input type="text" name="t3" required class="form-control">
	</div>

	<div class="form-group">
		<label>PASSWORD</label>
		<input type="password" name="p1" required class="form-control">
	</div>

	<div class="form-group">
		<label>CONFIRM PASSWORD</label>
		<input type="password" name="p2" required class="form-control">
	</div>
	<div class="form-group">
                <label>Upload Picture :</label>
                  <input type="file" name="avatar" required class="form-control">

          </div>

	<div class="form-group">
		
		<button class="btn btn-sm btn-primary">SUBMIT</button>
	</div>
</form>


<?php
   if(isset($msg)){
                 if($msg =='Success')
                  echo "<div class='alert alert-success'>Registration Successfull !</div>";        
             
             else if($msg=='error')                 
                 echo "<div class='alert alert-danger'>Unbale to Reagiter Right Now !</div>";
             }
               ?>
</div>
</body>
</html>