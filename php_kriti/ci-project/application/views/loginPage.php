<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Login !</title>

<style type="text/css">

      
      
     body{
            width: 100%;height: 100vh;
            background-image:url('<?php echo base_url();?>image/home2.jpg');
            background-repeat: no-repeat;
            background-size: cover;
            color:black;

           }
           #div{
           
           background-color:  #194CE1 ;
           }
    </style>


      
      
     
</head>
<body>

      <div id="div" class="container border" style="height: 300px; width: 400px; margin-top: 200px;">
          <header class="modal-header"><h2>SignIN </h2></header>
          <form method="post" action="<?php echo base_url();?>index.php/home/login">
          <div class="form-group">
              <label>Username :</label>
              <input type="text" name="uname" required class="form-control" placeholder="Enter your email id">
          </div>
          <div class="form-group">
              <label>Password :</label>
              <input type="password" name="pass" required class="form-control" placeholder="Enter your password">
          </div>
          <div class="form-group">
              <button name="btn" value="login" class="btn btn-sm btn-danger">Login</button>
          </div>
           </form>
           <?php echo $this->session->flashdata('msg'); ?>

         </div>

          
      

</body>
</html>



