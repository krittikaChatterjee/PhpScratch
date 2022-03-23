<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<?php include_once("asset/plugins.php");?>
	
	<title></title>
	<style type="text/css">
		div.content {
  margin-left: 200px;
  padding: 1px 16px;
  height: 1000px;}


     body{
            width: 100%;height: 100vh;
            background-image:url('<?php echo base_url();?>image/home2.jpg');
            background-repeat: no-repeat;
            background-size: cover;
            color:black;

           }

  


	</style>
</head>
<body>

	<?php  echo $this->session->flashdata('msg');?>
	<?php include_once("asset/nabbar.php");?>

	<div class="content" ><h1 align="center">HEALTH PRODUCT</h1>
	<div class="container">
		<div class="row">
		<?php
if(isset($rec)){
#print_r($users);
foreach ($rec as $key) {
	/*print'<pre>';
	print_r($key);
	echo $key->m_id;*/
	?>
	
	<div class="col-lg-3 col-md-3 col-sm-12">		
  <h2></h2>
  <p></p>
  <form method="post" action="<?php echo base_url();?>index.php/Products/getProduct">
  <div class="card" >
      <img class="card-img-top" src="<?php echo base_url();?><?php echo $key->m_pic?>" alt="Card image" height="200px" width="100px">
       <div class="card-body">
          <h4 class="card-title"></h4>
             <p class="card-text"><?php echo $key->description?></p>
               <input type="hidden" name="order_id" value="<?php echo $key->m_id;?>">
                  <button name="submit" class="btn btn-sm btn-success">Buy Now</button>
       </div>
    </div> 
</form>
    </div> 

 
	<?php
      }}
     ?>	
 </div>
</div>
</div>
     
</body>


</html>