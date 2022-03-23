<!DOCTYPE html>
<html>
<head>
      <title>Form</title>
</head>
<body>
      <?php 
            //print_r($_POST);
            $name = $_POST['t1'];
            $age  = $_POST['t2'];
            $Phone  = $_POST['t3'];
            $Password  = $_POST['t4'];
            $Address  = $_POST['t5'];
            $gen  = $_POST['r1'];
            $city = $_POST['c1'];

            
            echo "Welcome ".$name." Your age is ".$age." Gender is ".$gen." From ".$city." phone is".$Phone." address is".$Address;

?>

             <a href="index.html">Back</a>

</body>
</html>