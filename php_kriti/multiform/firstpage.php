<!DOCTYPE html>
<html>
<head>
	<title>First page</title>
	<meta name="viewport" content="width=device-width,initial-scale=1.0">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<!--Add jQuery Library-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <!--adding jquery -ui.js CDN-->
    <script src="http://code.jquery.com/ui/1.10.4/jquery-ui.js"></script> 
    <!--adding jquery-ui.css cdn-->
    <link href="http://code.jquery.com/ui/1.10.4/themes/ui-lightness/jquery-ui.css" rel="stylesheet"> 

</head>
<body>
	
<style type="text/css">
    body{
       background-color:lightblue;
        }

</style>
	<script>let nameValid =()=>
        {
            let name = document.getElementById('t1').value;
            if(name =='' || name ==null)
            {
                console.log('Name is Required');
                document.getElementById('errorName').innerHTML='Name is Required';
                document.getElementById('t1').classList.add('is-invalid');
                document.getElementById('b1').disabled = true;
               
            }
            else{

                 let nameRegex=/^[A-Za-z\s]{3,}/;
                 if(nameRegex.test(name))
                 {
                 console.log(name);
                 document.getElementById('t1').classList.remove('is-invalid');
                 document.getElementById('errorName').innerHTML='';
                 document.getElementById('b1').disabled=false;
                 
                 } 
                 else
              {
                console.log('Invalid name');
                document.getElementById('t1').classList.add('is-invalid');
                document.getElementById('errorName').innerHTML="Name can't contains any Number & Min 3 Chars Long.";
                document.getElementById('b1').disabled=true;
               
              }
            }
        };
      

       
        let lastnameValid=()=>
        {
            let lastname = document.getElementById('t2').value;
            if(lastname =='' || lastname ==null)
            {
                console.log('Name is Required');
                document.getElementById('errorLastname').innerHTML='Last Name is Required';
                document.getElementById('t2').classList.add('is-invalid');
                document.getElementById('b1').disabled = true;
                
            }
            else{

                 let lastnameRegex=/^[A-Za-z\s]{3,}/;
                if(lastnameRegex.test(lastname))
              {
                console.log(lastname);
                document.getElementById('t2').classList.remove('is-invalid');
                document.getElementById('errorLastname').innerHTML='';
                document.getElementById('b1').disabled=false;
                
              }
              else
              {
                console.log('Invalid name');
                document.getElementById('t2').classList.add('is-invalid');
                document.getElementById('errorLastname').innerHTML="Last name can't contains any Number & Min 3 Chars Long.";
                document.getElementById('b1').disabled=true;
                
              }
            }
        };

        let emailValid=()=>
        {
            let email = document.getElementById('t5').value;
            let emailRegex=/^(([^<>()[\]\\.,;:\s@"]+(\.[^<>()[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{3,}))$/;

            if(email == '' || email == null)
            {
                 console.log('Email is Required');
                  document.getElementById('t5').classList.add('is-invalid');
                document.getElementById('errorEmail').innerHTML='Email is Required';
                document.getElementById('b1').disabled=true;
                
            }
            else
            {
               if(emailRegex.test(email))
               {
                console.log(email);
                 document.getElementById('t5').classList.remove('is-invalid');
                document.getElementById('errorEmail').innerHTML='';
                document.getElementById('b1').disabled=false;
                
               }
            else
            {
                console.log('Invalid Email');
                document.getElementById('t5').classList.add('is-invalid');
                document.getElementById('errorEmail').innerHTML='Invalid Email Address';
                document.getElementById('b1').disabled=true;
                
            }
        }
    };
    let phoneValid=()=>
    {
            let phone = document.getElementById('t4').value;

            if(phone == '' || phone == null)
            {
                console.log('Phone is Required');
                 document.getElementById('t4').classList.add('is-invalid');
                       document.getElementById('errorPhone').innerHTML='Phone is Required';
                       document.getElementById('b1').disabled=true;
            }
            else
            {
              if(phone.length == 10)
              {
                  if(phone.substr(0,1)=='9' || phone.substr(0,1)=='8' || phone.substr(0,1)=='7' || phone.substr(0,1)=='6')
                  {
                       console.log(phone);
                       document.getElementById('t4').classList.remove('is-invalid');
                       document.getElementById('errorPhone').innerHTML='';
                       document.getElementById('b1').disabled=false;
                       
                  }
                 else
                 {
                        console.log('Invalid Phone Number');
                         document.getElementById('t4').classList.add('is-invalid');
                       document.getElementById('errorPhone').innerHTML='Invalid Mobile Number.';
                       document.getElementById('b1').disabled=true; 
                       
                 } 
               }
            
          
              else
              {
                     console.log("must contains 10 Digits");
                      document.getElementById('t4').classList.add('is-invalid');
                       document.getElementById('errorPhone').innerHTML='Mobile Number must contains 10 Digit';
                       document.getElementById('b1').disabled=true;
                       
              } 

            }
        
        };
       $( function() {
    $( "#t6" ).datepicker();
 
        });
        
</script>
	<div class="container">
	<h1 align="center">PERSONAL DETAILS OF CANDIDATE</h1>
	<form method="post" action="secondpage.php">
    <div class="form-group">
      <label>NAME OF THE CANDIDATE:</label>
      <input type="text" name="t1" id="t1" class="form-control" required placeholder="abc" onkeyup="nameValid()" required="">
      <section id="errorName" class="text-danger"></section>
    </div>
    <div class="form-group">
    	<label>GUARDIAN'S NAME OF THE CANDIDATE:</label>
      <input type="text" name="t2" id="t2" class="form-control" required placeholder="abc" onkeyup="lastnameValid()" required="">
      <section id="errorLastname" class="text-danger"></section>
    </div>
    <div class="form-group">
    	<label>ADDRESS :</label>
      <input type="text" name="t3" id="t3" class="form-control" required placeholder="max 25 letters" maxlength="25" required="">
    </div>
    <div class="form-group">
    	<label>PHONE NUMBER:</label>
      <input type="number" name="t4" id="t4" class="form-control"  required placeholder="+91" onkeyup="phoneValid()" required="">
       <section id="errorPhone" class="text-danger"></section>
    </div>
    <div class="form-group">
    	<label>EMAIL ID:</label>
      <input type="text" name="t5" id="t5" class="form-control" required placeholder="abc@gmail.com" onkeyup="emailValid()" required="">
      <section id="errorEmail" class="text-danger"></section>
    </div>
     <div class="form-group">
    	<label>DATE OF BIRTH:</label>
      <input type="text" name="t6" id="t6" class="form-control" required="">
    </div>
    <div class="row" >
     <div class="col">
             GENDER :
             <input type="radio" name="r1" value="Male">MALE
              <input type="radio" name="r1" value="Female">FEMALE
              </div>
     <div class="col" >
              EXAMINATION VENUE : <select name="c1" required>
              <option value="">---Select a City---</option>
              <option>Kolkata</option>
              <option>Chennai</option>
              <option>Mumbai</option>
              <option>Delhi</option>
      </select>
  </div>
  <div class="col" >
              CATEGORY: <select name="c2" required>
              <option value="">---Select category---</option>
              <option>UR</option>
              <option>OBC</option>
              <option>SC/ST</option>
              <option>EWS</option>
      </select>
  </div>
  <div class="form-group">
	   	 	<button class="btn btn-sm btn-primary" id="b1" >Next</button>
	   	 </div>
</div>
</form>
</div>

</body>
</html>