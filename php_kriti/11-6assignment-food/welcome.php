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
         <a href="logout.php">Logout</a>
     </div>
    <div class="container pt-3 my-3 bg-dark text-white">
      <table  class="table">
            <thead class="thead-dark">
             <tr>
                  <th>Action</th>
                   <th>Food Name</th>
                   <th>Description</th>
                   <th>PRICE</th>
                   <th>IMAGE</th>
             
             </tr>
         </thead>

      
      <?php
        #First we need to create an Object of Mysqli class
         $con = new Mysqli('localhost','root','','TestDB');
         #Check the errors
         if($con->connect_error) die($con->connect_error);
         else {
            if($_SESSION['ROLE']=='admin')
             #Sending SQL
              header("location:welcome2.php");
         else
            $SQL ="select * from food";

             #Now executing the SQL
             $res= $con->query($SQL);
           
              while($rows = $res->fetch_assoc()){
                  #  print_r($rows);
                  ?>
                    <tr>
               <td>
                    <a class="btn btn-sm btn-outline-info" href="delete.php?id=<?php echo $rows['food_id'];?>"
                      onclick="return confirm('Do You want to Delete ?');">Delete</a>
                    <a class="btn btn-sm btn-outline-danger" href="edit.php?id=<?php echo $rows['food_id'];?>">Edit</a>
               </td>       
                    <td><?php echo $rows['fname'];?></td>
                    <td><?php echo $rows['description'];?></td>
                    <td><?php echo $rows['price'];?></td>
                    
               <td><img src="<?php echo $rows['food_image']; ?>" height="64px" width="64px" class="rounded" alt="Cinque Terre"/></td>
             </tr>
                  <?php
              }
         }

         #close the Database connection
         $con->close();


       ?>
            
       </table>

         <div class="text-center">
          <a href="add.php" class="btn btn-info"  role="button">Add Product</a></div>
        </div>

        <?php }
       else
           header("location:login.php");

     ?>





</body>
</html>
