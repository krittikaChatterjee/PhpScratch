<!DOCTYPE html>
<html>
<head>
	<title>tab using jquery</title>
    <!--Add jQuery Library-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <!--adding jquery -ui.js CDN-->
    <script src="http://code.jquery.com/ui/1.10.4/jquery-ui.js"></script> 
    <!--adding jquery-ui.css cdn-->
    <link href="http://code.jquery.com/ui/1.10.4/themes/ui-lightness/jquery-ui.css" rel="stylesheet"> 

    
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

<style type="text/css">
     body{
            background-image:url('images/vacc.jpg');
      /*How to Strech the Image without any repetation*/
            background-repeat: no-repeat;
            background-size: cover;
            color:black;}
</style>

        
	
    <script type="text/javascript">
        $(document).ready(function(){
            console.log('jQuery Loaded');
            $('#d1').tabs(); 

        });
$(document).ready(function(){
        console.log('jQuery Ui Loaded !');
        $('#d11').datepicker({
            changeYear:true,
            changeMonth:true,
            yearRange:'1910:2021',
            dateFormat:'d-m-yy'

        });
        $('#d2').datepicker({
            changeMonth:true,
            maxDate:120,
            minDate:0,
        });

        //Click event on Button
        $('#btn1').click(function(){
            //console.log('Button clicked');
            let currentDate = new Date();
            let currentYear = currentDate.getYear()+1900;
            //console.log(currentYear);

            let dob = new Date( $('#d1').datepicker('getDate')).getYear()+1900;
           // console.log(dob);
           let age = currentYear - dob;
           console.log(age);
           //injecting the output to s1 span
          $('#s1').html(`Your age is ${age}`);
          if(age>=18 && age<=80){
            alert('Eligible for  Vaccination');
          }else{
            alert('Age must be within 18 - 80 ');
          }
        });

    });
</script>
<script type="text/javascript">
        let nameValid =()=>
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
            
                 
               
      

    </script>
</head>
<body>
 <font color="white"><h1 align="center">Welcome to WB Health Portal</h1></font>
     <div id="d1">
     	   <ul>
     	   	<li><a href="#tab1">Home</a></li>
     	   	<li><a href="#tab2">About</a></li>
     	   	<li><a href="#tab3">Contacts</a></li>
            <li><a href="#tab4">Registration</a></li>
            <li><a href="#tab5">Slot Booking</a></li>

     	   </ul>


         <section id="tab1">
            <h1>DO WE REALLY NEED VACCINE ?</h1>
         	"Every vaccine doesn't require universal immunisation and all these priority groups whom we are vaccinating today like healthcare staff first and then senior citizens and people aged between 45 and 59 years, it will be extended in the coming days – all these are based on experts' opinion.      

"Not only Indian experts, but we have also consulted WHO guidelines regarding priority groups," he said. 

Serum Institute's Covishield and Bharat Biotech's Covaxin have been currently approved for restricted emergency use in India.Replying to a question by NCP MP Supriya Sule on whether the government is aiming at universal immunisation of COVID-19 vaccine, Vardhan said it is not scientifically necessary to administer the vaccine to each and every person in the country. 

"Not each and every person in the world will be vaccinated. The prioritisation process is a dynamic process. 

"The behaviour of the virus is also dynamic. All things are based on scientific facts, scrutiny and vision of the overall scientific and health community," he said.      
         </section>

         <section id="tab2">
            <h1>The different types of COVID-19 vaccines</h1>
         	This article is part of a series of explainers on vaccine development and distribution. Learn more about vaccines – from how they work and how they’re made to ensuring safety and equitable access – in WHO’s Vaccines Explained series.

As of December 2020, there are over 200 vaccine candidates for COVID-19 being developed. Of these, at least 52 candidate vaccines are in human trials. There are several others currently in phase I/II, which will enter phase III in the coming months (for more information on the clinical trial phases, see part three of our Vaccine Explained series).

Why are there so many vaccines in development?
Typically, many vaccine candidates will be evaluated before any are found to be both safe and effective. For example, of all the vaccines that are studied in the lab and laboratory animals, roughly 7 out of every 100 will be considered good enough to move into clinical trials in humans. Of the vaccines that do make it to clinical trials, just one in five is successful. Having lots of different vaccines in development increases the chances that there will be one or more successful vaccines that will be shown to be safe and efficacious for the intended prioritized populations.
         </section>
         <section id="tab3">
         	<h1>KOLKATA COVID HOSPITAL !</h1>
         	No
State District Name of COVID Hosp Remarks
1. West
Bengal
Kolkata MR Bangur DH & SSH<br>
2. Kolkata Amri Hosp, Salt Lake<br>
3. Kolkata Desun Hosp Empanelled with ECHS<br>
4. Kolkata IDBG<br>
5. Kolkata KPC Medical College<br>
6. Kolkata Kolkata Medical College<br>
7. Kolkata CNCI<br>
8. Alipurduar Integrated Ayush Hospital,
Tapsikhata<br>
9. Bankura Onda SSH<br>
10. Bankura Medicare General Hospital (NH)<br>
11. Birbhum Glocal Hospital, Birbhum<br>
12. Birbhum RMYF Royal Nursing Home &
Diagnostic Centre<br>
13. Birbhum Madhumamata Lodge<br>
14. Coochbehar Cooch Behar Mission Hospital<br>
         </section>
        
         <section id="tab4">
             <h1>Register Now</h1>
             <div class="container border">
           <header class="bg-primary text-green"><font color="black"><h1 align="center">Register Now</h1></font></header>
           <form action="assignment2.html" method="post"  autocomplete="off">   
           
       
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

             
        
        <div class="form-group"> <label>DATE OF BIRTH :</label> <input type="text" name="d11" id="d11">
         <button id="btn1">Caluclate</button>
         <span id="s1"></span>
        </div>
         <div>
             <form id="test">
    <label for="gender">Gender:</label>
    <input type="radio" name="gender" value="0">Male</input>
    <input type="radio" name="gender" value="1">Female</input>
    
</form>
         </div>
             
             <div class="form-group">
                
                 <button id="b2" class="btn btn-sm btn-warning">Submit</button>
             </div>
            
         </form>

       </div>
         </section>

         <section id="tab5">
            <h1>BOOK YOUR SLOT</h1>
             Booking Date : <input type="text" name="d2" id="d2">

         </section>

     </div>


</body>
</html>