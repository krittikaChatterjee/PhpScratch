<!DOCTYPE html>
<html>
<head>
      <title>Form</title>
</head>
<body>
      <?php 
            
            $name = $_POST['t1'];
            $lastname  = $_POST['t2'];
            $phone  = $_POST['t3'];
            $email  = $_POST['t4'];
            
            
            echo "Welcome ".$name." Your lastname is ".$lastname." phone is".$phone;

?>

             <a href="index1.html">Back</a>

</body>
</html>