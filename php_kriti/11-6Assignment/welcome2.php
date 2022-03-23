<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
    <title>Welcome</title>
     <meta name="viewport" content="width=device-width,initial-scale=1.0">
  
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>

    <?php
             if(isset($_SESSION['USER'])){
     ?>
     <div style="float: right">
         Welcome <?php echo $_SESSION['USER']; ?>
         <a href="logout.php">Logout</a> |
         <a href="signup.php">Signup</a>
     </div>
    <div class="container pt-3 my-3 bg-dark text-white">
        <h1 align="center">User Table</h1>
      <table  class="table">
            <thead class="thead-dark">
             <tr>
                  
                   <th>Name</th>
                   <th>Phone</th>
                   <th>Email</th>
                   <th>IMAGE</th>
             
             </tr>
         </thead>

      
      <?php
        #First we need to create an Object of Mysqli class
         $con = new Mysqli('localhost','root','','TestDB');
         #Check the errors
         if($con->connect_error) die($con->connect_error);
         else {
           
             #Sending SQL
             $SQL ="select * from users";
        
            

             #Now executing the SQL
             $res= $con->query($SQL);
           
              while($rows = $res->fetch_assoc()){
                  #  print_r($rows);
                  ?>
                    <tr>
                      
                    <td><?php echo $rows['cname'];?></td>
                    <td><?php echo $rows['phone'];?></td>
                    <td><?php echo $rows['email'];?></td>
                    
               <td><img src="<?php echo $rows['pic']; ?>" height="64px" width="64px" class="rounded" alt="Cinque Terre"/></td>
             </tr>
                  <?php
              }
         }

         #close the Database connection
         $con->close();


       ?>
            
       </table>



        <?php }
       else
           header("location:login.php");

     ?>





</body>
</html>
