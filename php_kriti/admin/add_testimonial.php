<?php 
 include('header.php');
 include('sidebar.php');
 ?>
  <div class="content-wrapper">
    <div class="container-fluid">
       <!-- Breadcrumb-->
      <div class="row pt-2 pb-2">
        <div class="col-sm-9">
          <h4 class="page-title">Testimonial</h4>
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="dashboard.php">Dashboard</a></li>
            <li class="breadcrumb-item">Testimonial</li>
            <li class="breadcrumb-item active" aria-current="page">Add Testimonial</li>
         </ol>
       </div>
     </div><!-- End Breadcrumb-->

     <div class="row">
        <div class="col-lg-12">
          <div class="card">
            <div class="card-body">
                <?php
                    if(isset($_POST['submitbtn'])){
                    
                   
                    $testimonial_name=mysqli_real_escape_string($conn,$_POST['testimonial_name']);
                    $designation=mysqli_real_escape_string($conn,$_POST['designation_name']);
                    $description=mysqli_real_escape_string($conn,$_POST['short_description']);
                    
                 
                        $img=$_FILES["image"]["name"]; 
                            $ext = pathinfo($img, PATHINFO_EXTENSION);
                            if( $ext == 'gif' || $ext == 'png' || $ext == 'jpg' || $ext == 'jpeg' )
                            {
                                if($img!='')
                                {
                                    $foll=rand(1111,9999)."_".$img;
                                    $pathh1="testimonial_img/".$foll;                            
                                    $tmpp=$_FILES["image"]["tmp_name"];
                                }
                               
                           $sql = "INSERT INTO `add_testimonial`(`name`, `designation`,`img`,`description`) VALUES ('$testimonial_name','$designation','$foll','$description')";
                            $query = mysqli_query($conn,$sql);
                            if($query){
                            move_uploaded_file($tmpp,$pathh1);
                            ?>
                            
                <div class="alert alert-success alert-dismissible" role="alert">
                    <button type="button" class="close" data-dismiss="alert">×</button>
                    <div class="alert-icon contrast-alert">
                        <i class="icon-info"></i>
                    </div>
                    <div class="alert-message">
                        <span><center><strong> Success !!! Testimonial Inserted Successfully </strong></center></span>
                    </div>
                </div>
                <?php
                echo '<meta http-equiv="refresh" content="2;url= add_testimonial.php">';
                }}
                else{
                ?>
                <div class="alert alert-info alert-dismissible" role="alert">
                    <button type="button" class="close" data-dismiss="alert">×</button>
                    <div class="alert-icon contrast-alert">
                        <i class="icon-info"></i>
                    </div>
                    <div class="alert-message">
                        <span><center><strong> Sorry !!! Please Try Again </strong></center></span>
                    </div>
                </div>
                <?php
                        }
                    }
               
                ?>
                <form id="personal-info" method="post" enctype="multipart/form-data">
                    <h4 class="form-header">
                        <i class="fa fa-file-text-o"></i>
                        ADD Testimonial
                    </h4>
                <div class="form-group row">
                    <label for="input-5" class="col-sm-2 col-form-label">Name</label>
                    <div class="col-sm-10">
                        <input type="text" name="testimonial_name" class="form-control" placeholder=" Name" required>
                    </div>
                </div>
                
                   <div class="form-group row">
                    <label for="input-5" class="col-sm-2 col-form-label">Designation</label>
                    <div class="col-sm-10">
                        <input type="text" name="designation_name" class="form-control" placeholder="Designation Name" required>
                    </div>
                </div>
                <div class="form-group row">
                  <label for="input-5" class="col-sm-2 col-form-label"> Description</label>
                  <div class="col-sm-10">
                    <textarea name="short_description" class="form-control" placeholder="Short description" required></textarea>
                  </div>
                </div>
                
                  <div class="form-group row">
                    <label for="input-5" class="col-sm-2 col-form-label">Image</label>
                    <div class="col-sm-6">
                        <input type="file" name="image" id="img"  class="form-control" placeholder="Upload Image"  onchange="document.getElementById('image').src = window.URL.createObjectURL(this.files[0])" required>
                        <!--<span>Image Size Should Be 120 x 400</span>-->
                    </div>
                    <div class="col-sm-4">
                        <img src="assets/images/product_image.png" id="image" width="250" height="200" class="form-control">
                    </div>
                </div>
                    
                     
          
                <div class="form-footer">
                    <button type="button" onclick="location.reload()" class="btn btn-danger"><i class="fa fa-times"></i> CANCEL</button>
                    <button type="submit" name="submitbtn" class="btn btn-success"><i class="fa fa-check-square-o"></i> SAVE</button>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div><!--End Row-->
    </div><!-- End container-fluid -->
  </div><!-- End content-wrapper-->
  
<?php 
include('footer.php');
?>