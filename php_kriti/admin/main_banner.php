<?php 
 include('header.php');
 include('sidebar.php');
 
 $check_sql = mysqli_query($conn,"SELECT * FROM `banner`");
 $fetch_res = mysqli_fetch_assoc($check_sql);
 
 ?>
  <div class="content-wrapper">
    <div class="container-fluid">
       <!-- Breadcrumb-->
      <div class="row pt-2 pb-2">
        <div class="col-sm-9">
          <h4 class="page-title">Manage Main Banner</h4>
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="dashboard.php">Dashboard</a></li>
            <li class="breadcrumb-item active" aria-current="page">Manage Banner</li>
         </ol>
       </div>
     </div><!-- End Breadcrumb-->

     <div class="row">
        <div class="col-lg-12">
          <div class="card">
            <div class="card-body">
                <?php
                    if(isset($_POST['submitbtn']))
                    {
                        // banner 1
                        $file=$_FILES["banner_1"]["name"];
		                $ext = pathinfo($file, PATHINFO_EXTENSION);
	                    if( $ext == 'jpeg' || $ext == 'jpg' ||$ext == 'png' )
	                    {
    		              $foll=rand(1111,9999)."_".$file;
    		              $pathh="category_image/sub_category/".$foll;                
    		              $tmpp=$_FILES["banner_1"]["tmp_name"];
    		              move_uploaded_file($tmpp,$pathh);
		                }
	                    if ($file!='')  {  
	                      $img=$foll;
	                    } else{
	                       $img=$fetch_res['main_image'];
	                    }
	                    //banner 2
	                    
	                    $file=$_FILES["banner_2"]["name"];
		                $ext = pathinfo($file, PATHINFO_EXTENSION);
	                    if( $ext == 'jpeg' || $ext == 'jpg' ||$ext == 'png' )
	                    {
    		              $foll=rand(1111,9999)."_".$file;
    		              $pathh="category_image/sub_category/".$foll;                
    		              $tmpp=$_FILES["banner_2"]["tmp_name"];
    		              move_uploaded_file($tmpp,$pathh);
		                }
	                    if ($file!='')  {  
	                      $img2=$foll;
	                    } else{
	                       $img2=$fetch_res['sub_img1'];
	                    }
	                    
	                    //banner 3
                          
	                    $file=$_FILES["banner_3"]["name"];
		                $ext = pathinfo($file, PATHINFO_EXTENSION);
	                    if( $ext == 'jpeg' || $ext == 'jpg' ||$ext == 'png' )
	                    {
    		              $foll=rand(1111,9999)."_".$file;
    		              $pathh="category_image/sub_category/".$foll;                
    		              $tmpp=$_FILES["banner_3"]["tmp_name"];
    		              move_uploaded_file($tmpp,$pathh);
		                }
	                    if ($file!='')  {  
	                      $img3=$foll;
	                    } else{
	                       $img3=$fetch_res['sub_img2'];
	                    }
	                    
	                   // $heading  = mysqli_real_escape_string($conn,$_REQUEST['heading']);
                    //     $texttt   = mysqli_real_escape_string($conn,$_REQUEST['texttt']);

                        
                        if(mysqli_num_rows($check_sql) > 0){
                            $sql = "UPDATE `banner` SET `main_image`='$img',`sub_img1`='$img2',`sub_img2`='$img3'";
                        } else {
                         
                            $sql="INSERT INTO banner (`main_image`,`sub_img1`,`sub_img2`) VALUES (' $img',' $img2',' $img3')";
                        }
                        
                        $query = mysqli_query($conn,$sql);
                        if($query)
                        {           
                                  
                                    
                ?>
                <div class="alert alert-success alert-dismissible" role="alert">
                    <button type="button" class="close" data-dismiss="alert">×</button>
                    <div class="alert-icon contrast-alert">
                        <i class="icon-info"></i>
                    </div>
                    <div class="alert-message">
                        <span><center><strong> Success !!! Banner Updated Successfully </strong></center></span>
                    </div>
                </div>
                <?php
                      echo '<meta http-equiv="refresh" content="2;url=main_banner.php">';
                  }else{
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
                        }}

                ?>
              <form id="personal-info" method="post" enctype="multipart/form-data">
                <h4 class="form-header">
                  <i class="fa fa-file-text-o"></i>
                  Manage Banner
                </h4>

               
                  
                
                 <div class="form-group row">
                    <!--<div class="col-sm-2">-->
                        <label for="input-5" class="col-sm-2 col-form-label">Banner Image 1</label>
                    <!--</div>-->
                    <div class="col-sm-6">
                        <input type="file" name="banner_1" id="image"  class="form-control" onchange="document.getElementById('img').src = window.URL.createObjectURL(this.files[0])" >
                        <!--<span>Image Size Should Be 120 x 400</span>-->
                    </div>
                    <div class="col-sm-4">
                        <img src="category_image/sub_category/<?=$fetch_res['main_image']?>" id="img" width="100" height="200" class="form-control">
                    </div>
                </div>
                
                 <div class="form-group row">
                    <label for="input-5" class="col-sm-2 col-form-label">Banner Image 2</label>
                    <div class="col-sm-6">
                        <input type="file" name="banner_2" id="sub_image1"  class="form-control" onchange="document.getElementById('image1').src = window.URL.createObjectURL(this.files[0])">
                        
                    </div>
                    <div class="col-sm-4">
                        <img src="category_image/sub_category/<?=$fetch_res['sub_img1']?>" id="image1" width="100" height="200" class="form-control">
                    </div>
                </div>
                
                 <div class="form-group row">
                    <label for="input-5" class="col-sm-2 col-form-label">Banner Image 3</label>
                    <div class="col-sm-6">
                        <input type="file" name="banner_3" id="sub_image2"  class="form-control" onchange="document.getElementById('image2').src = window.URL.createObjectURL(this.files[0])">
                        
                    </div>
                    <div class="col-sm-4">
                        <img src="category_image/sub_category/<?=$fetch_res['sub_img2']?>"id="image2" width="100" height="200" class="form-control">
                    </div>
                </div>
                

                

                <div class="form-footer">
                    <button type="button" class="btn btn-danger"><i class="fa fa-times"></i> CANCEL</button>
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
<script src="https://cdn.ckeditor.com/4.16.1/standard/ckeditor.js"></script>
<script>
    CKEDITOR.replace( 'editor1' );
</script>
