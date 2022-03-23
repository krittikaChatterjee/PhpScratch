<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  
  <title>Welcome</title>
</head>
<body>
   
  

  
  <div class="container border" style="width: 600px; margin-top: 50px; background-color: #D5C4C1 ;" >
    <header class="modal-header"><h1>FILLUP THE FORM </h1></header>
  
  <form method="post" action="show.php" enctype="multipart/form-data">

  <div class="form-group">
    <label>Name:</label>
    <input type="text" name="t1" id="t1" required class="form-control" placeholder="Enter your name" onkeyup="nameValid()">
    <section id="errorName" class="text-danger"></section>
  </div>

  <div class="form-group">
    <label>Email:</label>
    <input type="text" name="t2" id="t2" required class="form-control" placeholder="Enter your email id" onkeyup="emailValid()">
    <section id="errorEmail" class="text-danger"></section>
  </div>

    <div class="form-group">
    <label>Mobile:</label>
    <input type="number" name="t3" id="t3" required class="form-control" placeholder="Enter your phone number" onkeyup="phoneValid()">
    <section id="errorPhone" class="text-danger"></section>
  </div>

  <div class="form-group" data-provide="datepicker">
    <label>Date Of Birth:</label>
    <input type="date" name="t4" id="t5" required class="form-control" placeholder="Enter your phone number" >
    
  </div>

  <div class="form-group">
    <label>Gender</label>
    <select name="c3" required>
              <option value="">---Select Gender---</option>
              <option>MALE</option>
              <option>FEMALE</option>
              <option>OTHERS</option>
              
      </select>
  </div>

  <div class="form-group">
    <label>Skills:</label>
                   <input type="checkbox" name="ch2[]" value="html">HTML
                   <input type="checkbox" name="ch2[]" value="css">CSS
                   <input type="checkbox" name="ch2[]" value="net">.NET
                   <input type="checkbox" name="ch2[]" value="php">PHP
                   <input type="checkbox" name="ch2[]" value="java">JAVA
  </div>

  <div class="form-group">
    <label>Course:</label>
    <input type="radio" name="r1" value="Full">Full Time
      <input type="radio" name="r1" value="Part">Part Time
  </div>

  <div class="form-group">
    <label>Address:</label>
    <textarea type="text" name="t5" id="t5" required class="form-control" minlength="20" maxlength="250" rows="5" cols="6" placeholder="Enter your address"></textarea>
  </div>

  <div class="form-group">
    <label>Upload Image:</label>
    <input type="file" name="avatar" id="img" required class="form-control" placeholder="Upload your Image">
  </div>


  <div class="form-group">
    <label>State</label>
    <select name="c1" id="input" onchange="random_function()">
            <option>select option</option>
            <option>WB</option>
            <option>ODISHA</option>
        </select>
      </div>
        <div>
          <label>District</label>
           <select name="c2" id="output" onchange="random_function1()"> </select>
           </div> 

           

           <div class="form-group">
    <button name="btn" id="btn" value="btn" class="btn btn-sm btn-success">SignUp</button>
  </div> 
</form>

<?php 
        if(isset($_POST['btn'])){
            $name=$_POST['t1'];
            $email=$_POST['t2'];
            $mobile=$_POST['t3'];
            $dob=$_POST['t4'];
            $address=$_POST['t5'];
            
            $gender=$_POST['c3'];
            $dist=$_POST['c2'];
            $state=$_POST['c1'];
            $sk=$_POST['ch2'];
            $skill = implode(',',$sk);
            $course=$_POST['r1'];
                
                //file upload code goes here ...
                $fileName = $_FILES['avatar']['name'];
                $fileType = $_FILES['avatar']['type'];
                $fileSize = $_FILES['avatar']['size'];
                $fileTmp  = $_FILES['avatar']['tmp_name'];
                $upload_image_path = '';
                if($fileType =='image/jpg' || $fileType=='image/jpeg' || $fileType=='image/png' || $fileType=='image/gif')
                {
                    if($fileSize<=600*1024)
                    {
                        
                       if(!file_exists("uploads")) mkdir("uploads");
                       $upload_image_path ='uploads/'.$fileName;
                       move_uploaded_file($fileTmp, $upload_image_path);

                       //DataBase code will go here...
                        #Connect to Database
                $con = new Mysqli('localhost','root','','formdb');
                #Check the errors
                if($con->connect_error) die($con->connect_error);
                else{
                    $SQL="insert into contacts(name,email,phone,dob,address,pic,gender,district,state,skill,course)values('$name','$email','$mobile','$dob','$address','$upload_image_path','$gender','$dist','$state','$skill','$course')";
                    $con->query($SQL);
                    //affected_rows is a cursor which returns either 1 or 0 depends upon query execution.
                    $rows = $con->affected_rows; 
                    if($rows == 1)
                        echo "<div class='alert alert-success'>Successfully Registred !</div>";
                    else
                        echo "<div class='alert alert-danger'>Unable to Register Right Now.</div>";
                }

                #close the database Connection.
                $con->close();
        


                    }
                    else{
                        echo "<div class='alert alert-danger'>Image is Too Large to Upload.</div>";
                    }

                }

                  else{
                    echo "<div class='alert alert-danger'>Only Image Files are Acceptable..</div>";
                      }

         }
         ?>
     


</div>
  
     </body>
</html>