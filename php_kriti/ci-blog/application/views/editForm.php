<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Welcome</title>
</head>
<body>
       
      <div class="container">
          <header class="modal-header"><h2>Edit Info:</h2></header>
          <form method="post" action="<?php echo base_url();?>index.php/home/editForm">
          <div class="form-group">
              <label>Name :</label>
              <input type="text" name="t11" required class="form-control" value="<?php echo $userInfo[0]->cname;?>">
          </div>
          <div class="form-group">
              <label>Phone :</label>
              <input type="number" name="t22" required class="form-control" value="<?php echo $userInfo[0]->phone; ?>">
          </div>
          <div class="form-group">
              <label>Email :</label>
              <input type="text" name="t33" required class="form-control" value="<?php echo $userInfo[0]->email;?>">
          </div>
          <div class="form-group">
              <!--adding hidden field-->
              <input type="hidden" name="hid" value="<?php echo $userInfo[0]->id; ?>">
              <button name="btnUpdate" value="update" class="btn btn-sm btn-secondary">Update</button>
          </div>
      </form>
      </div>

</body>
</html>
