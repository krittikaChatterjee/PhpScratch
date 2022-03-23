<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
</head>
<body>
<table>
	<tr>
		<th>Emp Number</th>
		<th>Emp Name</th>
		<th>Salary</th> 
		<th>Dept</th>
		<th>Manager name</th>
		

		
	</tr>

<?php
        $con = new PDO('mysql:host=localhost;dbname=TestDB','root','');
        if($con->errorCode()) die($con->errorInfo());
          else{
                $SQL ="select * from emp INNER JOIN dept on emp.dept_id=dept.dept_id
                 INNER JOIN manager on dept.manager_id=manager.manager_id";
                
                $stmt = $con->prepare($SQL);
                
                $stmt->execute();
                while($rows = $stmt->fetch(PDO::FETCH_LAZY)){
                        
   ?>
             <tr>
                <td><?php echo $rows->eno; ?></td>
                <td><?php echo $rows->ename; ?></td>
                <td><?php echo $rows->sal; ?></td>
                <td><?php echo $rows->dept; ?></td>
                <td><?php echo $rows->manager_name; ?></td>
           </tr>
                      <?php
                  }


            }
           
            $con = NULL;


       ?>
</body>
</html>