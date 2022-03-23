<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
       
     <div class="container">
       <form method="post" >
       	<div>
       		<label>name</label>
       		<input type="text" name="t1" id="t1" required placeholder="name is required">
       	</div>
       	<div>
       		<button name="btn" value="btn" id="btn">submit</button>
       	</div>
       </form>
   
  	<?php 
  	     if(isset($_POST['btn']))
  	     	{
  	     		$name=$_POST['t1'];

           $con=new mysqli('localhost','root','','testdb');
           if($con->connect_error) die($con->connect_error);
           else{
             $sql="insert into contacts(cname)values('$name')";
             $con->query($sql);
             
             $rows=$con->affected_rows;
             if($rows==1)
               echo"successfully registered";
           else
           	    echo"failed";
              
             }
          
          $con-> close();
           }

  	?>
       
  </div>
	
</body>
</html>