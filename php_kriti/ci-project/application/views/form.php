<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<?php include_once('assets/plugins.php'); 
	 include_once 'assets/css.php';
	 include_once('assets/js.php');
	?>
	<title>Welcome</title>
</head>
<body>
	


	
	<div class="container border" style="width: 600px; margin-top: 50px; background-color: #D5C4C1 ;" >
		<header class="modal-header"><h1>FILLUP THE FORM </h1></header>
	
	<form method="post" action="<?php echo base_url(); ?>home/registration" enctype="multipart/form-data">

	<div class="form-group">
		<label>Name:</label>
		<input type="text" name="t1" id="t1" required class="form-control" placeholder="Enter your name" onkeyup="nameValid()">
		<section id="errorName" class="text-danger"></section>
	</div>

	<div class="form-group">
		<label>Email:</label>
		<input type="text" name="t3" id="t3" required class="form-control" placeholder="Enter your email id" onkeyup="emailValid()">
		<section id="errorEmail" class="text-danger"></section>
	</div>


	<div class="form-group">
		<label>Mobile:</label>
		<input type="number" name="t2" id="t2" required class="form-control" placeholder="Enter your phone number" onkeyup="phoneValid()">
		<section id="errorPhone" class="text-danger"></section>
	</div>

	<div class="form-group">
		<label>Date Of Birth:</label>
		<input type="number" name="t2" id="t2" required class="form-control" placeholder="Enter your phone number" >
		<section id="" class="text-danger"></section>
	</div>

	<div class="form-group">
		<label>Gender:</label>
		<input type="number" name="t2" id="t2" required class="form-control" placeholder="Enter your phone number" onkeyup="phoneValid()">
		<section id="errorPhone" class="text-danger"></section>
	</div>

	<div class="form-group">
		<label>Skill:</label>
		<input type="number" name="t2" id="t2" required class="form-control" placeholder="Enter your phone number" onkeyup="phoneValid()">
		<section id="errorPhone" class="text-danger"></section>
	</div>

	<div class="form-group">
		<label>Course:</label>
		<input type="number" name="t2" id="t2" required class="form-control" placeholder="Enter your phone number" onkeyup="phoneValid()">
		<section id="errorPhone" class="text-danger"></section>
	</div>


	
	<div class="form-group">
		<label>Address:</label>
		<textarea type="text" name="t4" id="t4" required class="form-control" minlength="20" maxlength="250" rows="5" cols="6" placeholder="Enter your address"></textarea>
	</div>
	
	<div class="form-group">
		<label>Upload Image:</label>
		<input type="file" name="img" id="img" required class="form-control" placeholder="Upload your Image">
	</div>

<div class="form-group">
		<label>Course:</label>
		<input type="number" name="t2" id="t2" required class="form-control" placeholder="Enter your phone number" onkeyup="phoneValid()">
		<section id="errorPhone" class="text-danger"></section>
	</div

	<div class="form-group">
		<label>District:</label>
		<input type="number" name="t2" id="t2" required class="form-control" placeholder="Enter your phone number" onkeyup="phoneValid()">
		<section id="errorPhone" class="text-danger"></section>
	</div
		

	
	<div class="form-group">
		<button name="btnReg" id="btnReg" value="registration" class="btn btn-sm btn-success">SignUp</button>||
		<button type="reset" class="btn btn-sm btn-danger">Reset</button>

	</div>
</form>


</div>
	
     
<?php include_once"assets/footer.php"; ?>
</body>
</html>