<meta name="viewport" content="width=device-width,initial-scale=1.0">
	<!--Add Boostrap-4-->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

<style type="text/css">
    body{
       background-color:lightblue;
        }

</style>
<?php 
#echo"success";
  session_start();
 /* echo "Posted Data :<br/>";
  print_r($_POST);
  echo "Captured Session Data :<br/>";
  print_r($_SESSION);*/
  if(isset($_POST['btnSubmit']))
              
             {
              	$fileName = $_FILES['image']['name'];
               $fileType = $_FILES['image']['type'];
               $fileTmp  = $_FILES['image']['tmp_name'];
               $fileSize = $_FILES['image']['size']; //bytes
              
               if($fileType =='image/jpeg' || $fileType=='image/png' || $fileType =='image/gif' || $fileType=='image/jpg')             
               {
                if($fileSize<=600*1024)
              
               {
                if(!file_exists("uploads")) mkdir("uploads");
               move_uploaded_file($fileTmp,"uploads/".$fileName);
              
               }
              }
          
               
?>

<table class="table table-bordered table-hover ">
	  <tr class="table-secondary">
	  	
	  	   <th>Name </th>
	  	   <th>Guardian's Name</th>
	  	   <th>Address</th>
	  	   <th>Phone</th>
	  	   <th>Email</th>
	  	   <th>Dob</th>
	  	   <th>Venue</th>
	  	   <th>Category</th>
	  	   <th>Board</th>
	  	   <th>Year of Passing</th>
	  	   <th>Marks</th>
	  	   
	  	    <th>Image</th>
	  	
	  </tr>
	  <tr >
	  	 <td><?php echo $_SESSION['NAME']; ?></td>
	  	 <td><?php echo $_SESSION['GNAME']; ?></td>
	  	 <td><?php echo $_SESSION['ADDRESS']; ?></td>
	  	 <td><?php echo $_SESSION['PHONE']; ?></td>
	  	 <td><?php echo $_SESSION['EMAIL']; ?></td>
	  	 <td><?php echo $_SESSION['DOB']; ?></td>
	  	 <td><?php echo $_SESSION['VENUE']; ?></td>
	  	  <td><?php echo $_SESSION['CATEGORY']; ?></td>
	  	   <td><?php echo $_POST['a1']; ?></td>
	  	   <td><?php echo $_POST['a2']; ?></td>
	  	   <td><?php echo $_POST['a3']; ?></td>         
	  	    <td><img src="<?php echo "uploads/". $fileName; ?> "></td>
             <?php
                  }
              ?>  
	  </tr>
	  </tr>
	  </tr>
</table>

<a href="firstpage.php">Back to Main Page</a>

<?php 
  //after showing data , delete all sessions
    session_destroy();
?>