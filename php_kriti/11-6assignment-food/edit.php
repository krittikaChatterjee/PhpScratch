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
           	$sql="select * from food where food_id=$id";
           	$res= $con->query($sql);
           	$data = []; #Empty Array
           	if($rows = $res->fetch_assoc()){
                   $data=[
                     'foodname' =>$rows['fname'],
                     'descrip'=>$rows['description'],
                     'rupee'=>$rows['price']
                   ];

           	}
          	print_r($data);
           	$con->close();


           }  

     ?>

	   <div class="container">
	   	<header class="modal-header"><h1>Update Product</h1></header>

	   	<form method="post" action="updateForm.php">
	   	<div class="form-group">
	   		<label>Food Name :</label>
	   		<input type="text" name="t11" required value="<?php echo $data['foodname'];?>" class="form-control">
	   	</div>
	   	<div class="form-group">
	   		<label>Descriptipn :</label>
	   		<input type="number" name="t22" required value="<?php echo $data['descrip']; ?>" class="form-control">
	   	</div>
	   	<div class="form-group">
	   		<label>Price :</label>
	   		<input type="text" name="t33" required value="<?php echo $data['rupee']; ?>" class="form-control">
	   		<input type="hidden" name="hid" value="<?php echo $id;?>">
	   	</div>
	   		
	   	<div class="form-group">
	   		<button class="btn btn-sm btn-secondary">Update</button>
	   	</div>
	   </form>
	   </div>

</body>
</html>