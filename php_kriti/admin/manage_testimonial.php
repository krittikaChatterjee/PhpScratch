<?php include('header.php'); ?>
<?php include('sidebar.php'); ?>
  <div class="content-wrapper">
    <div class="container-fluid">
      <!-- Breadcrumb-->
      <div class="row pt-2 pb-2">
        <div class="col-sm-9">
          <h4 class="page-title">Manage  Testimonial</h4>
          <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="dashboard.php">Dashboard</a></li>
              <li class="breadcrumb-item"> Testimonial</li>
              <li class="breadcrumb-item active" aria-current="page">Manage Testimonial</li>
           </ol>
       </div>
      </div><!-- End Breadcrumb-->

      <div class="row">
        <div class="col-lg-12">
          <div class="card">
            <div class="card-header"><i class="fa fa-table"></i> Manage Testimonial</div>
            <div class="card-body">
              <div class="table-responsive">
                <table id="default-datatable" class="table table-bordered">
                  <thead>
                    <tr>
                        <th>Sl. Number</th>
                        <th>Name</th>
                        <th>DESIGNATION</th>
                        <th>DESCRIPTION</th>
                        <th>IMAGE</th>
                        <th>Edit</th>
                        <th>Delete</th>
                    </tr>
                  </thead>
                  <tbody>
                  <?php
                    if(isset($_REQUEST['de']))
                    {
                      $del_id=base64_decode($_REQUEST['de']);
                      $d_query = mysqli_query($conn,"SELECT * FROM `add_testimonial` WHERE `id`='$del_id'");  
                       $d_result = mysqli_fetch_assoc($d_query);
                       unlink("testimonial_img/".$d_result['img']);
                      $delete_query=mysqli_query($conn,"DELETE FROM `add_testimonial` WHERE `id`='$del_id'");
                      if($delete_query)
                      {
                       
                        echo '<script>swal("Successful", "You have successfully deleted", "success")</script>';
                        echo "<script>
                                setTimeout(function() {
                                    window.location='manage_testimonial.php'
                                }, 3000);
                            </script>";
                      }
                    }
                    $c=1;
                    $sql="SELECT * FROM add_testimonial ORDER BY id DESC";
                    $queary=mysqli_query($conn,$sql);
                    while($row=mysqli_fetch_assoc($queary))
                    {
                      $id=$row['id'];
                      $desc=$row['description'];
                  ?>
                    <tr>
                      <td><?php echo $c;  ?></td>
                      <td><?php echo $row['name'];  ?></td>
                      <td><?php echo $row['designation'];  ?></td>
                      <!--<td><?php echo $row['description'];  ?></td>-->
                       <td><?php echo wordwrap( $desc,60,"<br>\n");  ?></td>
                      <td><img src="testimonial_img/<?= $row['img']?>" style="height:100px; width:150px;"></td>
                      <td><a href="edit_testimonial.php?id=<?php echo base64_encode($id); ?>"><i aria-hidden="true" class="fa fa-edit"></i></td>
                      <td><a href="manage_testimonial.php?de=<?php echo base64_encode($id); ?>"><i aria-hidden="true" class="fa fa-trash"></i></td>
                    </tr>
                  <?php
                      $c++;
                    }

                  ?>
                  </tbody>
                  <tfoot>
                    <tr>
                        <th>Sl. Number</th>
                       <th>Name</th>
                        <th>DESIGNATION</th>
                        <th>DESCRIPTION</th>
                        <th>IMAGE</th>
                        <th>Edit</th>
                        <th>Delete</th>
                    </tr>
                  </tfoot>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div><!-- End Row-->
    </div><!-- End container-fluid-->
  </div><!-- End content-wrapper-->

 
<?php include('footer.php'); ?>