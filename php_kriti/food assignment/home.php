<!DOCTYPE html>
<html>
<head>
	<?php include("asset/plugins.php"); ?>
	
	<title>Food assignment</title>


	
		<style type="text/css">

	    
      
     body{
            width: 100%;height: 100vh;
            background-image:url('image/f3.jfif');
            background-repeat: no-repeat;
            background-size: cover;
            color:black;

           }
     
       



       
		main{
       	width: 100%;
       	height:85vh;display: flex;
       	justify-content: center;align-items: center;text-align: center;
       }
       section h3{
       	font-size: 35px; font-weight: 200;letter-spacing: 3px;
       	text-shadow: 2px 2px 2px white;
       }
       section h1{
       	
       	font-size: 60px; font-weight: 700;text-shadow: 2px 2px 2px white;text-shadow: 2px 2px 2px brown;
       }
       section p{
       	font-size: 25px; word-spacing: 3px; color: black;
       	 }
       section a{
       	padding: 12px 30px; border-radius: 4px; outline: none;text-decoration: none;
       	font-weight: 500; text-transform: uppercase; font-size: 13px;
       }
       section .btn1{background: black; color: white;

       }
   </style>
</head>
<body>

	 
	  <header>
      <?php include"asset/nabbar.php" ?>
    	
    	
   
	   
	  

	   
	   	   	<main>
    		<section>
    			<h3>Hasty and tasty!</h3>
    			<h1>Food that you can't resist</h1>
    			<p>people love the Fast food More.A fast-food restaurant consists of a business model that serves food usually prepared in a specific way.  fat Food Items are ready to serve and also the Demanded Products in Every Corner of Country.</p>
    			<a href="aboutus.php" class="btn1">About Us</a>
    		</section>
    	</main>
    </header>
	   

	   <?php include("asset/footer.php"); ?>

</body>
</html>