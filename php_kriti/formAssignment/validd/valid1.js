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
        

       
  
            
          
