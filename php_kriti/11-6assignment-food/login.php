<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
 
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Welcome to Login Page !</title>
</head>
<body>

      <div class="container">
          <header class="modal-header"><h1>Login</h1></header>
          <form method="post">
          <div class="form-group">
              <label>Username:</label>
              <input type="text" name="uname" required placeholder="Email / Phone" class="form-control">
          </div>
          <div class="form-group">
              <label>Password :</label>
              <input type="password" name="pass1" placeholder="Password" class="form-control" required>
          </div>
          <div class="form-group">
              <button name="btnLogin" value="login" class="btn btn-sm btn-primary">Login</button>
          </div>
      </form>
        <?php if(isset($_POST['btnLogin'])){
               $userName  = $_POST['uname'];
               $passWord  = $_POST['pass1'];

               #Connecting to Database
               $con = new MYsqli("localhost","root","","TestDB");
               #Checking the error
               if($con->connect_error) die($con->connect_error);
               else{
                   $sql="select * from users where (email='$userName' or phone='$userName') and pass1=password('$passWord')";
                   $res = $con->query($sql);
                if($rows = $res->fetch_assoc()){
                    #Storing some user's information in Session.
                    $_SESSION['USER'] = $rows['cname'];
                    $_SESSION['IP'] = $_SERVER['REMOTE_ADDR'];
                    date_default_timezone_set('Asia/Kolkata');
                    $_SESSION['login_time'] = date('d-m-y h:i:sA');
                    $_SESSION['ROLE'] = $rows['role'];
                    $_SESSION['ID'] =$rows['id'];

                    header("location:welcome.php");
                   

                }else{
                    echo "<div class='alert alert-danger'>Invalid Username or Password !</div>";
                }
               }
               #close the database connection
               $con->close();


        }

        ?>
      </div>

</body>
</html>



