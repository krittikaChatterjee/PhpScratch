<?php
include('header.php');
include('sidebar.php');
$edit_id = base64_decode($_REQUEST['id']);
$fetch_res = mysqli_fetch_assoc(mysqli_query($conn,"SELECT * FROM `product` WHERE `product_id` = '$edit_id'"));
// include('connection.php');
 ?>
<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
<style>
.marg{
margin: 0 16px;
}
</style>
<div class="content-wrapper">
    <div class="container-fluid">
      <div class="row pt-2 pb-2">
        <div class="col-sm-9">
          <h4 class="page-title">Products</h4>
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="dashboard.php">Dashboard</a></li>
            <li class="breadcrumb-item">Products</li>
            <li class="breadcrumb-item active" aria-current="page">Edit Product</li>
         </ol>
       </div>
     </div><!-- End Breadcrumb-->

     <div class="row">
        <div class="col-lg-12">
          <div class="card">
            <div class="card-body">
                <?php
                    if(isset($_POST['submitbtn'])){
                        $category_id=mysqli_real_escape_string($conn,$_POST['category_id']);
                        $sub_category =mysqli_real_escape_string($conn, $_POST['sub_category']);
                        $product_name =mysqli_real_escape_string($conn, $_POST['product_name']);
                        $gst_percentage = mysqli_real_escape_string($conn,$_POST['gst_percentage']);
                        $product_short_description = mysqli_real_escape_string($conn, $_POST['product_short_description']);
                        $prd_long_desc = mysqli_real_escape_string($conn, $_POST['prd_long_desc']);

                        
		                
		                // prd_img_1
                        $file1=$_FILES["prd_img_1"]["name"];
		                $ext1 = pathinfo($file1, PATHINFO_EXTENSION);
	                    if( $ext1 == 'jpeg' || $ext1 == 'jpg' ||$ext1 == 'png' )
	                    {
    		              $foll1=rand(1111,9999)."_".$file1;
    		              $pathh1="product_image/".$foll1;                
    		              $tmpp1=$_FILES["prd_img_1"]["tmp_name"];
    		              move_uploaded_file($tmpp1,$pathh1);
		                } if($file1 == '') {
		                    $upload_to_be1 = $fetch_res['image1'];
		                } else {
		                    $upload_to_be1 = $foll1;
		                }

		                // prd_img_2
                        $file2=$_FILES["prd_img_2"]["name"];
		                $ext2 = pathinfo($file2, PATHINFO_EXTENSION);
	                    if( $ext2 == 'jpeg' || $ext2 == 'jpg' ||$ext2 == 'png' )
	                    {
    		              $foll2=rand(1111,9999)."_".$file2;
    		              $pathh2="product_image/".$foll2;                
    		              $tmpp2=$_FILES["prd_img_2"]["tmp_name"];
    		              move_uploaded_file($tmpp2,$pathh2);
		                } if($file2 == '') {
		                    $upload_to_be2 = $fetch_res['image2'];
		                } else {
		                    $upload_to_be2 = $foll2;
		                }

		                //prd_img_3
		                $file3=$_FILES["prd_img_3"]["name"];
		                $ext3 = pathinfo($file3, PATHINFO_EXTENSION);
	                    if( $ext3 == 'jpeg' || $ext3 == 'jpg' ||$ext3 == 'png' )
	                    {
    		              $foll3=rand(1111,9999)."_".$file3;
    		              $pathh3="product_image/".$foll3;                
    		              $tmpp3=$_FILES["prd_img_3"]["tmp_name"];
    		              move_uploaded_file($tmpp3,$pathh3);
		                } if($file3 == '') {
		                    $upload_to_be3 = $fetch_res['image3'];
		                } else {
		                    $upload_to_be3 = $foll3;
		                }

		              //  prd_img_4
		                $file4=$_FILES["prd_img_4"]["name"];
		                $ext4 = pathinfo($file4, PATHINFO_EXTENSION);
	                    if( $ext4 == 'jpeg' || $ext4 == 'jpg' ||$ext4 == 'png' )
	                    {
    		              $foll4=rand(1111,9999)."_".$file4;
    		              $pathh4="product_image/".$foll4;                
    		              $tmpp4=$_FILES["prd_img_4"]["tmp_name"];
    		              move_uploaded_file($tmpp4,$pathh4);
		                } if($file4 == '') {
		                    $upload_to_be4 = $fetch_res['image4'];
		                } else {
		                    $upload_to_be4 = $foll4;
		                }
	                   

                        $check_query="SELECT * FROM `product` WHERE `product_name`='$product_name' AND `category_id`= '$category_id' AND `sub_cat_id`='$sub_category' AND product_id!= '$edit_id'";
                        $check_data=mysqli_query($conn,$check_query);
                        $check_row=mysqli_num_rows($check_data);
                        if($check_row>0)
                        {
                        ?>
                        <div class="alert alert-warning alert-dismissible" role="alert">
                            <button type="button" class="close" data-dismiss="alert">×</button>
                            <div class="alert-icon contrast-alert">
                              <i class="icon-info"></i>
                            </div>
                            <div class="alert-message">
                              <span><center><strong> Sorry!! Product Already Exist.. </strong></center></span>
                            </div>
                        </div>
                        <?php
                            echo '<meta http-equiv="refresh" content="2;url=manage_product.php">';
                        }
                        else
                        {
                            
                            // product Table Insert
                            $prd_insertQry = "UPDATE `product` SET `category_id`='$category_id',`sub_cat_id`='$sub_category',`product_name`='$product_name',`gst`='$gst_percentage',`product_description`='$product_short_description',`prd_long_desc`='$prd_long_desc',`image1`='$upload_to_be1',`image2`='$upload_to_be2',`image3`='$upload_to_be3',`image4`='$upload_to_be4' WHERE `product_id`='$edit_id'";
                            
                            $prd_insertSql = mysqli_query($conn,$prd_insertQry);
                            
                            ?>
                            <div class="alert alert-success alert-dismissible" role="alert">
                                <button type="button" class="close" data-dismiss="alert">×</button>
                                <div class="alert-icon contrast-alert">
                                    <i class="icon-info"></i>
                                </div>
                                <div class="alert-message">
                                    <span><center><strong> Success !!! Product Updated Successfully </strong></center></span>
                                </div>
                            </div>
                            <?php
                            echo '<meta http-equiv="refresh" content="2;url=manage_product.php">';
                        }    
                    }
                ?>
              <form id="personal-info" method="post" enctype="multipart/form-data">
                <h4 class="form-header">
                  <i class="fa fa-file-text-o"></i>
                  EDIT PRODUCT   
                </h4>

                <div class="form-group row">
                    <div class="col-sm-4">
                        <label for="input-5" class="col-form-label">Category</label>
                        <!--<div class="col-sm-10">-->
                            <select class="form-control" name="category_id" id="categoryid" required>
                              <option value="0">--Select Category--</option>
                              <?php
                              $select_query=mysqli_query($conn,"SELECT * FROM `category`");
                              while($select_fetch=mysqli_fetch_assoc($select_query))
                              {
                                  $category_name=$select_fetch['cat_name'];
                                  $category_id=$select_fetch['cat_id'];
                                  ?>
                                  <option <?=(($fetch_res['category_id']==$category_id) ? 'selected' : '')?> value="<?php echo $category_id; ?>"><?php echo $category_name; ?></option>
                                  <?php
                              }
                              ?>
                            </select>
                        <!--</div>-->
                    </div>  
                    <div class="col-sm-4">
                        <label for="input-5" class="col-form-label">Sub-Category</label>
                        <?php
                            $subCatRes = mysqli_fetch_assoc(mysqli_query($conn,"SELECT * FROM `sub_category` WHERE sub_id = '".$fetch_res['sub_cat_id']."'"));
                        ?>
                            <select class="form-control" name="sub_category" id="sub_category" >
                                <option value="<?=$fetch_res['sub_cat_id']?>"><?=$subCatRes['sub_name']?></option>
                                
                            </select>
                        <!--</div>-->
                    </div>
                    <div class="col-sm-4">
                        <label for="input-5" class="col-form-label">Product Name</label>
                        <!--<div class="col-sm-10">-->
                            <input type="text" name="product_name" id="product_name" class="form-control" value="<?php echo $fetch_res['product_name']; ?>" required>
                        <!--</div>-->
                    </div>
                </div>

               
                <div class="form-group row">
                    <label for="input-5" class="col-sm-2 col-form-label">GST Percentage</label>
                    <div class="col-sm-10">
                        <select class="form-control" name="gst_percentage" required>
                            <option value="">--Select GST--</option>
                            <option <?=(($fetch_res['gst'] == '5') ? 'selected' : '' )?> value="5">5</option>
                            <option <?=(($fetch_res['gst'] == '12') ? 'selected' : '' )?> value="12">12</option>
                            <option <?=(($fetch_res['gst'] == '18') ? 'selected' : '' )?> value="18">18</option>
                            <option <?=(($fetch_res['gst'] == '28') ? 'selected' : '' )?> value="28">28</option>
                        </select>
                    </div>
                </div>
                
                <div class="form-group row">
                  <label for="input-5" class="col-sm-2 col-form-label">Product Short Description</label>
                  <div class="col-sm-10">
                    <textarea name="product_short_description" class="form-control" required><?=$fetch_res['product_description']?></textarea>
                  </div>
                </div>
                
                <div class="form-group row">
                    <div class="col-sm-3">
                        <label for="input-5" class="col-form-label">Product Image 1</label>
                        <input type="file" name="prd_img_1" id="image"  class="form-control" onchange="document.getElementById('img').src = window.URL.createObjectURL(this.files[0])">
                    </div>
                    <div class="col-sm-3">
                        <img src="product_image/<?=$fetch_res['image1']?>" id="img" width="100" height="200" class="form-control">
                    </div>
                    <div class="col-sm-3">
                        <label for="input-5" class="col-form-label">Product Image 2</label>
                        <input type="file" name="prd_img_2" id="sub_image1"  class="form-control" onchange="document.getElementById('image1').src = window.URL.createObjectURL(this.files[0])" >
                        
                    </div>
                    <div class="col-sm-3">
                        <img src="product_image/<?=$fetch_res['image2']?>" id="image1" width="100" height="200" class="form-control">
                    </div>
                </div>
                
                
                <div class="form-group row">
                    <div class="col-sm-3">
                        <label for="input-5" class="col-form-label">Product Image 3</label>
                        <input type="file" name="prd_img_3" id="image3"  class="form-control" onchange="document.getElementById('img3').src = window.URL.createObjectURL(this.files[0])" >
                    </div>
                    <div class="col-sm-3">
                        <img src="product_image/<?=$fetch_res['image3']?>" id="img3" width="100" height="200" class="form-control">
                    </div>
                    <div class="col-sm-3">
                        <label for="input-5" class="col-form-label">Product Image 4</label>
                        <input type="file" name="prd_img_4" id="sub_image4"  class="form-control" onchange="document.getElementById('image4').src = window.URL.createObjectURL(this.files[0])" >
                        
                    </div>
                    <div class="col-sm-3">
                        <img src="product_image/<?=$fetch_res['image4']?>" id="image4" width="100" height="200" class="form-control">
                    </div>
                </div>
                
                <div class="form-group row">
                    <div class="col-sm-12">
                        <label for="input-5" class="col-form-label">Product Long Description</label>
                        <textarea name="prd_long_desc" id="editor1" required><?=$fetch_res['prd_long_desc']?></textarea>
                    </div>
                </div>
               
                
               
                
               
          
                <div class="form-footer">
                    <button type="button" onclick="location.reload()" class="btn btn-danger"><i class="fa fa-times"></i> CANCEL</button>
                    <input type="submit" name="submitbtn" class="btn btn-success" value="SAVE"> 
                </div>
              </form>
            </div>
          </div>
        </div>
      </div><!--End Row-->
    </div><!-- End container-fluid -->
  </div><!-- End content-wrapper-->
  <script src="assets/js/jquery.min.js"></script>
  
<!--ckeditor  -->
<script src="https://cdn.ckeditor.com/4.16.2/standard/ckeditor.js"></script>  
<script>
    CKEDITOR.replace( 'editor1' );
</script>  
  
  <script type="text/javascript">
  $(document).ready(function(){
    //   alert('');
  $("#categoryid").change(function () {
//    function p_type(id){
        // var category = this.val();
        var category = $("#categoryid").val();
        // alert('');
  $("#sub_category").html('');
  $("#sub_category").html('<option value="0">Select Sub Category</option>');
    $.ajax({
     
           url:'api/product_type_select.php',
           type:'post',
           data:{category:category},
           success:function(response){

            //   alert(response);
            var myData = JSON.parse(response);

            console.log(myData);
            var length = myData.length;
            for(i=0; i<length; i++) {
          var sub_category_name = myData[i].sub_category_name;
          var sub_category_id = myData[i].sub_category_id;
          var message = myData[i].message;
          if (message==0) 
          {
            // alert('No Sub Category Found');
            $("#sub_category").html('<option value="0">Select Sub Category</option>');
          }

          else{
            $("#sub_category").append(' <option value="'+sub_category_id+'">'+sub_category_name+'</option>');
          }

          

            }


           }
    });

    });

    });
    
         

$(".rem").click(function(){
    var d_id = $(this).attr('data-id');
    // alert(d_id);
    $("#div_editor_"+d_id).css('display','none');
    // $("#chapter_"+d_id).val('');
    $('#color'+d_id).removeAttr('required');
    $('#size'+d_id).removeAttr('required');
    $('#product_price'+d_id).removeAttr('required');
    $('#selling_price'+d_id).removeAttr('required');
    
    $('#color'+d_id).val('');
    $('#size'+d_id).val('');
    $('#product_price'+d_id).val('');
    $('#selling_price'+d_id).val('');
    
})

      
      
      
      num_chapter = 2;
    var editor = new Array();

    function createEditor()
      {
        // alert();
        if (num_chapter <= 40)
        {
        toggle_visibility(num_chapter );

        // document.getElementById('div_editor_' + num_chapter).insertAdjacentHTML( "afterbegin", "<span style='display:inline;'>Chapter " + num_chapter + ": </span>");

        num_chapter += 1;
        }
       else
        {
        alert("Sorry, maximum is 40 chapters.");
        }
      }
      function toggle_visibility(ids) {
         var id = 'div_editor_'+ids
        var e = document.getElementById(id);
        e.style.display = ((e.style.display!='none') ? 'none' : 'block');
       // alert(ids);
         $("#color"+ids).attr("required", "true");
         $("#size"+ids).attr("required", "true");
         $("#product_price"+ids).attr("required", "true");
         $("#selling_price"+ids).attr("required", "true");
        }
 $(document).ready(function() {
    $('.js-example-basic-multiple').select2();
});
</script>
<?php
include('footer.php'); 
?>