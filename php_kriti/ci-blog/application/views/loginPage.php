<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Login !</title>
</head>
<body>

      <div class="container">
          <header class="modal-header"><h2>SignIN </h2></header>
          <form method="post" action="<?php echo base_url();?>index.php/home/login">
          <div class="form-group">
              <label>Username :</label>
              <input type="text" name="uname" required class="form-control">
          </div>
          <div class="form-group">
              <label>Password :</label>
              <input type="password" name="pass1" required class="form-control">
          </div>
          <div class="form-group">
              <button name="btnLogin" value="login" class="btn btn-sm btn-danger">Login</button>
          </div>
           </form>

           <?php echo $this->session->flashdata('msg'); ?>
      </div>

</body>
</html>



