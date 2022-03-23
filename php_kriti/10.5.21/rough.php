<!DOCTYPE html>
<html>
<head>
  <meta name="viewport" content="width=device-width,initial-scale=1.0">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <title>Welcome</title>
    <script type="text/javascript">
              addEventListener("load",()=>{
                document.getElementById('img1').style.display='none';
              });
                function loadImage(){
                  let myImg = document.getElementById('img1');
                  myImg.src=URL.createObjectURL(event.target.files[0]);
                  myImg.style.display='inline-block';

                }

                addEventListener("load",()=>{
                document.getElementById('img2').style.display='none';
              });
                function loadImagetwo(){
                  let myImg = document.getElementById('img2');
                  myImg.src=URL.createObjectURL(event.target.files[0]);
                  myImg.style.display='inline-block';

                }
               </script>
</head>
<body>
    <div class="container">
       <header class="modal-header">
     <h1>Image Upload:</h1>
       </header>
       
       <form method="post" enctype="multipart/form-data">
        <div class="form-group">
          Upload Image  : <input type="file" name="avatar"  class="form-control" onchange="loadImage()" >
          <img src="" id="img1" height="64px" width="64px">
          <small>Max:600KB</small>
          <button name="btnUpload" value="upload" class="btn btn-sm btn-primary">Upload</button>
          </div>


           <div class="form-group">
          Upload SIGNATURE : <input type="file" name="avatar2"  class="form-control" onchange="loadImagetwo()" >
          <img src="" id="img2" height="64px" width="64px">
          <small>Max:600KB</small>
          <button name="btnUpload2" value="upload2"   class="btn btn-sm btn-primary">Upload</button>
        </div>
        
          
          <button name="btnUpload3" value="upload2"   class="btn btn-sm btn-danger">SUBMIT</button>
           </div>
       </form> 
       <?php
            if(isset($_POST['btnUpload'])){


              #  See entire incoming file using $_FILES
              # print_r($_FILES);
               $fileName = $_FILES['avatar']['name'];
               $fileType = $_FILES['avatar']['type'];
               $fileTmp  = $_FILES['avatar']['tmp_name'];
               $fileSize = $_FILES['avatar']['size']; //bytes

             
              
              if($fileType =='image/jpeg' || $fileType=='image/png' || $fileType =='image/gif' || $fileType=='image/jpg'){
              if($fileSize<=600*1024){  
               if(!file_exists("uploads")) mkdir("uploads");
               //upload it by recovering from temp to original file
               move_uploaded_file($fileTmp,"uploads/".$fileName);

              
              ?>
               <img  src="<?php echo "uploads/".$fileName;?>" height="100px" width="100px"/>
               
               <br/>  
              <?php
               echo "<div class='alert alert-success'>Image Uploaded Successfully !</div>";
           }else{
            echo "<div class='alert alert-danger'>Image is too large to Upload</div>";
           }
             }
             else{
              echo "<div class='alert alert-danger'>Only Image files are acceptable..</div>";
             }


            }

        ?>

        <?php
            if(isset($_POST['btnUpload2'])){

              $sfileName = $_FILES['avatar2']['name'];
               $sfileType = $_FILES['avatar2']['type'];
               $sfileTmp  = $_FILES['avatar2']['tmp_name'];
               $sfileSize = $_FILES['avatar2']['size']; //bytes

         if($sfileType =='image/jpeg' || $sfileType=='image/png' || $sfileType =='image/gif' || $sfileType=='image/jpg'){
              if($sfileSize<=600*1024){  
               if(!file_exists("uploads")) mkdir("uploads");
               //upload it by recovering from temp to original file
               move_uploaded_file($sfileTmp,"uploads/".$sfileName);
          ?>

           <img  src="<?php echo "uploads/".$sfileName;?>" height="100px" width="100px"/>
               
               <br/>  
              <?php
               echo "<div class='alert alert-success'> SIGNATURE Uploaded Successfully !</div>";
           }else{
            echo "<div class='alert alert-danger'> SIGNATURE is too large to Upload</div>";
           }
             }
             else{
              echo "<div class='alert alert-danger'>Only SIGNATURE files are acceptable..</div>";
             }


            }

        ?>

         




      </div>
</body>
</html>
