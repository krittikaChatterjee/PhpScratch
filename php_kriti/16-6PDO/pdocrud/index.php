<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width,initial-scale=1.0">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<title>Welcome</title>
</head>
<body>
     <table class="table table-hover table-bordered">
	   	<tr>
	   		  <th>Action</th>
	   		  <th>Name</th>
	   		  <th>Phone</th>
	   		  <th>Email</th>
	   		  <th>Pic</th>
	   		  <th>Created</th>
	   	</tr>
	   	
	
	  <?php
            $con = new PDO('mysql:host=localhost;dbname=TestDB','root','');
            #Checking the connection 
            if($con->errorCode()) die($con->errorInfo());
            else{
            	$SQL ="select * from users";
            	//Sending SQL in Preparedstatement for Prevention //of SQL Injection
                $stmt = $con->prepare($SQL);
                //Now execute PreparedStatement
                $stmt->execute();
                /*
                 How many ways we can process Array in PDO
                 i)FETCH_BOTH => array index pos+array index Name
                 ii)FETCH_ASSOC =>Array Index Name only.
                 iii)FETCH_LAZY => Return next row as an anonymous object with column names as properties
                 as well shown the queryString.
                 iv)FETCH_OBJ=>Return next row as an anonymous object with column names as properties ,
                 doesnot show queryString.

                */
                 //$res = $stmt->fetch(PDO::FETCH_OBJ);
                  while($rows = $stmt->fetch(PDO::FETCH_LAZY)){
                  	  //echo $rows->cname;
                  	?>
                  	<tr>
             <td><a href="delete.php?id=<?php echo $rows->id;?>" class="btn btn-sm btn-outline-danger"
             onclick="return confirm('Do You want to Delete ?');" 
             	>Delete</a> |
                 <a href="edit.php?id=<?php echo $rows->id;?>" class="btn btn-sm btn-outline-secondary">Edit</a>  
             </td>
	   		 <td><?php echo $rows->cname; ?></td>
	   		 <td><?php echo $rows->phone; ?></td>
	   		 <td><?php echo $rows->email; ?></td>
	   		 <td><img src="<?php echo $rows->pic; ?>" height="48px" width="48px" class="rounded-circle"/></td>
	   		 <td><?php echo $rows->created; ?></td>
	   	</tr>
                  	<?php
                  }


            }
            #Close the Connection 
            $con = NULL;


	   ?>
        </table>
    <a href="signup.php">SignUP</a>
</body>
</html>