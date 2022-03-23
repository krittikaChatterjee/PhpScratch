<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">

	<title>Read</title>
</head>
<body>
    
    <table>
    	<tr>
    		<th>Name</th>
    		<th>Action</th>
    	</tr>
    	<?php
            $con=new mysqli ('localhost','root','','testdb');
            if($con->connect_error) die($con->connect_error);
            else{
            	$sql="select * from contacts";
            	$res=$con->query($sql);
            	while($rows=$res->fetch_assoc())
            	{
            		?>
            		<tr>
    		             <td>"<?php echo $rows['cname'];?>"</td>
    		             <td><a class="btn btn-sm btn-danger" href="delete.php?id=<?php echo $rows['id'];?>">DELETE</a>
                             <a class="btn btn-sm btn-success" href="edit.php?id=<?php echo $rows['id'];?>">Edit</a>
    		             </td>
    	             </tr>
    	    <?php
            	}
            }
            $con->close();
    	?>
    	
    </table>
</body>
</html>