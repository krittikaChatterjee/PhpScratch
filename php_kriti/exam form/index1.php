<!DOCTYPE html>
<html>
<head>
  <title>Php form validation</title>
    
  <meta name="viewport" content="width=device-width,initial-scale=1.0">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
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
       background-color:gray;
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



        
</script>

     <div class="container border">
           <header class="bg-primary text-green"><font color="black"><h1 align="center">SignUp Now</h1></font></header>
         <form action="form1.php" method="post"  autocomplete="off" enctype="multipart/form-data">  
           
       
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

             <div class="form-group">
              <label>Address :</label>
              <input type="text" name="p1" id="p1" required placeholder="maximum 25 letters" class="form-control"  maxlength="25">
                
             </div>

             
            
             <div class="form-group">
             Gender :<input type="radio" name="r1" value="Male">Male
              <input type="radio" name="r1" value="Female">Female
              </div>
              <div >
               City  : <select name="c1" required>
              <option value="">---Select a City---</option>
              <option>Kolkata</option>
              <option>Chennai</option>
              <option>Mumbai</option>
              <option>Delhi</option>
      </select>
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
              <!--Adding educational Qualifications -->
                <div class="form-group">
                   <label>Educational Qualifications:</label>
                   <input type="checkbox" name="ch2[]" value="10">10<sup>th</sup>
                   <input type="checkbox" name="ch2[]" value="12">12<sup>th</sup>
                   <input type="checkbox" name="ch2[]" value="Graduation">Graduation
                   <input type="checkbox" name="ch2[]" value="Post Graduation">Post Graduation

                </div>
              
           
               <div class="form-group">
                 
                    Upload Image : <input type="file" name="image" required>
                  <small>Max:600KB</small>
                 
                 
             </div>

             <div class="form-group">    
                 <button name="btnSubmit" value="submit" id="b2" class="btn btn-sm btn-warning">Submit</button>
               </div>
           
      
         </form>

       </div>
       
   
    

</body>
</html>