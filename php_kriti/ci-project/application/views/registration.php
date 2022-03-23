<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">

	<title>Welcome</title>
</head>
<body>
	<form method="post" action="<?php echo base_url(); ?>index.php/home/registration" enctype="multipart/form-data">
	name:<input type="text" name="t1" required>
	phone<input type="number" name="t2" required>
	email:<input type="text" name="t3" required>
	address<input type="text" name="t4" required>
	pin<input type="number" name="t5" required>
	upload Image<input type="file" name="img" id="img" required>
	password<input type="password" name="p1" required>
	confirmpassword<input type="password" name="p2" required>
	<button name="btnReg" value="registration">SignUp</button>
</form>
<?php 
 echo $this->session->flashdata('msg');
?>


</body>
</html>