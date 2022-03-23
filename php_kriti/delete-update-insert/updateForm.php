<?php
    
     $name = $_POST['t11'];
     $phone =$_POST['t22'];
     $email= $_POST['t33'];
     $id   = $_POST['hid'];

     $con = new Mysqli("localhost","root","","testDB");
     if($con->connect_error) die($con->connect_error);
     else{
     	$sql="update users set cname='$name',phone='$phone',email='$email' where id=$id";
     	$con->query($sql);
     	$rows = $con->affected_rows;
        $con->close();
        if($rows == 1)
        {
           echo "<script>
                     alert('Users Record Updated');
                     window.location.href='index.php';
           </script>";
        }else{
              echo "<script>alert('Unknown Error !');
                            window.history.back(); 
              </script>";

        }

     }
 ?>