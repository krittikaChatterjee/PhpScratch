<?php
include("../connection.php");
$id=$_REQUEST['id'];

$fetch_Data=mysqli_fetch_assoc(mysqli_query($conn,"SELECT * FROM `product` WHERE `product_id`='$id'"));
if($fetch_Data['bestseller_product'] == 'Y'){
$sql_updateY=mysqli_query($conn,"UPDATE product SET bestseller_product='N' WHERE product_id='$id'");
?>
<button type="button" class="btn btn-danger" onclick="change_bestSeller(<?=$id?>)">Deactive</button>
<?php } else {
$sql_updateY=mysqli_query($conn,"UPDATE product SET bestseller_product='Y' WHERE product_id='$id'");
?>
<button type="button" class="btn btn-success" onclick="change_bestSeller(<?=$id?>)">Active</button>
<?php } ?>