<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width,initial-scale=1.0">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<title>Welcome</title>
</head>
<body>
    <?php

           $id = $_GET['id'];
           $con = new Mysqli("localhost","root","","testDB");
           if($con->connect_error) die($con->connect_error);
           else{
           	$sql="select * from users where id=$id";
           	$res= $con->query($sql);
           	$data = []; #Empty Array[]
           	if($rows = $res->fetch_assoc()){
                   $data=[
                     'name' =>$rows['cname'],
                     'phone'=>$rows['phone'],
                     'email'=>$rows['email']
                   ];

           	}
           #	print_r($data);
           	$con->close();


           }  

     ?>

	   <div class="container">
	   	<header class="modal-header"><h1>Update Users</h1></header>

	   	<form method="post" action="updateForm.php">
	   	<div class="form-group">
	   		<label>Name :</label>
	   		<input type="text" name="t11" required value="<?php echo $data['name'];?>" class="form-control">
	   	</div>
	   	<div class="form-group">
	   		<label>Phone :</label>
	   		<input type="number" name="t22" required value="<?php echo $data['phone']; ?>" class="form-control">
	   	</div>
	   	<div class="form-group">
	   		<label>Email :</label>
	   		<input type="text" name="t33" required value="<?php echo $data['email']; ?>" class="form-control">
	   		<!--Adding Hidden field-->
	   		<input type="hidden" name="hid" value="<?php echo $id;?>">
	   	</div>
	   	<div class="form-group">
	   		<button class="btn btn-sm btn-secondary">Update</button>
	   	</div>
	   </form>
	   </div>

</body>
</html>