<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
	<title>Welcome</title>
</head>
<body>
	
     <?php
            if(isset($_SESSION['USER'])){
      ?>
	   <div style="float: right;">
	   	  Welcome <?php echo $_SESSION['USER'];
	   	                 echo $_SESSION['login_time'] ;?>

	   	  <a href="logout.php">Logout</a>
	   </div>

	<?php }
        else{
        	header("location:index.php");
        }
	 ?>

</body>
</html>