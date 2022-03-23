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
          <h4 class="page-title">Edit Blog</h4>
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="dashboard.php">Dashboard</a></li>
            <li class="breadcrumb-item">Blog</li>
            <li class="breadcrumb-item active" aria-current="page">Edit Blog</li>
         </ol>
       </div>
     </div><!-- End Breadcrumb-->

     <div class="row">
        <div class="col-lg-12">
          <div class="card">
            <div class="card-body">
                <?php
                    if(isset($_POST['submitbtn'])){
                   
                   
                    $blog_title=mysqli_real_escape_string($conn,$_POST['blog_title']);
                    $description=mysqli_real_escape_string($conn,$_POST['short_description']);
                     date_default_timezone_set('Asia/Kolkata'); 
                    $datee =date("d-M-Y ");
                     
                   $check_query="SELECT * FROM `blog` WHERE `title`='$blog_title' AND `id`!='$edit_id'";
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
                              <span><center><strong> Sorry!! Blog Already Exist.. </strong></center></span>
                            </div>
                        </div>
                        <?php
                            echo '<meta http-equiv="refresh" content="2;url=manage_blog.php">';
                        }
                        else{
                            $img=$_FILES["image"]["name"]; 
                            $ext = pathinfo($img, PATHINFO_EXTENSION);
                            if( $ext == 'gif' || $ext == 'png' || $ext == 'jpg' || $ext == 'jpeg' )
                            {
                                if($img!='')
                                {
                                    $foll=rand(1111,9999)."_".$img;
                                    $pathh1="blog_img/".$foll;                            
                                    $tmpp=$_FILES["image"]["tmp_name"];
                                    move_uploaded_file($tmpp,$pathh1);
                                    
                                }
                            }
                                if ($file!='')  {
                                    $img=$foll;
                                 } else {
                                      $img=$fetch_res['thumbnail_img'];
                                   } 
                            
                                
                                //main image
                            $img1=$_FILES["image1"]["name"]; 
                            $ext1 = pathinfo($img1, PATHINFO_EXTENSION);
                            if( $ext1 == 'gif' || $ext1 == 'png' || $ext1 == 'jpg' || $ext1 == 'jpeg' )
                            {
                                if($img1!='')
                                {
                                    $foll1=rand(1111,9999)."_".$img1;
                                    $pathh2="blog_img/".$foll1;                            
                                    $tmpp1=$_FILES["image1"]["tmp_name"];
                                     move_uploaded_file($tmpp1,$pathh2);
                                }
                            }
                                if ($file!='')  {
                                $img1=$foll1;
                            } else {
                                $img1=$fetch_res['main_img'];
                            } 
                               //main image ends
                               
                              $sql = "UPDATE `blog` SET `thumbnail_img`='$img',`main_img`='$img1',`title`='$blog_title',`description`='$description',`date`=' $datee' WHERE `id`='$edit_id'";
                         
                            $query = mysqli_query($conn,$sql);
                            if($query){
                            
                           
                            ?>
                            
                <div class="alert alert-success alert-dismissible" role="alert">
                    <button type="button" class="close" data-dismiss="alert">×</button>
                    <div class="alert-icon contrast-alert">
                        <i class="icon-info"></i>
                    </div>
                    <div class="alert-message">
                        <span><center><strong> Success !!! Blog Updated Successfully </strong></center></span>
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
                        <i class="fa fa-file-text-o"></i>
                        Edit Blog
                    </h4>
              
                  <div class="form-group row">
                    <label for="input-5" class="col-sm-2 col-form-label">Thumbnail Image</label>
                    <div class="col-sm-6">
                        <input type="file" name="image" id="img"  class="form-control" placeholder="Upload Thumbnail Image"  onchange="document.getElementById('image').src = window.URL.createObjectURL(this.files[0])" >
                        <!--<span>Image Size Should Be 120 x 400</span>-->
                    </div>
                    <div class="col-sm-4">
                        <img src="blog_img/<?=$fetch_res['thumbnail_img']?>" id="image" width="250" height="200" class="form-control">
                    </div>
                </div>
                
                
                  <div class="form-group row">
                    <label for="input-5" class="col-sm-2 col-form-label">Main Image</label>
                    <div class="col-sm-6">
                        <input type="file" name="image1" id="img1"  class="form-control" placeholder="Upload Main Image"  onchange="document.getElementById('image1').src = window.URL.createObjectURL(this.files[0])" >
                        <!--<span>Image Size Should Be 120 x 400</span>-->
                    </div>
                    <div class="col-sm-4">
                        <img src="blog_img/<?=$fetch_res['main_img']?>" id="image1" width="250" height="200" class="form-control">
                    </div>
                </div>
                    
                <div class="form-group row">
                    <label for="input-5" class="col-sm-2 col-form-label">Blog Title</label>
                    <div class="col-sm-10">
                        <input type="text" name="blog_title" class="form-control" value="<?=$fetch_res['title']?>" required>
                    </div>
                </div>
                    
                <div class="form-group row">
                  <label for="input-5" class="col-sm-2 col-form-label"> Write Blog</label>
                  <div class="col-sm-10">
                    <textarea name="short_description" id="editor1" class="form-control"  required><?=$fetch_res['description']?></textarea>
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
  <script src="https://cdn.ckeditor.com/4.16.2/standard/ckeditor.js"></script>  
<script>
    CKEDITOR.replace( 'editor1' );
</script>  
<?php 
include('footer.php');
?>