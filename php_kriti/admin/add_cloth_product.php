<?php
include('header.php');
include('sidebar.php');
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
            <li class="breadcrumb-item active" aria-current="page">Add Product</li>
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

                        $imp_color = '';
                        foreach($_POST['color'] as $keyColor => $valColor)
                        {
                            if($valColor != ''){
                               $imp_color .= $valColor.',';
                            }
                        }
                        $imp_color = rtrim($imp_color,',');

                        $imp_size = '';
                        foreach($_POST['size'] as $keysize => $valsize)
                        {
                            if($valsize != ''){
                               $imp_size .= $valsize.',';
                            }
                        }
                        $imp_size = rtrim($imp_size,',');

                        $imp_product_price = '';
                          foreach($_POST['product_price'] as $keyproduct_price => $valPrdPrice)
                          {
                              if($valPrdPrice!='')
                              {
                                $imp_product_price .= $valPrdPrice.',';
                              }
                          }
                          $imp_product_price= rtrim($imp_product_price,',');
                          
                          $imp_selling_price = '';
                          foreach($_POST['selling_price'] as $keyselling_price => $valselling_price)
                          {
                              if($valselling_price!='')
                              {
                                $imp_selling_price .= $valselling_price.',';
                              }
                          }
                          $imp_selling_price= rtrim($imp_selling_price,',');
                          
                        
                        // prd_img_1
                        $file1=$_FILES["prd_img_1"]["name"];
                        $ext1 = pathinfo($file1, PATHINFO_EXTENSION);
                        if( $ext1 == 'jpeg' || $ext1 == 'jpg' ||$ext1 == 'png' )
                        {
                          $foll1=rand(1111,9999)."_".$file1;
                          $pathh1="product_image/".$foll1;                
                          $tmpp1=$_FILES["prd_img_1"]["tmp_name"];
                          move_uploaded_file($tmpp1,$pathh1);
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
                        }
                       

                        $check_query="SELECT * FROM `product` WHERE `product_name`='$product_name' AND `category_id`= '$category_id' AND `sub_cat_id`='$sub_category'";
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
                            echo '<meta http-equiv="refresh" content="2;url=add_product.php">';
                        }
                        else
                        {
                            
                            // product Table Insert
                            $prd_insertQry = "INSERT INTO `product`(`category_id`, `sub_cat_id`, `product_name`, `color`, `size`, `price`, `selling_price`, `gst`, `product_description`, `prd_long_desc`, `image1`, `image2`, `image3`, `image4`, `status`, `new_arrival_status`, `bestseller_product`, `spcl_offer_status`, `on_sale_status`, `top_rated`) VALUES ('$category_id','$sub_category','$product_name','$imp_color','$imp_size','$imp_product_price','$imp_selling_price','$gst_percentage','$product_short_description','$prd_long_desc','$foll1','$foll2','$foll3','$foll4','Y','N','N','N','N','N')";
                            
                            $prd_insertSql = mysqli_query($conn,$prd_insertQry);
                            
                            $last_id = mysqli_insert_id($conn);
                            
                            
                            // qty_per_unit INSERT
                            foreach($_POST['color'] as $key1 => $val1){
                                if($val1!=''){
                                    $coloree = $val1;
                                    $sizeeee = $_POST['size'][$key1];
                                    $pd_price= $_POST['product_price'][$key1];
                                    $sl_price= $_POST['selling_price'][$key1];
                                    
                                    
                                    $qty_InsertSql = mysqli_query($conn,"INSERT INTO `qty_per_unit`(`product_id`, `coloree`, `sizeee`, `product_price`, `selling_priceee`, `number_of_product`) VALUES ('$last_id','$coloree','$sizeeee','$pd_price','$sl_price','0')");
                                }
                                
                                
                                
                               
                            }
                            ?>
                            <div class="alert alert-success alert-dismissible" role="alert">
                                <button type="button" class="close" data-dismiss="alert">×</button>
                                <div class="alert-icon contrast-alert">
                                    <i class="icon-info"></i>
                                </div>
                                <div class="alert-message">
                                    <span><center><strong> Success !!! Product Inserted Successfully </strong></center></span>
                                </div>
                            </div>
                            <?php
                            echo '<meta http-equiv="refresh" content="2;url=add_product.php">';
                        }    
                    }
                ?>
              <form id="personal-info" method="post" enctype="multipart/form-data">
                <h4 class="form-header">
                  <i class="fa fa-file-text-o"></i>
                  ADD PRODUCT   
                </h4>

                <div class="form-group row">
                    <div class="col-sm-4">
                        <label for="input-5" class="col-form-label">Category</label>
                        <!--<div class="col-sm-10">-->
                            <select class="form-control" name="category_id" id="categoryid" required>
                              <option value="0">--Select Category--</option>
                              <?php
                              $select_query=mysqli_query($conn,"SELECT * FROM `category` WHERE status='Y'");
                              while($select_fetch=mysqli_fetch_assoc($select_query))
                              {
                                  $category_name=$select_fetch['cat_name'];
                                  $category_id=$select_fetch['cat_id'];
                                  ?>
                                  <option value="<?php echo $category_id; ?>"><?php echo $category_name; ?></option>
                                  <?php
                              }
                              ?>
                            </select>
                        <!--</div>-->
                    </div>  
                    <div class="col-sm-4">
                        <label for="input-5" class="col-form-label">Sub-Category</label>
                        <!--<div class="col-sm-10">-->
                            <select class="form-control" name="sub_category" id="sub_category" >
                                <option value="">--Select Sub Category--</option>
                                
                            </select>
                        <!--</div>-->
                    </div>
                    <div class="col-sm-4">
                        <label for="input-5" class="col-form-label">Product Name</label>
                        <!--<div class="col-sm-10">-->
                            <input type="text" name="product_name" id="product_name" class="form-control" placeholder="Product Name" required>
                        <!--</div>-->
                    </div>
                </div>

                
               
                
                 <div class="form-group row">
                     <label for="input-5" class="col-sm-2 col-form-label">Color</label>
                  <div class="col-sm-4">
                    <input type="text" name="color[]" id="color" class="form-control" placeholder="Color" required>
                  </div>
                  <label for="input-5" class="col-sm-2 col-form-label">Size</label>
                  <div class="col-sm-4">
                    <select class="form-control" name="size[]" id="size" required>
                      <option value="">--Select Size--</option>
                      <option value="XS">XS</option>
                      <option value="S">S</option>
                      <option value="M">M</option>
                      <option value="L">L</option>
                      <option value="XL">XL</option>
                      <option value="XXL">XXL</option>
                      <option value="XXXL">XXXL</option>
                   </select>
                  </div>
                </div>
                <div class="form-group row">
                    
                  <label for="input-5" class="col-sm-2 col-form-label" style="text-decoration: line-through;">Product Price(per unit)</label>
                  <div class="col-sm-4">
                    <input type="text" name="product_price[]" id="product_price1" class="form-control" placeholder="Product Price" required onchange="update_product_price(1)" oninput="this.value=this.value.replace(/[^0-9]/g,'');">
                  </div>
                  <label for="input-5" class="col-sm-2 col-form-label">Discount Price</label>
                  <div class="col-sm-3">
                    <input type="text" name="selling_price[]" id="selling_price1" class="form-control" placeholder="Discount Price" required onchange="update_product_price(1)" oninput="this.value=this.value.replace(/[^0-9]/g,'');">
                  </div>
                  <div class="col-sm-1">
                    <button type="button" id="addmore" class="btn btn-primary add_more" onclick="createEditor();">Add</button>
                  </div>
               </div>
               
                
                    <?php for ($i=2; $i<=40; $i++){
                    echo "<center><div class='form-group row' id='div_editor_".$i."' style='display:none;'>";
                    ?>
                    <hr>
                    <div class="form-group row">
                         <label for="input-5" class="col-sm-2 col-form-label">Color</label>
                      <div class="col-sm-4">
                        <input type="text" name="color[]" class="form-control" placeholder="Color" id="color<?=$i?>">
                      </div>
                      <label for="input-5" class="col-sm-2 col-form-label">Size</label>
                      <div class="col-sm-4">
                        <select class="form-control" name="size[]" id="size<?=$i?>">
                          <option value="">--Select Size--</option>
                          <option value="XS">XS</option>
                          <option value="S">S</option>
                          <option value="M">M</option>
                          <option value="L">L</option>
                          <option value="XL">XL</option>
                          <option value="XXL">XXL</option>
                          <option value="XXXL">XXXL</option>
                       </select>
                      </div>
                    </div>
                <div class="form-group row">
                    
                  <label for="input-5" class="col-sm-2 col-form-label" style="text-decoration: line-through;">Product Price(per unit)</label>
                  <div class="col-sm-4">
                    <input type="text" name="product_price[]" id="product_price<?=$i?>" class="form-control" placeholder="Product Price" onchange="update_product_price(<?=$i?>)"  oninput="this.value=this.value.replace(/[^0-9]/g,'');">
                  </div>
                  <label for="input-5" class="col-sm-2 col-form-label">Discount Price</label>
                  <div class="col-sm-3">
                    <input type="text" name="selling_price[]" id="selling_price<?=$i?>" class="form-control" placeholder="Discount Price"  onchange="update_product_price(<?=$i?>)" oninput="this.value=this.value.replace(/[^0-9]/g,'');">
                  </div>
                  <div class="col-sm-1">
                    <i class='fa fa-times rem' aria-hidden='true' data-id="<?=$i?>"></i>
                  </div>
               </div>
                          
                <?php
                      echo "</div></center>";
                   }
                 ?>
               
               
                <div class="form-group row">
                    <label for="input-5" class="col-sm-2 col-form-label">GST Percentage</label>
                    <div class="col-sm-10">
                        <select class="form-control" name="gst_percentage" required>
                            <option value="">--Select GST--</option>
                            <option value="5">5</option>
                            <option value="12">12</option>
                            <option value="18">18</option>
                            <option value="28">28</option>
                        </select>
                    </div>
                </div>
                
                <div class="form-group row">
                  <label for="input-5" class="col-sm-2 col-form-label">Product Short Description</label>
                  <div class="col-sm-10">
                    <textarea name="product_short_description" class="form-control" required></textarea>
                  </div>
                </div>
                
                <div class="form-group row">
                    <div class="col-sm-3">
                        <label for="input-5" class="col-form-label">Product Image 1</label>
                        <input type="file" name="prd_img_1" id="image"  class="form-control" onchange="document.getElementById('img').src = window.URL.createObjectURL(this.files[0])" required>
                    </div>
                    <div class="col-sm-3">
                        <img src="assets/images/product_image.png" id="img" width="100" height="200" class="form-control">
                    </div>
                    <div class="col-sm-3">
                        <label for="input-5" class="col-form-label">Product Image 2</label>
                        <input type="file" name="prd_img_2" id="sub_image1"  class="form-control" onchange="document.getElementById('image1').src = window.URL.createObjectURL(this.files[0])" required>
                        
                    </div>
                    <div class="col-sm-3">
                        <img src="assets/images/product_image.png" id="image1" width="100" height="200" class="form-control">
                    </div>
                </div>
                
                
                <div class="form-group row">
                    <div class="col-sm-3">
                        <label for="input-5" class="col-form-label">Product Image 3</label>
                        <input type="file" name="prd_img_3" id="image3"  class="form-control" onchange="document.getElementById('img3').src = window.URL.createObjectURL(this.files[0])" required>
                    </div>
                    <div class="col-sm-3">
                        <img src="assets/images/product_image.png" id="img3" width="100" height="200" class="form-control">
                    </div>
                    <div class="col-sm-3">
                        <label for="input-5" class="col-form-label">Product Image 4</label>
                        <input type="file" name="prd_img_4" id="sub_image4"  class="form-control" onchange="document.getElementById('image4').src = window.URL.createObjectURL(this.files[0])" required>
                        
                    </div>
                    <div class="col-sm-3">
                        <img src="assets/images/product_image.png" id="image4" width="100" height="200" class="form-control">
                    </div>
                </div>
                
                <div class="form-group row">
                    <div class="col-sm-12">
                        <label for="input-5" class="col-form-label">Product Long Description</label>
                        <textarea name="prd_long_desc" id="editor1" required></textarea>
                    </div>
                </div>
               
                
               
                
               
          
                <div class="form-footer">
                    <button type="button" onclick="location.reload()" class="btn btn-danger"><i class="fa fa-times"></i> CANCEL</button>
                    <input type="submit" name="submitbtn" id="submitee" class="btn btn-success" value="SAVE"> 
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

<!--product discount checking starts here-->
<script>
    function update_product_price(i) {
        
        var prdPrice = $('#product_price'+i).val();
        var disPrice = $('#selling_price'+i).val();
        
        var product= parseInt(prdPrice);
        var discount= parseInt(disPrice);
        
        console.log('product',product);
        console.log('discount',discount);
        
        if( prdPrice == '' || disPrice == '' ) {
             console.log("Nan peyeche ");
        } else {
            if(product >= discount )
             {
                $( "#submitee" ).prop( "disabled", false );
             }
          
             else{
                 swal("Sorry!", "Discount will be less than or equal to product price", "error");
                 $( "#submitee" ).prop( "disabled", true );
             }
        }
     }
</script>
<!--product discount checking starts here-->

<?php
include('footer.php'); 
?>