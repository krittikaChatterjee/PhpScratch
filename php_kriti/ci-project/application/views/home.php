<!DOCTYPE html>
<html>
<head>
	<?php include_once("asset/plugins.php");?>
	
	<title>Medicine Order</title>


	
		<style type="text/css">
    /* Make the image fully responsive */
  .carousel-inner img {
    width: 100%;
    height: 100%;
  }

	    
      
     body{
            width: 100%;height: 100vh;
            background-image:url('<?php echo base_url();?>image/home2.jpg');
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
       img {
  border-radius: 50%;
}
   </style>
</head>
<body>
  <?php 
  $data=$this->session->all_userdata();
  /*print'<pre>';
  print_r($data);*/
  //echo $data['USER']['name'];
  if(isset($data['USER']['name'])){
  ?>
  <a href="<?php echo base_url();?>index.php/home/profile">
  <?php echo $data['USER']['name']; ?>
</a>
  <a href="<?php base_url(); ?>index.php/home/logout">logout</a>

<?php } ?>


	 
	  <header>
      <?php include_once("asset/nabbar.php");?>

      	   	   	<main>
    		<section>
          
    			<h3>Medicine at your Door Step!</h3>
    			<h1>Whereever the art of Medicine is loved,there is also a love of Humanity</h1>
         
        </section>
    			
  <!-- The slideshow -->
  <div class="container">
  <div id="myslideshow" class="carousel slide" data-ride="carousel">
    <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="<?php echo base_url();?>image/cov1.jpg"  width="100" height="100">
       <div class="carousel-caption"><h4 style="color:MAROON">MEDICINE AT YOUR DOOR STEP</h4>
        <p style="color:black">Let food be thy medicine and medicine be thy food</p></div>
    </div>
    <div class="carousel-item">
      <img src="<?php echo base_url();?>image/cov2.jpg"  width="1100" height="500">
       <div class="carousel-caption"><h4 style="color:MAROON">MEDICINE AT YOUR DOOR STEP</h4>
        <p style="color:black">Let food be thy medicine and medicine be thy food</p></div>
    </div>
    <div class="carousel-item">
      <img src="<?php echo base_url();?>image/cov3.jpg" width="1100" height="500">
       <div class="carousel-caption"><h4 style="color:MAROON">ORDER ONLINE MEDICINE</h4>
        <p style="color:black">Declare the past, diagnose the present, foretell the future</p></div>
    </div>
  </div>
</div>
</div>

  
  
               
            </div>
             
          </section>












    			
    		
    	</main>
    </header>
	 
	   

</body>
</html>