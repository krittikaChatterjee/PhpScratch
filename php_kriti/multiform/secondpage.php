<?php session_start();?> 
<!DOCTYPE html>
<html>
<head>
	<title>second page</title>
	<meta name="viewport" content="width=device-width,initial-scale=1.0">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
  
<style type="text/css">
    body{
       background-color:lightblue;
        }

</style>
<?php
    print_r($_POST);

  $_SESSION['NAME'] = $_POST['t1'];
    $_SESSION['GNAME']= $_POST['t2'];
    $_SESSION['ADDRESS']= $_POST['t3'];
     $_SESSION['PHONE']= $_POST['t4'];
      $_SESSION['EMAIL']= $_POST['t5'];
       $_SESSION['DOB']= $_POST['t6']; 
        $_SESSION['VENUE']= $_POST['r1'];
         $_SESSION['VENUE']= $_POST['c1'];
        $_SESSION['CATEGORY']= $_POST['c2'];


    #echo "Session is Created !";

 ?>
	<div class="container">

		<h1 align="center">ACADEMIC DETAILS</h1>
		<form method="post" action="thirdpage.php" enctype="multipart/form-data">
	<h5>GRADUATION DETAIL</h5>
   
<div class="row">

<div class="col">
	 BOARD: <select name="a1" required>
              <option value="">---Select board---</option>
              <option>MAKAUT</option>
              <option>WBUT</option>
              <option>CENTRAL BOARD</option>             
      </select>
</div>
<div class="col">
	 YEAR OF PASSING: <select name="a2" required>
              <option value="">---Select board---</option>
              <option>2016</option>
              <option>2017</option>
              <option>2018</option>             
      </select>
</div>
<div class="col">
	<label>MARKS:</label>
      <input type="number" name="a3"   required="">
</div>
</div>



<div class="form-group">
                <label>Language Speak:</label>
                 <select name="l[]" class="form-control" multiple>
                  <option>Bengali</option>
                  <option>Hindi</option>
                  <option>English</option>
                  <option>Tamil</option>
                  <option>Telegu</option>
                  <option>Gujrati</option>
                  <option>Marathi</option>
                 </select>
              </div>

              <div class="form-group">
                 
                   UPLOAD YOUR CURRENT CV : <input type="file" name="doc" class="form-control" required>
                  <small>Max:2MB</small>
                 
                 
             </div>
             <div class="form-group">
                 
                   UPLOAD IMAGE: <input type="file" name="image" class="form-control" required>
                  <small>Max:600MB</small>
                 
                 
             </div>
             <div class="form-group">    
                 <button name="btnSubmit" value="submit" id="b3" class="btn btn-sm btn-warning">Next</button>
             </div>

         </form>
               </div>


</body>
</html>