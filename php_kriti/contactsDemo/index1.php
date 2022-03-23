<!DOCTYPE html>
<html>
<head>
	<title>database(table emp) connection</title>
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
                   <th>DEpt_id</th>
                   
             </tr>
      
      <?php
       
         $con = new Mysqli('localhost','root','','TestDB');
        
         if($con->connect_error) die($con->connect_error);
         else {
             
             $SQL ="select * from emp";
            
             $res= $con->query($SQL);
          
              while($rows = $res->fetch_assoc()){
                 
                  ?>
                    <tr>
                    <td><?php echo $rows['ename'];?></td>
                    <td><?php echo $rows['sal'];?></td>
                    <td><?php echo $rows['dept_id'];?></td>
                    
             </tr>
                  <?php
              }
         }

         
         $con->close();


       ?>
            
       </table>

</body>
</html>