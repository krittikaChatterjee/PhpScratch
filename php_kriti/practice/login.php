<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>login</title>
</head>
<body>
	<div>
	<form method="post">
		 <div class="form-group">
              <label>Username:</label>
              <input type="text" name="uname" required placeholder="name" class="form-control">
          </div>
           <div class="form-group">
              <button name="btnLogin" value="login" class="btn btn-sm btn-primary">Login</button>
          </div>
	</form>

	<?php

          if(isset($_POST['btnLogin'])){
          	$nm=$_POST['uname'];

          	 $con = new MYsqli("localhost","root","","TestDB");
          	 if($con->connect_error) die($con->connect_error);
          	 else{
              $sql="select * from contacts where (cname='$nm')";
              $res = $con->query($sql);
              if($rows = $res->fetch_assoc()){
              	$_SESSION['USER'] = $rows['cname'];
              	 header("location:read.php");
                 }
                 else{
                 	echo"invalid";
                 }

          	 }
          	 $con->close();

          }
          

	?>
</div>

</body>
</html>