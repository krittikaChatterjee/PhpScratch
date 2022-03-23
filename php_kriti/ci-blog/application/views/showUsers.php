<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
  
 <?php
          $data = $this->session->all_userdata();
          if(isset($data['USER']['name'])){


    ?>
    <div style="float:right;">
        Welcome <?php echo $data['USER']['name'];?>
        <a href="<?php echo base_url();?>index.php/home/logout">Logout</a>
    </div>

   <?php
        }
        else{
            redirect(base_url()."index.php/home/login");
        }
    ?>

      <?php 
          echo $this->session->flashdata('msg');
      ?>
	<table class="table table-dark">
            <tr>
                  <th>Action</th>
                  <th>Name</th>
                  <th>Phone</th>
                  <th>Email</th>
                  <th>Pic</th>
                  <th>Created</th>
            </tr>
            <?php
              foreach($users as $u){
             ?>
            <tr>
                  <td><a href="<?php echo base_url();?>index.php/Home/del/<?php echo $u->id;?>" onclick="return confirm('do you want to delete this record?');">Delete</a>
                      <a class="btn btn-outline-success btn-sm" href="<?php echo base_url();?>index.php/home/editForm/<?php echo $u->id;?>">Edit</a>
                  </td>
                  <td><?php echo $u->cname;?></td>
                  <td><?php echo $u->phone;?></td>
                  <td><?php echo $u->email;?></td>
                   <td><img src="<?php echo base_url().$u->pic;?>" height="48px" width="48px"/></td>
                  <td><?php echo $u->created; ?></td>
            </tr>
          <?php } ?>
      </table>

</body>
</html>


