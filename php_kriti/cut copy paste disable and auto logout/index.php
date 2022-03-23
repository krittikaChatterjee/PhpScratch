<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width,initial-scale=1.0">
	<!--add Boostrap-4-->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<!--Adding jQuery CDN-->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script type="text/javascript">
	$(document).ready(function(){
		console.log('jQuery Loaded');
		$(this).on('cut copy paste',function(e){
			alert('This function is not allowed');
			e.preventDefault();

		});
		$(this).on('contextmenu',function(){return false;})
	});
</script>
	<title>Welcome</title>
</head>
<body>
	<style type="text/css">
    body{
       background-color:lightblue;
        }

</style> 

	   <div class="container">
	   	<header><h1>SignIN</h1></header>
	   	<form method="post">
	   	<div class="form-group">
	   		<label>Username :</label>
	   		<input type="text" name="uname" required class="form-control">
	   	</div>
	   	<div class="form-group">
	   		<label>Password :</label>
	   		<input type="password" name="pwd" required class="form-control">
	   	</div>
	   	<div class="form-group">
	   		<button name="btnLogin" value="login" class="btn btn-sm btn-primary">Login</button>
	   	</div>
	   </form>
	   <?php 
	      if(isset($_POST['btnLogin'])){
	      	  $userName = $_POST['uname'];
	      	  $passWord = $_POST['pwd'];

	      	  if($userName =='krittika' && $passWord =='chatterjee'){
                     //store some user's information using session
                 $_SESSION['USER'] = $userName;
                 $_SESSION['IP']   = $_SERVER['REMOTE_ADDR'];
                 date_default_timezone_set('Asia/Kolkata');
                 $_SESSION['login_time'] = date('d-m-y h:i:sA');

                 header("location:welcome.php");

	      	  }else{ 
                     echo "<div class='alert alert-danger'>Invalid Username or Password ...</div>";
	      	  }
	      }
	    ?>
	   </div>



</body>
</html>