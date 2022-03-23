<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
	<title>Welcome</title>
	<!--Adding jQuery CDN-->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script type="text/javascript">
	$(document).ready(function(){
		console.log("jQuery Loaded");
		var count =0;
		let timer=setInterval(function(){
            if(count == 10){
                clearInterval(timer);
            	window.location.href='logout.php';
            }
            console.log(`Timer :${count}`);
			count++;
		},1000);

		$(this).keypress(function(){ count =0;});
		$(this).mousemove(function(){ count =0;});


	});
</script>
</head>
<body>
     <?php
            if(isset($_SESSION['USER'])){
      ?>
	   <div style="float: right;">
	   	  Welcome <?php echo $_SESSION['USER']; ?>

	   	  <a href="logout.php">Logout</a>
	   </div>

	<?php }
        else{
        	header("location:index.php");
        }
	 ?>

</body>
</html>