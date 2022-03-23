<!DOCTYPE html>
<html>
<head>
	<title>database (table contacts) connection</title>
</head>
<body>
	 <!DOCTYPE html>
<html>
<head>
    <title>Welcome</title>
</head>
<body>
     <table>
             <tr>
                   <th>Name</th>
                   <th>Sal</th>
                   <th>Age</th>
                   <th>Created</th>
             </tr>
      
      <?php
        #First we need to create an Object of Mysqli class
         $con = new Mysqli('localhost','root','','TestDB');
         #Check the errors
         if($con->connect_error) die($con->connect_error);
         else {
             #Sending SQL
             $SQL ="select * from contacts";
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
                    <td><?php echo $rows['sal'];?></td>
                    <td><?php echo $rows['age'];?></td>
                    <td><?php echo $rows['created'];?></td>
             </tr>
                  <?php
              }
         }

         #close the Database connection
         $con->close();


       ?>
            
       </table>

</body>
</html>