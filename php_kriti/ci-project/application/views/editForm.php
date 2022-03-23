<!DOCTYPE html>
<html>
<head>
  <meta name="viewport" content="widdth=device-width,initial-scale=1.0">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <title>welcome</title>
</head>
<body>
<div class="container">
  <header><h1>edit form</h1></header>
  <form method="post" action="<?php echo base_url();?>index.php/Products/editForm">
  <div class="form-group">
    <label>Medicine Name :</label>
    <input type="text" name="t11" required class="form-control" value="<?php echo $rec[0]->m_name; ?>">
  </div>
  <div class="form-group">
    <label>Batch id :</label>
    <input type="number" name="t22" required class="form-control" value="<?php echo $rec[0]->batch_id; ?>">
  </div>
  <div class="form-group">
    <label>Description :</label>
    <textarea type="text" name="t33" required class="form-control" cols="6" rows="5" minlength="20" maxlength="200"><?php echo $rec[0]->description;?></textarea>
  </div>
  <div class="form-group">
    <label>Expiry Date :</label>
    <input type="text" name="t44" required="" class="form-control" value="<?php  echo $rec[0]->expiry_date; ?>">
  </div>
  <div class="form-group">
    <label>Medicine price :</label>
    <input type="number" name="t55" required="" class="form-control" value="<?php echo $rec[0]->m_price; ?>">
  </div>
  <div class="form-group">
              <!--adding hidden field-->
              <input type="hidden" name="hid" value="<?php echo $rec[0]->m_id; ?>"> 
  
    <button  name="btnUpdate" value ="update" class="btn btn-sm btn-primary">update</button>
  </div>
</form>
   
</div>
</body>
</html>
