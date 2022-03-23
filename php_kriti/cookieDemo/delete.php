<!DOCTYPE html>
<html>
<head>
	<title>welcome</title>
</head>
<body>
	 <?php
            setcookie('USER',NULL,time()-20);
            //redirect this page to view.php
            header("location:view.php");
            
	  ?>

</body>
</html