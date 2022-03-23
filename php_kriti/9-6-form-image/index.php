<!DOCTYPE html>
<html>
<head>
    <title>Welcome</title>
  <meta name="viewport" content="width=device-width,initial-scale=1.0">
  
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>

     <table class="table table-hover table-bordered">
             <tr>
                   <th>Name</th>
                   <th>Phone</th>
                   <th>Email</th>
                   <th>Created</th>
                   <th>Pic</th>
             </tr>
      
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
           # print_r($res);
             #Fetching Data from an Array
             /*
              1)fetch_array() => by array index position. and Index Name  =>fetch_assoc()+fetch_row()
              2)fetch_assoc() =>by array index name.
              3)fetch_row() => by index position.
             */
              while($rows = $res->fetch_assoc()){
                  #  print_r($rows);
                  ?>
                    <tr>
                    <td><?php echo $rows['cname'];?></td>
                    <td><?php echo $rows['phone'];?></td>
                    <td><?php echo $rows['email'];?></td>
                    <td><?php echo $rows['created'];?></td>
               <td><img src="<?php echo $rows['pic']; ?>" height="64px" width="64px" class="rounded-circle"/></td>
             </tr>
                  <?php
              }
         }

         #close the Database connection
         $con->close();


       ?>
            
       </table>

       <a href="add.php">SignUp</a>
</body>
</html>


