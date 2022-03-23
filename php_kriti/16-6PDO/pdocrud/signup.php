<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width,initial-scale=1.0">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<title>Welcome</title>
</head>
<body>

	  <div class="container">
	  	<header class="modal-header"><h1>SignUp</h1></header>
	  	<form method="post" enctype="multipart/form-data">
	  	  <div class="form-group">
	  	  	<label>Name :</label>
	  	  	<input type="text" name="t1" required class="form-control">
	  	  </div>
	  	  <div class="form-group">
	  	  	<label>Phone :</label>
	  	  	<input type="number" name="t2" required class="form-control">
	  	  </div>
	  	  <div class="form-group">
	  	  	<label>Email :</label>
	  	  	<input type="text" name="t3" required class="form-control">
	  	  </div>
	  	  <div class="form-group">
	  	  	<label>Pic Upload :</label>
	  	  	<input type="file" name="avatar" required class="form-control">
	  	  </div>
	  	  <div class="form-group">
	  	  	<label>Password :</label>
	  	  	<input type="password" name="p1" required class="form-control">
	  	  </div>
	  	  <div class="form-group">
	  	  	<label>Confirm Password :</label>
	  	  	<input type="password" name="p2" required class="form-control">
	  	  </div>
	  	  <div class="form-group">
	  	  	<button name="btn" value="submit" class="btn btn-sm btn-primary">Submit</button>
	  	  </div>
	  	</form>
	  	<?php
              if(isset($_POST['btn'])){
              	$nm = $_POST['t1'];
              	$ph = $_POST['t2'];
              	$em = $_POST['t3'];
                $p1 = md5($_POST['p1']);

                $fileName = $_FILES['avatar']['name'];
                $fileTmp  = $_FILES['avatar']['tmp_name'];
                $fileType = $_FILES['avatar']['type'];
                $fileSize = $_FILES['avatar']['size'];
                $imagePath ="uploads/".$fileName;
                if($fileType =='image/jpg' || $fileType=='image/jpeg' || $fileType=='image/png'){
                   if($fileSize<=600*1024){
                       
                     if(!file_exists("uploads")) mkdir("uploads");

                     move_uploaded_file($fileTmp,$imagePath);

                     //Database Connection 
                     $con = new PDO("mysql:host=localhost;dbname=TestDB","root","");
                     if($con->errorCode()) die($con->errorInfo());
                     else{
                     	$sql="insert into users(cname,phone,email,pass1,pic)values(:name,:phone,:email,:pass1,:pic)";
                      $stmt = $con->prepare($sql);
                      $stmt->bindParam(':name',$nm);
                      $stmt->bindParam(':phone',$ph);
                      $stmt->bindParam(':email',$em);
                      $stmt->bindParam(':pass1',$p1);
                      $stmt->bindParam(':pic',$imagePath);

                      $stmt->execute();
                      
                      $count = $stmt->rowCount();
                      if($count == 1)
                      	echo "<div class='alert alert-success'>SignUp Successfull !</div>";
                      else 
                      	echo "<div class='alert alert-danger'>Unable to Register !</div>";
                      }

                      #Close the Connection 
                      $con = NULL;

                   }else{
                    echo "<div class='alert alert-danger'>Image is too large to Upload.</div>";

                   }
                } else{
                	echo "<div class='alert alert-danger'>Only Image accepted.</div>";
                }

              }
	  	 ?>

	  </div>

</body>
</html>