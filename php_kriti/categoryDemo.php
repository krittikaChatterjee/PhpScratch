
<!DOCTYPE html>
<html>
<head>
   <meta charset="utf-8">
   <title>product</title>
   <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" rel="stylesheet" />
</head>
<style type="text/css">
*{
  margin: 0px;
  padding: 0px;
  box-sizing: border-box;
}
   
   body {
  margin: 0;
  font-family: "Lato", sans-serif;
  width: 100%;height: 100vh;
            background-image:url('<?php echo base_url();?>image/back2.jpg');
            background-repeat: no-repeat;
            background-size: cover;
            color:black;

  }

.sidebar {
  margin: 0;
  padding: 0;
  width: 200px;
  background-color: #9fe6a0;
  position: fixed;
  height: 100%;
  overflow: auto;
}

.sidebar a {
  display: block;
  color: black;
  padding: 16px;
  text-decoration: none;
}
 
.sidebar a.active {
  background-color: #125d98;
  color: white;
}

.sidebar a:hover:not(.active) {
  background-color: #3c8dad;
  color: white;
}

div.content {
  margin-left: 200px;
  padding: 1px 16px;
  height: 1000px;
}

@media screen and (max-width: 700px) {
  .sidebar {
    width: 100%;
    height: auto;
    position: relative;
  }
  .sidebar a {float: left;}
  div.content {margin-left: 0;}
}

@media screen and (max-width: 400px) {
  .sidebar a {
    text-align: center;
    float: none;
  }
}

</style>

<body>
  
  <?php if($rec){
    print_r($rec);
    foreach ($rec as $key) {
        echo ($key->m_id);
        // code...
    }
  }?>
  <div class="sidebar" style="text-align:center;border:2px #f4f9f9;box-shadow: 10px 10px 5px #aaaaaa;">
  <a href="<?php echo base_url();?>index.php/home/aboutus" style="color:white;text-align: center;font-weight: bold;background-color: #01937c;">PHARMA HOME </a>
  <a class="active" href="">VIEW ORDER</a>
  <a href="">VIEW PROFILE</a>
  <a href="">VACCINE AND OXYGEN</a>
  
  <a href="<?php echo base_url();?>index.php/home/login"style="background-color:#fb3640;margin-top: 50%;font-weight: bold;color:#faf3f3">LOGIN</a>
  
  
<body>
    <?php  echo $this->session->flashdata('msg');?>
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
</body>
</html>
