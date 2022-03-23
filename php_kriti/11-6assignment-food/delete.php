<?php 
  $id = $_GET['id'];

  $con = new MYsqli("localhost","root","","TestDB");
  if($con->connect_error) die($con->connect_error);
  else{
  	$sql="delete from food where food_id=$id";
  	$con->query($sql);
  	$rows = $con->affected_rows;
    $con->close();

    if($rows ==1){
         echo "<script>
                     alert('One Users Deleted');
                     window.location.href='welcome.php';
         </script>";
    }else{
          echo "<script>
                     alert('Unknown Error !');
                     window.history.back();
          </script>";
    }
  }
?>