<!DOCTYPE html>
<html>
<head>
  <title>database (table users) connection</title>
</head>
<body>
  

     <table>
             <tr>
                   <th>Name</th>
                   <th>Phone</th>
                   <th>Email</th>
                   <th>Created</th>
             </tr>
      
      <?php
       
         $con = new Mysqli('localhost','root','','testdb');
       
         if($con->connect_error) die($con->connect_error);
         else {
             
             $SQL ="select * from users";
            
             $res= $con->query($SQL);
            
              while($rows = $res->fetch_assoc()){
                 
                  ?>
                    <tr>
                    <td><?php echo $rows['cname'];?></td>
                    <td><?php echo $rows['phone'];?></td>
                    <td><?php echo $rows['email'];?></td>
                    <td><?php echo $rows['created'];?></td>
                    </tr>
                  <?php
              }
         }

        
         $con->close();


       ?>
            
       </table>
       <a href="add.php">SignUp</a>

</body>
</html>