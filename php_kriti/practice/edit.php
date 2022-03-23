<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Edit</title>
</head>
<body>
  <?php
       $id=$_GET['id'];
       $con= new mysqli ('localhost','root','','testdb');
       if($con->connect_error) die($con->connect_error);
       else{
       	//echo"connected";
       	$sql="select * from contacts where id=$id";
       	$res=$con->query($sql);
       	$data=[];
       	if($rows=$res->fetch_assoc())
         $data=[
         	'name'=>$rows['cname'],

         ];
        print_r($data);
       }
       $con->close();
  ?>

  <form method="post" action="update.php">
  	<div>
  		<label>
  			<input type="text" name="t11" id="t11" class="form-control" required value="<?php echo $data['name'];?>">
  		</label>
  		<input type="hidden" name="hid" value="<?php echo $id;?>">
  	</div>
  	<button class="btn btn-sm btn-success" name="btnup" value="btnup">UPDATE</button>

  </form>
</body>
</html>