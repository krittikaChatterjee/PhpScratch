<?php
        $name = $_POST['t11'];
        $id   = $_POST['hid'];

        $con = new Mysqli("localhost","root","","testDB");
       if($con->connect_error) die($con->connect_error);
        else{
        	//echo"connected";
        	$sql="update contacts set cname='$name' where id=$id";
        	$con->query($sql);
        	$rows= $con->affected_rows;
        	 $con->close();
         
        	if ($rows==1)
        	{
              echo"updated";
        	}
        	
        	else{
                 echo"failed";
        	    } 
        	 }   
      
       
?>