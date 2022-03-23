<!DOCTYPE html>
<html>
<head>
    <title>Welcome</title>
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
            $con = new PDO('mysql:host=localhost;dbname=TestDB','root','');
            #Checking the connection
            if($con->errorCode()) die($con->errorInfo());
            else{
                $SQL ="select * from users";
                //Sending SQL in Preparedstatement for Prevention //of SQL Injection
                $stmt = $con->prepare($SQL);
                //Now execute PreparedStatement
                $stmt->execute();
                /*
                 How many ways we can process Array in PDO
                 i)FETCH_BOTH => array index pos+array index Name
                 ii)FETCH_ASSOC =>Array Index Name only.
                 iii)FETCH_LAZY => Return next row as an anonymous object with column names as properties
                 as well shown the queryString.
                 iv)FETCH_OBJ=>Return next row as an anonymous object with column names as properties ,
                 doesnot show queryString.

                */
                 //$res = $stmt->fetch(PDO::FETCH_OBJ);
                  while($rows = $stmt->fetch(PDO::FETCH_LAZY)){
                        //echo $rows->cname;
                      ?>
                      <tr>
                <td><?php echo $rows->cname; ?></td>
                <td><?php echo $rows->phone; ?></td>
                <td><?php echo $rows->email; ?></td>
                <td><?php echo $rows->created; ?></td>
           </tr>
                      <?php
                  }


            }
            #Close the Connection
            $con = NULL;


       ?>
        </table>

</body>
</html>