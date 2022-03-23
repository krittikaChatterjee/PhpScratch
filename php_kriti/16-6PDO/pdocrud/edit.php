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
           $con = new PDO('mysql:host=localhost;dbname=TestDB','root','');

          if($con->errorCode()) die($con->errorInfo());
           else{
           echo	$sql="select * from users where id=$id";
           	$stmt=$con->prepare($sql);
        	
        	$stmt->execute();

           	
           	$data = []; #Empty Array
           	 while($rows = $stmt->fetch(PDO::FETCH_LAZY)){
                   $data=[
                     'name' =>$rows->cname,
                     'phone'=>$rows->phone,
                     'email'=>$rows->email,
                     'password'=>$rows->pass,
                   ];

           	}
          	print_r($data);
            $con= NULL;



           }  

     ?>

	   <div class="container">
	   	<header class="modal-header"><h1>Update Product</h1></header>

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
	   		<label>Email:</label>
	   		<input type="text" name="t33" required value="<?php echo $data['email']; ?>" class="form-control">
	   		<input type="hidden" name="hid" value="<?php echo $id;?>">
	   	</div>
	   	<div class="form-group">
	   		<label>Password :</label>
	   		<input type="number" name="p11" required value="<?php echo $data['password']; ?>" class="form-control">
	   	</div>
	   		
	   	<div class="form-group">
	   		<button class="btn btn-sm btn-secondary">Update</button>
	   	</div>
	   </form>
	   </div>

</body>
</html>