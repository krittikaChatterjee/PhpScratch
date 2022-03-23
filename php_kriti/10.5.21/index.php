<!DOCTYPE html>
<html>
<head>
  <title>Welcome</title>
</head>
<body>
       <header>
     <h1>Image Upload:</h1>
       </header>
       
       <form method="post" enctype="multipart/form-data">
          Upload Image : <input type="file" name="avatar" required>
          <small>Max:600KB</small>
          <button name="btnUpload" value="upload">Upload</button>
           
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
               <img src="<?php echo "uploads/".$fileName;?>" height="100px" width="100px"/>
               <br/>  
              <?php
               echo "Image Uploaded Successfully !";
           }else{
            echo "Image is too large to Upload";
           }
             }
             else{
              echo "Only Image files are acceptable..";
             }


            }
        ?>



        
</body>
</html>