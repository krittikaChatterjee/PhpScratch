<!DOCTYPE html>
<html>
<head>
  
  
  <title>Php form validation</title>
    
  <meta name="viewport" content="width=device-width,initial-scale=1.0">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <style type="text/css">
        /* Chrome, Safari, Edge, Opera */
input::-webkit-outer-spin-button,
input::-webkit-inner-spin-button {
  -webkit-appearance: none;
  margin: 0;
}

/* Firefox */
input[type=number] {
  -moz-appearance: textfield;
}
    </style>
    
    
  
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
                document.getElementById('b2').disabled = true;
            }
            else{

                 let nameRegex=/^[A-Za-z\s]{3,}/;
                 if(nameRegex.test(name))
                 {
                 console.log(name);
                 document.getElementById('t1').classList.remove('is-invalid');
                 document.getElementById('errorName').innerHTML='';
                 document.getElementById('b1').disabled=false;
                 document.getElementById('b2').disabled=false;
                 } 
                 else
              {
                console.log('Invalid name');
                document.getElementById('t1').classList.add('is-invalid');
                document.getElementById('errorName').innerHTML="Name can't contains any Number & Min 3 Chars Long.";
                document.getElementById('b1').disabled=true;
                document.getElementById('b2').disabled=true;
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
                document.getElementById('b2').disabled = true;
            }
            else{

                 let lastnameRegex=/^[A-Za-z\s]{3,}/;
                if(lastnameRegex.test(lastname))
              {
                console.log(lastname);
                document.getElementById('t2').classList.remove('is-invalid');
                document.getElementById('errorLastname').innerHTML='';
                document.getElementById('b1').disabled=false;
                document.getElementById('b2').disabled=false;
              }
              else
              {
                console.log('Invalid name');
                document.getElementById('t2').classList.add('is-invalid');
                document.getElementById('errorLastname').innerHTML="Last name can't contains any Number & Min 3 Chars Long.";
                document.getElementById('b1').disabled=true;
                document.getElementById('b2').disabled=true;
              }
            }
        };

        let emailValid=()=>
        {
            let email = document.getElementById('t4').value;
            let emailRegex=/^(([^<>()[\]\\.,;:\s@"]+(\.[^<>()[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{3,}))$/;

            if(email == '' || email == null)
            {
                 console.log('Email is Required');
                  document.getElementById('t4').classList.add('is-invalid');
                document.getElementById('errorEmail').innerHTML='Email is Required';
                document.getElementById('b1').disabled=true;
                document.getElementById('b2').disabled=true;
            }
            else
            {
               if(emailRegex.test(email))
               {
                console.log(email);
                 document.getElementById('t4').classList.remove('is-invalid');
                document.getElementById('errorEmail').innerHTML='';
                document.getElementById('b1').disabled=false;
                document.getElementById('b2').disabled=false;
               }
            else
            {
                console.log('Invalid Email');
                document.getElementById('t4').classList.add('is-invalid');
                document.getElementById('errorEmail').innerHTML='Invalid Email Address';
                document.getElementById('b1').disabled=true;
                document.getElementById('b2').disabled=true;
            }
        }
    };
    let phoneValid=()=>
    {
            let phone = document.getElementById('t3').value;

            if(phone == '' || phone == null)
            {
                console.log('Phone is Required');
                 document.getElementById('t3').classList.add('is-invalid');
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
                       document.getElementById('t3').classList.remove('is-invalid');
                       document.getElementById('errorPhone').innerHTML='';
                       document.getElementById('b1').disabled=false;
                       document.getElementById('b2').disabled=false;
                  }
                 else
                 {
                        console.log('Invalid Phone Number');
                         document.getElementById('t3').classList.add('is-invalid');
                       document.getElementById('errorPhone').innerHTML='Invalid Mobile Number.';
                       document.getElementById('b1').disabled=true; 
                       document.getElementById('b2').disabled=true;
                 } 
               }
            
          
              else
              {
                     console.log("must contains 10 Digits");
                      document.getElementById('t3').classList.add('is-invalid');
                       document.getElementById('errorPhone').innerHTML='Mobile Number must contains 10 Digit';
                       document.getElementById('b1').disabled=true;
                       document.getElementById('b2').disabled=true;
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
                document.getElementById('b2').disabled=true;
            }else{
                
                if(passRegex.test(pass1)){
                    console.log('Password is Taken');
                    document.getElementById('errorPass').innerHTML='';
                document.getElementById('p1').classList.remove('is-invalid');
                document.getElementById('b1').disabled=false;
                document.getElementById('b2').disabled=false;
                }else{
                    console.log('Invalid Password');
                    document.getElementById('errorPass').innerHTML='Password must contains atleast <br/><small><ul><li>One UpperCase</li><li>One LowerCase</li><li>One Digit</li><li>One Special Char.</li><li>Min 8 to Max 15 Chars Long.</ul></small>';
                document.getElementById('p1').classList.add('is-invalid');
                document.getElementById('b1').disabled=true;
                document.getElementById('b2').disabled=true;
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
               document.getElementById('b2').disabled=true;
            }else{
              
              if(pass1 == pass2){
                 console.log('Password matched');
                  document.getElementById('p2').classList.remove('is-invalid');
               document.getElementById('errorPass2').innerHTML='';
               document.getElementById('b1').disabled=false;
               document.getElementById('b2').disabled=false;
              }else{
                console.log('Password mismatch');
                 document.getElementById('p2').classList.add('is-invalid');
               document.getElementById('errorPass2').innerHTML="Password does'nt Match";
               document.getElementById('b1').disabled=true;
               document.getElementById('b2').disabled=true;
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

     <div class="container border">
           <header class="bg-primary text-green"><font color="black"><h1 align="center">SignUp Now</h1></font></header>
         <form action="form2.php" method="post"  autocomplete="off">  
           
       
             <div class="row">

             <div class="col">
              <label>Name :</label>
              <input type="text" name="t1" id="t1" required placeholder="e.g krittika" class="form-control " onkeyup="nameValid()">
              <section id="errorName" class="text-danger"></section>
             </div>

             <div class="col">
                <label>Last Name :</label>
                <input type="text" name="t2" id="t2" required placeholder="e.g chatterjee" class="form-control" onkeyup="lastnameValid()">
                <section id="errorLastname" class="text-danger"></section>
             </div>

         </div>
    
     


             <div class="form-group">
                <label>Phone :</label>
                <input type="number" name="t3" id="t3" required placeholder="+91" class="form-control" onkeyup="phoneValid()">
                <section id="errorPhone" class="text-danger"></section>
             </div>

             <div class="form-group">
              <label>Email :</label>
              <input type="text" name="t4" id="t4" required placeholder="abc@gmail.com" class="form-control" onkeyup="emailValid()">
                <section id="errorEmail" class="text-danger"></section>
             </div>
             <!--Adding Language speak options -->
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
                <!--Adding educational Qualifications -->
                <div class="form-group">
                   <label>Educational Qualifications:</label>
                   <input type="checkbox" name="ch2[]" value="10">10<sup>th</sup>
                   <input type="checkbox" name="ch2[]" value="12">12<sup>th</sup>
                   <input type="checkbox" name="ch2[]" value="Graduation">Graduation
                   <input type="checkbox" name="ch2[]" value="Post Graduation">Post Graduation

                </div>

             <div class="form-group">
              <label>Password :</label>
              <input type="password" name="p1" id="p1" required placeholder="Password" class="form-control" onkeyup="passPolicy()" maxlength="15">
                <section id="errorPass" class="text-danger"></section>
             </div>

             <div class="form-group">
              <label>Confirm Password :</label>
              <input type="password" name="p2" id="p2" required placeholder="Retype Password" class="form-control" onkeyup="passMatch()">
                <section>
                    <input type="checkbox" name="ch1" id="ch1" onchange="togglePass()">Show/Hide.
                </section>
                <section id="errorPass2" class="text-danger"></section>

             </div>
              
             <div class="form-group">
              
                 <button name="btnSubmit" value="submit" id="b2" class="btn btn-sm btn-warning">Submit</button>
             </div>
            
         </form>
<?php
                  if(isset($_POST['btnSubmit'])){
                    
                     // print_r($_POST);
                    
                    $name      = $_POST['t1'];
                    $lastname  = $_POST['t2'];
                    $phone     = $_POST['t3'];
                    $email     = $_POST['t4'];
                    $edu       = $_POST['ch2'];

                    $lang      = $_POST['l'];
                    
                    $languageList = implode(',',$lang);

                    $educationList = implode(',',$edu);

                    //echo "Welcome ".$name." Phone ".$phone." Email".$email;


                

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
                </tr>
              </thead>
                <tr>
                   <td><?php echo $name; ?></td>
                   <td><?php echo $lastname; ?></td>
                   <td><a href="tel:<?php echo $phone; ?>"><?php echo $phone; ?></a></td>
                   <td><a href="mailto:<?php echo $email ;?>"><?php echo $email ;?></a></td>
                    <td><?php echo $educationList; ?></td>
                   <td><?php echo $languageList; ?></td>
                </tr>
              </table>
              <?php
                  }
              ?>
       </div>
   
    

</body>
</html>