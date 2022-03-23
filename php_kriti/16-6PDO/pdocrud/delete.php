<?php 
   $id = $_GET['id'];

   $con = new PDO('mysql:host=localhost;dbname=TestDB','root','');


   if($con->errorCode()) die($con->errorInfo());
   else{
   	$sql="delete from users where id=:id";
   	$stmt=$con->prepare($sql);
   	$stmt->bindParam(':id',$id);

   	$stmt->execute();

   	$count = $stmt->rowCount();

    if($count==1){
    	echo "<script>
                alert('Record Deleted !');
                window.location.href='index.php';
    	</script>";
    }
    else{
    	echo "<script>
               alert('Unable to Delete');
               window.history.back(); 
    	</script>";
    }
   }
   $con= NULL;
?>