<!DOCTYPE html>
<html>
<head>
      <title>Form</title>
</head>
<body>
     <?php

          
                   
                
                    
                     
                    if(isset($_POST['btnSubmit']))
                    {
                    
                    $name      = $_POST['t1'];
                    $lastname  = $_POST['t2'];
                    $phone     = $_POST['t3'];
                    $email     = $_POST['t4'];
                    $edu       = $_POST['ch2'];
                    $lang      = $_POST['l'];                    
                    $languageList = implode(',',$lang);
                    $educationList = implode(',',$edu);
                    
               $fileName = $_FILES['image']['name'];
               $fileType = $_FILES['image']['type'];
               $fileTmp  = $_FILES['image']['tmp_name'];
               $fileSize = $_FILES['image']['size']; //bytes
              

              if($fileType =='image/jpeg' || $fileType=='image/png' || $fileType =='image/gif' || $fileType=='image/jpg')             
               {
                if($fileSize<=600*1024)
              
              {
                if(!file_exists("uploads")) mkdir("uploads");
               move_uploaded_file($fileTmp,"uploads/".$fileName);
               echo"image upload successfull";
             } 
           }else
             {echo"failed";}
              

                   

      
        ?>
                    



                

              
            

           
           <table class="table table-hover table-bordered ">
                <thead class="bg-danger">
                <tr>
                    <th>Name </th>
                    <th>LastName </th>
                    <th>Phone </th>
                    <th>Email :</th>
                     <th>Educational Qualifications:</th>
                      <th>Language Speak</th>
                      <th>Image</th>
                </tr>
              </thead>
                <tr>
                   <td><?php echo $name; ?></td>
                   <td><?php echo $lastname; ?></td>
                   <td><a href="tel:<?php echo $phone; ?>"><?php echo $phone; ?></a></td>
                   <td><a href="mailto:<?php echo $email ;?>"><?php echo $email ;?></a></td>
                    <td><?php echo $educationList; ?></td>
                   <td><?php echo $languageList; ?></td>
                   <td><img src="<?php echo "uploads/". $fileName; ?> "></td>
                </tr>
              </table>
            <?php
                  }
              ?>  
       </div>
   

             
     <a href="index1.php">Back</a>


</body>
</html>