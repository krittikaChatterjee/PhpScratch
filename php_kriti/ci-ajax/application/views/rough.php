<!DOCTYPE html>
<html>
<head>
    <title>Welcome</title>
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <script type="text/javascript">
        function find(s){
            if(s.length==0){
                populateList();
            }
            else if(s.length >=3){
              console.log(s);
              $.ajax({
                  url:'<?php echo base_url();?>index.php/home/search/'+s,
                  method:'GET',
                  success:function(result){
                    if(result=='error'){
                      $('#output').html("<div class='alert alert-danger'>No Such Record Available....</div>");
                    }else{
                      $('#output').html(result);
                      }
                  }
              });   
            }
        }
        
        function populateList(){
           $.ajax({
              url:'<?php echo base_url();?>index.php/home/hello',
              method:'GET',
              success:function(result){
                  console.log(result);
                  $('#output').html("<div align='center' class='alert'>Loading Data Please wait...</div>");
                  setTimeout(function(){
                 $('#output').html(result);
                  },3000);
                 
              }
          });   
    
        }
        
    </script>

</head>
<body>
      
    
          <input type="text" name="sr" id="sr" class="form-control" placeholder="search Title,Desctiption Here...." style="text-align: center;" onkeyup="find(this.value)">


    
</body>
</html>

