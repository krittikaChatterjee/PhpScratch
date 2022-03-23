<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

<table class="table table-hover table-bordered">
             <tr>
              
                   <th>NAME</th>
                   <th>EMAIL</th>
                   <th>MOBILE</th>
                   <th>DATE OF BIRTH</th>
                   <th>GENDER</th>
                   <th>SKILL</th>
                   <th>COURSE</th>
                   <th>ADDRESS</th>
                   <th>IMAGE</th>
                   <th>STATE</th>
                   <th>DISTRICT</th>
             </tr>
      
      <?php
        
         $con = new Mysqli('localhost','root','','formdb');
         
         if($con->connect_error) die($con->connect_error);
         else {
             #Sending SQL
             $SQL ="select * from contacts";
           
             $res= $con->query($SQL);
          
              while($rows = $res->fetch_assoc()){
                  #  print_r($rows);
                  ?>
                    <tr>
               
               </td>       
                    <td><?php echo $rows['name'];?></td>
                    <td><?php echo $rows['email'];?></td>
                    <td><?php echo $rows['phone'];?></td>
                    <td><?php echo $rows['dob'];?></td>
                     <td><?php echo $rows['gender'];?></td>
                      <td><?php echo $rows['skill'];?></td>
                       <td><?php echo $rows['course'];?></td>
                        <td><?php echo $rows['address'];?></td>
                          <td><img src="<?php echo $rows['pic']; ?>" height="64px" width="64px" class="rounded-circle"/></td>
                         <td><?php echo $rows['state'];?></td>
                          <td><?php echo $rows['district'];?></td>

             
             </tr>
                  <?php
              }
         }

         #close the Database connection
         $con->close();


       ?>
            
       </table>