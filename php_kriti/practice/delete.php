<?php
$id = $_GET['id'];
 $con = new MYsqli("localhost","root","","TestDB");
if($con->connect_error) die($con->connect_error);
else{
  //echo"connected";
  $sql="delete from contacts where id=$id";
  $con->query($sql);
  $rows=$con->affected_rows;
  $con->close();
  
  if($rows==1){
    echo "deleted";
   
  }
   else{
    echo"unable to delete";
   }
 }


?>