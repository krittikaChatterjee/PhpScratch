<?php 
 include('header.php');
 include('sidebar.php');
 $edit_id = base64_decode($_REQUEST['id']);
 $fetch_res = mysqli_fetch_assoc(mysqli_query($conn,"SELECT * FROM `blog` WHERE id='$edit_id'"));
 ?>
  <div class="content-wrapper">
    <div class="container-fluid">
       <!-- Breadcrumb-->
      <div class="row pt-2 pb-2">
        <div class="col-sm-9">
          <h4 class="page-title">Manage Blog</h4>
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="dashboard.php">Dashboard</a></li>
            <li class="breadcrumb-item">Blog</li>
            <li class="breadcrumb-item active" aria-current="page"><a href="manage_blog.php">Manage Blog/</li>
             <li class="breadcrumb-item active" aria-current="page"> Blog Description</li>
         </ol>
       </div>
     </div><!-- End Breadcrumb-->

     <div class="row">
        <div class="col-lg-12">
          <div class="card">
            <div class="card-body">
                <?php
                    if(isset($_POST['submitbtn'])){
     
                    $description=mysqli_real_escape_string($conn,$_POST['short_description']);
       
                  $check_query="SELECT * FROM `blog` WHERE `id`!='$edit_id'";
                    $check_data=mysqli_query($conn,$check_query);
                    $check_row=mysqli_num_rows($check_data);
                        if($check_row>0){
                        ?>
                        <div class="alert alert-warning alert-dismissible" role="alert">
                            <button type="button" class="close" data-dismiss="alert">×</button>
                            <div class="alert-icon contrast-alert">
                              <i class="icon-info"></i>
                            </div>
                            <div class="alert-message">
                              <span><center><strong> Sorry!! Blog Description Already Exist.. </strong></center></span>
                            </div>
                        </div>
                        <?php
                            echo '<meta http-equiv="refresh" content="2;url=manage_blog.php">';
                        }
                        else{
                           
                          $sql = "UPDATE `blog` SET `description`='$description' WHERE `id`='$edit_id'";
                         
                            $query = mysqli_query($conn,$sql);
                            if($query){
                            
                           
                            ?>
                            
                <div class="alert alert-success alert-dismissible" role="alert">
                    <button type="button" class="close" data-dismiss="alert">×</button>
                    <div class="alert-icon contrast-alert">
                        <i class="icon-info"></i>
                    </div>
                    <div class="alert-message">
                        <span><center><strong> Success !!! Blog Descriotion Updated Successfully </strong></center></span>
                    </div>
                </div>
                <?php
                echo '<meta http-equiv="refresh" content="2;url= manage_blog.php">';
                }
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
                    }
                 ?>
                <form id="personal-info" method="post" enctype="multipart/form-data">
                    <h4 class="form-header">
                        <i class="fa fa-file-text-o"></i> Blog Description
                    </h4>
                    
                <div class="form-group row">
                  <label for="input-5" class="col-sm-2 col-form-label"> Blog</label>
                  <div class="col-sm-10">
                    <textarea name="short_description" id="editor1" class="form-control" readonly ><?=$fetch_res['description']?></textarea>
                  </div>
                </div>
                    
          
              </form>
            </div>
          </div>
        </div>
      </div><!--End Row-->
    </div><!-- End container-fluid -->
  </div><!-- End content-wrapper-->
  <script src="https://cdn.ckeditor.com/4.16.2/standard/ckeditor.js"></script>  
<script>
    CKEDITOR.replace( 'editor1' );
</script>  
<?php 
include('footer.php');
?>