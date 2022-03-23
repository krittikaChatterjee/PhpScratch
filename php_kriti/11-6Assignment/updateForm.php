<?php
    
     $pnem = $_POST['t11'];
     $amount =$_POST['t22'];
     $money= $_POST['t33'];
     $id   = $_POST['hid'];

     $con = new Mysqli("localhost","root","","testDB");
     if($con->connect_error) die($con->connect_error);
     else{
     	$sql="update product set pname='$pnem',qty='$amount',price='$money' where product_id=$id";
     	$con->query($sql);
     	$rows = $con->affected_rows;
        $con->close();
        if($rows == 1)
        {
           echo "<script>
                     alert('Users Record Updated');
                     window.location.href='welcome.php';
           </script>";
        }else{
              echo "<script>alert('Unknown Error !');
                            window.history.back(); 
              </script>";

        }

     }
 ?>