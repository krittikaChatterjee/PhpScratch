<!DOCTYPE html>
<html>
<head>
	<title>Welcome</title>
</head>
<body>

	   <h1>Please Fill Up the Form:</h1>
      <form method="post">
	   Name : <input type="text" name="t1" required>
	   <button name="btn" value="submit">Submit</button>
	</form>

	   <?php
           if(isset($_POST['btn'])){
           	  $name = $_POST['t1'];

           	  //creating a cookie
           	  //this cookie is going to persists for next 20 seconds.
           	  setcookie('USER',$name,time()+40);

           	  echo "Cookie Created Successfully !";
              echo "<a href='view.php'>View</a>";
           }
	    ?>

</body>
</html>