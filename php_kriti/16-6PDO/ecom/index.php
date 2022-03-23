<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width,initial-scale=1.0">
	<!--Add Boostrap-4-->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<title>Welcome</title>
</head>
<body>
	<section align="center">
      <form method="post">
      	 OrderID : <input type="text" name="orderId" required>
      	 <button name="btn" value="find" class="btn btn-sm btn-primary">Search</button>
      </form>
  </section>


	  <?php

         $records = []; #Empty array

	     if(isset($_POST['btn'])){
          echo "<hr/>";

          $orderId  = $_POST['orderId'];

         $con = new PDO("mysql:host=localhost;dbname=ecomDB","root","");
         #Checking the error
         if($con->errorCode()) die($con->errorInfo());
         else{
         	$sql="select u.cname,u.phone,u.email,o.order_date,p.pname,p.qty,p.price,p.p_image from users u inner join ordertab o on (u.u_id = o.u_id) inner join products p on( p.p_id = o.p_id ) and o.o_id=:oId";
         	#Creating a PreparedStatement
         	$stmt = $con->prepare($sql);
         	#execute the Prepared Statement
         	$stmt->bindParam(':oId',$orderId);
         	$stmt->execute();
         	
         	if($rows = $stmt->fetch(PDO::FETCH_LAZY)){
                $records = [

                 'customer_name'  => $rows->cname,
                 'cPhone'         => $rows->phone,
                 'cEmail'         => $rows->email,
                 'product'        => $rows->pname,
                 'pQty'           => $rows->qty,
                 'pPrice'         => $rows->price,
                 'pImage'         => $rows->p_image,
                 'oDate'          => $rows->order_date
                ];
                print '<pre>';
                print_r($records);

         	}else{
         		echo "<div class='alert alert-danger'>No Such record found !</div>";
         		exit(0);
         	}

         	#Close the Database Connection 
         	$con = NULL;

         }
          

	   ?>

	  <table class="table table-hover table-bordered">
	  	
	  	   <tr>
	  	   	   <th>Customer's Name :</th>
	  	   	   <td><?php echo $records['customer_name'];?></td>

	  	   </tr>
	  	   <tr>
	  	   	   <th>Contact No :</th>
	  	   	   <td><?php echo $records['cPhone'];?></td>

	  	   </tr>
	  	   <tr>
	  	   	   <th>Email  :</th>
	  	   	   <td><?php echo $records['cEmail'];?></td>

	  	   </tr>
	  	   <tr>
	  	   	   <th>Product  :</th>
	  	   	   <td><?php echo $records['product'];?></td>

	  	   </tr>
	  	   <tr>
	  	   	   <th>Qty</th>
	  	   	   <td><?php echo $records['pQty'];?></td>

	  	   </tr>
	  	   <tr>
	  	   	   <th>Price :</th>
	  	   	   <td>&#8377;<?php echo $records['pPrice'];?></td>

	  	   </tr>
	  	   <tr>
	  	   	   <th>Product Image:</th>
	  	   	   <td><img src="<?php echo $records['pImage'];?>"
                    height="120px" width="120px"
	  	   	   	/></td>

	  	   </tr>
	  	   <tr>
	  	   	   <th>Ordered At :</th>
	  	   	   <td><?php echo $records['oDate'];?></td>

	  	   </tr>
	  </table>

	    <div align="center">
	    	<button class="btn btn-danger" onclick="window.print()">Print</button>
	    </div>
<?php 
   }
 ?>
</body>
</html>