<!DOCTYPE html>
<html>
<head>
  <title>Audio</title>
</head>
<body>
       <header>
     <h1> AudioUploadAudio:</h1>
       </header>
       
       <form method="post" enctype="multipart/form-data">
          Upload audio : <input type="file" name="avatar" required>
          
          <button name="btnUpload" value="upload">Upload</button>
           
       </form> 
       <?php
            if(isset($_POST['btnUpload']))
              # echo "clicked";
              #to see the entire array
             # print_r($_FILES);
            {
              $fileName = $_FILES['avatar']['name'];
               $fileType = $_FILES['avatar']['type'];
               $fileTmp  = $_FILES['avatar']['tmp_name'];
               $fileSize = $_FILES['avatar']['size']; //bytes
               
                if($fileType =='audio/mpeg')
                { if(!file_exists("uploads"))mkdir("uploads");
         
                 
                
                 move_uploaded_file($fileTmp,"uploads/". $fileName);
                ?>
                <audio controls loop>
                  <source src="<?php echo "uploads/".$fileName ?>">
                </audio><br>
                <?php
                 echo"Audio uploaded successfully";
              }
           else{
            echo"failed";
          }
        }
        ?>



        
</body>
</html>