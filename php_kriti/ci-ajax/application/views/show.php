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
        function delete1(id){
            var r = confirm('Do You want to Delete This Record');
            if(r){
            console.log(id);
            $.ajax({
                url:'<?php echo base_url();?>index.php/home/delete/'+id,
                method:'POST',
                success:function(result){
                    $('#output').html("Processing...<br/><img src='<?php echo base_url();?>assets/ajax-loader.gif'/>");
                    setTimeout(function(){
                         console.log(result);
                        if(result=='success'){
                         $('#output').html("<div class='alert alert-success'>One List Removed.</div>");
                         populateList();
                        }else{
                         $('#output').html("<div class='alert alert-danger'>Unable to Delete !</div>");
                        }
                    },3000);
                         
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
        $(document).ready(function(){
            console.log('jQuery Loaded');
        /*$('#t1').keyup(function(){
                $.ajax(
                    {
                        url:'<?php echo base_url();?>index.php/home/submit',
                        method:'POST',
                        data :{'p1':$('#t1').val()},
                        success:function(result){
                             console.log(result);
                             $('#output').html(result);
                        }
                 });
            });
        */
          populateList();          
         

          $('#btnAdd').click(function(){
              console.log('Clicked');
              $.ajax({
                  url:'<?php echo base_url();?>index.php/home/submit',
                  method:'POST',
                  data:{'title':$('#t1').val(),'description':$('#t2').val()},
                  success:function(result){
                   
                      //console.log(result);
                   if(result =='success')
                   {
                       $('#output1').html("Please Wait");   
                     setTimeout(function(){
                       $('#output1').html("<div class='alert alert-success'>One List Added !</div>");
                   populateList();
                     },3000);    
                  
                   }else{
                    $('#output1').html("<div class='alert alert-danger'>Unable to add List.. Please Try after some time..</div>");
                   
                   }
                  }
              });
          });


        });
    </script>

</head>
<body>
      <h1>AJAX Simple Example...</h1>
      
     <!-- Name : <input type="text" name="t1" id="t1" autocomplete="off">

      <span id="output"></span>-->
     <div class="container">  
      <div class="row">
      <div class="col-lg-6 border-right">
          <header class="modal-header"><h2>Displaying List</h2></header><br/>
       <div id="output"></div>
       </div>
       <div class="col-lg-6">
           <div id="output1"></div>
              <header class="modal-header"><h2>Add List</h2></header>
               <div class="form-group">

                   <label>Title :</label>
                   <input type="text" name="t1" id="t1" class="form-control">
               </div>
               <div class="form-group">
                   <label>Description :</label>
                   <textarea rows="6" cols="30" name="t2" id="t2" class="form-control"></textarea>
               </div>
               <div class="form-group">
                   <button class="btn btn-sm btn-danger" type="button" id="btnAdd">Add</button>
               </div>

       </div>
 </div>

          <hr/>
          <br/>
          <input type="text" name="sr" id="sr" class="form-control" placeholder="search Title,Desctiption Here...." style="text-align: center;" onkeyup="find(this.value)">


     </div>  

</body>
</html>

