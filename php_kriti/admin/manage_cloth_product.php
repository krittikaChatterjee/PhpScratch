<?php include('header.php'); ?>
<?php include('sidebar.php'); ?>
<div class="content-wrapper">
    <div class="container-fluid">
        <div class="row pt-2 pb-2">
            <div class="col-sm-9">
                <h4 class="page-title">Manage Product</h4>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="dashboard.php">Dashboard</a></li>
                    <li class="breadcrumb-item">Product</li>
                    <li class="breadcrumb-item active" aria-current="page">Manage Product</li>
                </ol>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header"><i class="fa fa-table"></i> Product</div>
                    <div class="card-body">
                        <div class="table-responsive">
                        <table id="default-datatable" class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>Sl. Number</th>
                                    <th>Category</th>
                                    <th>Sub Category</th>
                                    <th>Product Name</th>
                                    <th>GST Percentage</th>
                                    <th>View Details</th>
                                    <th>Product Variant</th>
                                    <th>Status</th>
                                    <th>New Arrival Status</th>
                                    <th>Best Seller Status</th>
                                    <th>Special Offer Status</th>
                                    <th>On Sale Status</th>
                                    <th>Top Rated Status</th>
                                    <th>Edit</th>
                                    <th>Delete</th>
                                </tr>
                            </thead>
                            <tbody>
                            <?php
                            if(isset($_GET['del_id'])){
                            $del_id=base64_decode($_GET['del_id']);
                            $del_res = mysqli_fetch_assoc(mysqli_query($conn,"SELECT * FROM `product` WHERE `product_id` = '$del_id'"));
                            unlink("product_image/".$del_res['image1']);
                            unlink("product_image/".$del_res['image2']);
                            unlink("product_image/".$del_res['image3']);
                            unlink("product_image/".$del_res['image4']);

                            $delete_query=mysqli_query($conn,"DELETE FROM `product` WHERE `product_id`='$del_id'");
                            $dele_qty_tavle = mysqli_query($conn,"DELETE FROM `qty_per_unit` WHERE `product_id` = '$del_id'");
                            
                            if($delete_query){
                            echo '<script>swal("Successful", "You have successfully deleted", "success")</script>';
                            echo "<script>
                                    setTimeout(function() {
                                        window.location='manage_product.php'
                                    }, 3000);
                                </script>";
                                }
                            }
                            $c=1;
                            $sql="SELECT * FROM product ORDER BY product_id DESC";
                            $queary=mysqli_query($conn,$sql);
                            while($row=mysqli_fetch_assoc($queary)){
                                $id=$row['product_id'];
                                
                            ?>
                            <tr>
                                <td><?=$c?></td>
                                <td><?php
                                    $cat_id = $row['category_id'];
                                    $cat_res = mysqli_fetch_assoc(mysqli_query($conn,"SELECT * FROM `category` WHERE cat_id = '$cat_id'"));
                                    echo $cat_res['cat_name'];
                                ?></td>
                                <td><?php
                                    $sub_cat_id = $row['sub_cat_id'];
                                    $subCatRes = mysqli_fetch_assoc(mysqli_query($conn,"SELECT * FROM `sub_category` WHERE sub_id = '$sub_cat_id'"));
                                    echo $subCatRes['sub_name'];
                                ?></td>
                                <td><?=$row['product_name']?></td>
                                <td><?=$row['gst']."%"?></td>
                                <td>
                                    <a href="view_product_detailsaa.php?id=<?=base64_encode($id)?>">
                                        <i aria-hidden="true" class="fa fa-eye"></i>
                                    </a>    
                                </td>
                                <td>
                                    <a href="view_product_variants.php?id=<?=base64_encode($id)?>">
                                        <i aria-hidden="true" class="fa fa-eye"></i>
                                    </a>    
                                </td>
                                <td id="status<?=$id?>" class="text-center">
                                    <?php if($row['status']=='Y'){ ?>
                                    <button type="button" class="btn btn-success" onclick="change_status(<?=$id?>)">Active</button>
                                    <?php } else { ?>
                                    <button type="button" class="btn btn-danger" onclick="change_status(<?=$id?>)">Deactive</button>
                                    <?php } ?>
                                </td>
                                <td id="newArrival<?=$id?>" class="text-center">
                                    <?php if($row['new_arrival_status']=='Y'){ ?>
                                    <button type="button" class="btn btn-success" onclick="change_newArrival(<?=$id?>)">Active</button>
                                    <?php } else { ?>
                                    <button type="button" class="btn btn-danger" onclick="change_newArrival(<?=$id?>)">Deactive</button>
                                    <?php } ?>
                                </td>
                                <td id="bestSeller<?=$id?>" class="text-center">
                                    <?php if($row['bestseller_product']=='Y'){ ?>
                                    <button type="button" class="btn btn-success" onclick="change_bestSeller(<?=$id?>)">Active</button>
                                    <?php } else { ?>
                                    <button type="button" class="btn btn-danger" onclick="change_bestSeller(<?=$id?>)">Deactive</button>
                                    <?php } ?>
                                </td>
                                <td id="spclOffer<?=$id?>" class="text-center">
                                    <?php if($row['spcl_offer_status']=='Y'){ ?>
                                    <button type="button" class="btn btn-success" onclick="change_spclOffer(<?=$id?>)">Active</button>
                                    <?php } else { ?>
                                    <button type="button" class="btn btn-danger" onclick="change_spclOffer(<?=$id?>)">Deactive</button>
                                    <?php } ?>
                                </td>
                                <td id="onSale<?=$id?>" class="text-center">
                                    <?php if($row['on_sale_status']=='Y'){ ?>
                                    <button type="button" class="btn btn-success" onclick="change_onSale(<?=$id?>)">Active</button>
                                    <?php } else { ?>
                                    <button type="button" class="btn btn-danger" onclick="change_onSale(<?=$id?>)">Deactive</button>
                                    <?php } ?>
                                </td>
                                <td id="topRated<?=$id?>" class="text-center">
                                    <?php if($row['top_rated']=='Y'){ ?>
                                    <button type="button" class="btn btn-success" onclick="change_topRated(<?=$id?>)">Active</button>
                                    <?php } else { ?>
                                    <button type="button" class="btn btn-danger" onclick="change_topRated(<?=$id?>)">Deactive</button>
                                    <?php } ?>
                                </td>
                                
                                
                                <td><a href="edit_product.php?id=<?=base64_encode($id)?>"><i aria-hidden="true" class="fa fa-edit"></i></td>
                                <td><a href="manage_product.php?del_id=<?=base64_encode($id)?>"><i aria-hidden="true" class="fa fa-trash"></i></td>
                            </tr>
                            <?php
                            $c++;
                            }
                            ?>
                            </tbody>
                        </table>
        				</div>
        			</div>
            	</div>
            </div>
        </div>
    </div>
</div>

<script>
function change_status(id){
    $.ajax({
        type:"post",
        url:"api/status.php",
        data:{id:id},
        success:function(data){
            $("#status"+id).html(data);
        }
    })
}
function change_newArrival(id){
    $.ajax({
        type:"post",
        url:"api/featured.php",
        data:{id:id},
        success:function(data){
            $("#newArrival"+id).html(data);
        }
    })
}
function change_bestSeller(id){
    $.ajax({
        type:"post",
        url:"api/bestseller.php",
        data:{id:id},
        success:function(data){
            $("#bestSeller"+id).html(data);
        }
    })
}
function change_spclOffer(id){
    $.ajax({
        type:"post",
        url:"api/change_spclOffer.php",
        data:{id:id},
        success:function(data){
            $("#spclOffer"+id).html(data);
        }
    })
} 
function change_topRated(id){
    $.ajax({
        type:"post",
        url:"api/change_topRated.php",
        data:{id:id},
        success:function(data){
            $("#topRated"+id).html(data);
        }
    })
}
function change_onSale(id){
    $.ajax({
        type:"post",
        url:"api/change_onSale.php",
        data:{id:id},
        success:function(data){
            $("#onSale"+id).html(data);
        }
    })
}



</script>
<?php include('footer.php'); ?>