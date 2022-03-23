<?php
    
     $name = $_POST['t11'];
     $phone =$_POST['t22'];
     $email= $_POST['t33'];
     $p1= $_POST['p11'];
     $id   = $_POST['hid'];

      $con = new PDO('mysql:host=localhost;dbname=TestDB','root','');

       if($con->errorCode()) die($con->errorInfo());
     else{
     	 $sql="update users set cname=:name,phone=:phone,email=:email where id=$id";
     	$stmt=$con->prepare($sql);
        //$stmt->bindParam(':id',$id);

         $stmt->bindParam(':name',$name);
         echo":name";
        $stmt->bindParam(':phone',$phone);
        $stmt->bindParam(':email',$email);
        

         $stmt->execute();


     $count = $stmt->rowCount();
         $con = NULL;
       if($count == 1)
        {
           echo "<script>
                     alert('Users Record Updated');
                     window.location.href='index.php';
           </script>";
        }

     }
 ?>