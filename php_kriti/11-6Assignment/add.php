<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width,initial-scale=1.0">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<title>Welcome</title>
</head>
<body>

	   <div class="container">
	   	<header class="modal-header"><h1>INSERT PRODUCT</h1></header>

	   	<form method="post" enctype="multipart/form-data">
	   	<div class="form-group">
	   		<label>Porduct Name :</label>
	   		<input type="text" name="t1" required class="form-control">
	   	</div>
	   	<div class="form-group">
	   		<label>Quantity :</label>
	   		<input type="text" name="t2" required class="form-control">
	   	</div>
	   	<div class="form-group">
	   		<label>Price :</label>
	   		<input type="text" name="t3" required class="form-control">
	   	</div>
	   	
	   	<!--Adding file upload control-->
	   	<div class="form-group">
	   		<label>Upload Picture:</label>
	   		<input type="file" name="avatar" class="form-control" required>
	   	</div>
	   	<div class="form-group">
	   		<button name="btn" value="submit" class="btn btn-sm btn-primary">Submit</button>
	   	</div>
	   </form>
	   <?php
              if(isset($_POST['btn'])){
              	$pnm = $_POST['t1'];
              	$qty = $_POST['t2'];
              	$price = $_POST['t3'];
              	

              	//file upload code goes here ...
              	$fileName = $_FILES['avatar']['name'];
              	$fileType = $_FILES['avatar']['type'];
              	$fileSize = $_FILES['avatar']['size'];
              	$fileTmp  = $_FILES['avatar']['tmp_name'];
                $upload_image_path = '';
              	if($fileType =='image/jpg' || $fileType=='image/jpeg' || $fileType=='image/png' || $fileType=='image/gif'){
              		if($fileSize<=600*1024){
                        
                       if(!file_exists("uploads")) 
                       	    mkdir("uploads");
                       $upload_image_path ='uploads/'.$fileName;
                       move_uploaded_file($fileTmp, $upload_image_path);
                       //DataBase code will go here...
                        #Connect to Database
                $con = new Mysqli('localhost','root','','TestDB');
                #Check the errors
                if($con->connect_error) die($con->connect_error);
                else{
                	$SQL="insert into product(pname,qty,price,image)values('$pnm','$qty','$price','$upload_image_path')";
                	$con->query($SQL);
                	//affected_rows is a cursor which returns either 1 or 0 depends upon query execution.
                    $rows = $con->affected_rows; 
                    if($rows == 1)
                    	echo "<div class='alert alert-success'>Successfully Uploaded !</div>";
                    else
                    	echo "<div class='alert alert-danger'>Unable to Upload Right Now.</div>";
                }

                #close the database Connection.
                $con->close();
        


              		}else{
              			echo "<div class='alert alert-danger'>Image is Too Large to Upload.</div>";
              		}

              	}else{
              		echo "<div class='alert alert-danger'>Only Image Files are Acceptable..</div>";
              	}

               



              }
	     ?>
	      <a href="logout.php" class="btn btn-info" role="button">Logout</a>
	   </div>

</body>
</html>