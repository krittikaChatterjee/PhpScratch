
<!DOCTYPE html>
<html>
<head>
  <!--Adding a auto referesh code in html-->
   <meta http-equiv="refresh" content="40">
  <title>Welcome</title>
</head>
<body>

      <?php
       if(isset($_COOKIE['USER'])){
         #Retrieve the cookie value
        echo "Welcome ".$_COOKIE['USER'];
        echo "<a href='delete.php'>Delete</a>";
    }
    else{
      echo "Cookie is expired or removed";
    }

       ?>

</body>
</html>