<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width,initial-scale=1.0">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<title>Welcome</title>
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
      

       
       

        let emailValid=()=>
        {
            let email = document.getElementById('t3').value;
            let emailRegex=/^(([^<>()[\]\\.,;:\s@"]+(\.[^<>()[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{3,}))$/;

            if(email == '' || email == null)
            {
                 console.log('Email is Required');
                  document.getElementById('t3').classList.add('is-invalid');
                document.getElementById('errorEmail').innerHTML='Email is Required';
                document.getElementById('b1').disabled=true;
                
            }
            else
            {
               if(emailRegex.test(email))
               {
                console.log(email);
                 document.getElementById('t3').classList.remove('is-invalid');
                document.getElementById('errorEmail').innerHTML='';
                document.getElementById('b1').disabled=false;
                
               }
            else
            {
                console.log('Invalid Email');
                document.getElementById('t3').classList.add('is-invalid');
                document.getElementById('errorEmail').innerHTML='Invalid Email Address';
                document.getElementById('b1').disabled=true;
                
            }
        }
    };
    let phoneValid=()=>
    {
            let phone = document.getElementById('t2').value;

            if(phone == '' || phone == null)
            {
                console.log('Phone is Required');
                 document.getElementById('t2').classList.add('is-invalid');
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
                       document.getElementById('t2').classList.remove('is-invalid');
                       document.getElementById('errorPhone').innerHTML='';
                       document.getElementById('b1').disabled=false;
                       
                  }
                 else
                 {
                        console.log('Invalid Phone Number');
                         document.getElementById('t2').classList.add('is-invalid');
                       document.getElementById('errorPhone').innerHTML='Invalid Mobile Number.';
                       document.getElementById('b1').disabled=true; 
                       
                 } 
               }
            
          
              else
              {
                     console.log("must contains 10 Digits");
                      document.getElementById('t2').classList.add('is-invalid');
                       document.getElementById('errorPhone').innerHTML='Mobile Number must contains 10 Digit';
                       document.getElementById('b1').disabled=true;
                       
              } 

            }
        
        };



        let passPolicy=()=>{
            let pass1 = document.getElementById('p1').value;
            let passRegex=/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[$@$!%*?&])[A-Za-z\d$@$!%*?&]{8,15}/;

           
            if(pass1 =='' || pass1==null){
                console.log('Password is mandatory');
                document.getElementById('errorPass').innerHTML='Password is Mandatory';
                document.getElementById('p1').classList.add('is-invalid');
                document.getElementById('b1').disabled=true;
                
            }else{
                
                if(passRegex.test(pass1)){
                    console.log('Password is Taken');
                    document.getElementById('errorPass').innerHTML='';
                document.getElementById('p1').classList.remove('is-invalid');
                document.getElementById('b1').disabled=false;
                
                }else{
                    console.log('Invalid Password');
                    document.getElementById('errorPass').innerHTML='Password must contains atleast <br/><small><ul><li>One UpperCase</li><li>One LowerCase</li><li>One Digit</li><li>One Special Char.</li><li>Min 8 to Max 15 Chars Long.</ul></small>';
                document.getElementById('p1').classList.add('is-invalid');
                document.getElementById('b1').disabled=true;
               
                }
            }
        };

        let passMatch=()=>{
            let pass1 = document.getElementById('p1').value;
            let pass2 = document.getElementById('p2').value;
            
            if(pass2=='' || pass2==null){
               console.log('Confirm Password is Required');
               document.getElementById('p2').classList.add('is-invalid');
               document.getElementById('errorPass2').innerHTML='Confirm Password is Required';
               document.getElementById('b1').disabled=true;
              
            }else{
              
              if(pass1 == pass2){
                 console.log('Password matched');
                  document.getElementById('p2').classList.remove('is-invalid');
               document.getElementById('errorPass2').innerHTML='';
               document.getElementById('b1').disabled=false;
               
              }else{
                console.log('Password mismatch');
                 document.getElementById('p2').classList.add('is-invalid');
               document.getElementById('errorPass2').innerHTML="Password does'nt Match";
               document.getElementById('b1').disabled=true;
               
              } 
            }
        };
        let togglePass=()=>{
            let ch1 = document.getElementById('ch1');
            let pass1 =document.getElementById('p1');
            let pass2 =document.getElementById('p2');

            if(ch1.checked)
                 pass1.type = pass2.type='text';
            else
                 pass1.type=pass2.type='password';

        };
        

       
  
            
          
</script>
	  <div class="container">
	  	<header><h1>SignUp</h1></header>
	  	<form method="post">
	  	<div class="form-group">
	  		<label>Name :</label>
	  		<input type="text" name="t1" id="t1" required class="form-control" onkeyup="nameValid()">
	  			<section id="errorName" class="text-danger"></section>
	  	</div>
	  	<div class="form-group">
	  		<label>Phone :</label>
	  		<input type="number" name="t2" id="t2" required class="form-control" onkeyup="phoneValid()">
	  		<section id="errorPhone" class="text-danger"></section>
	  	</div>
	  	<div class="form-group">
	  		<label>Email :</label>
	  		<input type="text" name="t3" id="t3"  onkeyup="emailValid()" required class="form-control">
	  		 <section id="errorEmail" class="text-danger"></section>
	  	</div>
	  	<div class="form-group">
	  		<label>Address :</label>
	  		<input type="text" name="t4" required class="form-control">
	  	</div>
	  	<div class="form-group">
	  		<label>Salary :</label>
	  		<input type="text" name="t5" required class="form-control">
	  	</div>
	  	
	  	<div class="form-group">
	  		<label>Age :</label>
	  		<input type="number" name="t6" required class="form-control">
	  	</div>
	  	<div class="form-group">
	  		<label>Password :</label>
	  		<input type="text" name="p1" id="p1" required class="form-control" onkeyup="passPolicy()" maxlength="15">
	  		<section id="errorPass" class="text-danger"></section>
	  	</div>
	  	<div class="form-group">
	  		<label>Confirm password :</label>
	  		<input type="text" name="p2" id="p2" required class="form-control" onkeyup="passMatch()">
	  		<section>
                    <input type="checkbox" name="ch1" id="ch1" onchange="togglePass()">Show/Hide.
                </section>
                <section id="errorPass2" class="text-danger"></section>

	  	</div>
	  	<div class="form-group">
	  		<label>Gender :</label>
	  		<input type="radio" name="r1" value="Male">Male
	  		<input type="radio" name="r1" value="Female">Female
	  	</div>
	  	<div class="form-group">
	  		<button name="btn" id="b1" class="btn btn-sm btn-primary" value="submit">Submit</button>
	  	</div>
	  </form>
	  <?php 
             if(isset($_POST['btn'])){
             	  $name       = $_POST['t1'];
             	  $phone       = $_POST['t2'];
             	  $email       = $_POST['t3'];
             	  $address       = $_POST['t4'];
             	  $salary       = $_POST['t5'];
             	  $age       = $_POST['t6'];
             	  $pass       = $_POST['p1'];
             	  $cpass      = $_POST['p2'];
             	  $gender     = $_POST['r1'];
                  //here we include the class once.
             	  include_once("User.php");
             	  $obj = new User($name,$phone,$email,$address,$salary,$age,$pass,$cpass,$gender);
             	  $data = $obj->getUser();
                  
                  #print_r($data);
               ?>
                     <table class="table table-hover table-bordered">
                     	<tr>
                     		
                     		<th>Name</th>
                     		<th>Phone Number</th>
                     		<th>Email Id</th>
                     		<th>Address</th>
                     		<th>Salary</th>
                     		<th>Age</th>
                     		<th>Gender</th>
                     	</tr>
                     	<tr>
                     		<td><?php echo $data['name']; ?></td>
                     		<td><?php echo $data['phone']; ?></td>
                     		<td><?php echo $data['email']; ?></td>
                     		<td><?php echo $data['address']; ?></td>
                     		<td><?php echo $data['salary']; ?></td>
                     		<td><?php echo $data['age']; ?></td>
                     		<td><?php echo $data['gender']; ?></td>
                     	</tr>
                     </table>
               <?php
             }
	  ?>
	  </div>

</body>
</html>