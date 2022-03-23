<script type="text/javascript">
	let nameValid=()=>{
let name = document.getElementById('t1').value;
if(name =='' || name ==null){
console.log('Name is Required');
document.getElementById('errorName').innerHTML='Name is Required';
 document.getElementById('t1').classList.add('is-invalid');
   document.getElementById('btnReg').disabled = true;
}
else{
let nameRegex=/^[A-Za-z\s]{4,}/;
if (nameRegex.test(name)){
  console.log(name);

document.getElementById('t1').classList.remove('is-invalid');
document.getElementById('btnReg').diabled=false;
document.getElementById('errorName').innerHTML='';
     }

else{
console.log('Invalid Name');
document.getElementById('t1').classList.add('is-invalid');
document.getElementById('btnReg').diabled=true;
document.getElementById('errorName').innerHTML='Name Must contain Atleast 4 lettters';
}
}
};




let phoneValid=()=>{
let phn=document.getElementById('t2').value;
if(phn=='' || phn==null){
console.log('Phone No. Required');
document.getElementById('t2').classList.add('is-invalid');
document.getElementById('errorPhone').innerHTML='Phone No. is Required';
document.getElementById('btnReg').disabled=true;

}else{
if(phn.length==10){
if(phn.substr(0,1)==9 || phn.substr(0,1)==8 || phn.substr(0,1)==7 || phn.substr(0,1)==6){
console.log(phn);
document.getElementById('t2').classList.remove('is-invalid');
document.getElementById('errorPhone').innerHTML='';
document.getElementById('btnReg').disabled=false;

}else{
console.log('PhoneNo. must Start with 9,7,6,5');
document.getElementById('t2').classList.add('is-invalid');
document.getElementById('errorPhone').innerHTML='Invalid Phone number ';
document.getElementById('btnReg').disabled=true;


}
}else{
console.log('Invalid Phone No.');
document.getElementById('t2').classList.add('is-invalid');
document.getElementById('errorPhone').innerHTML='Phone number must contain 10 digits';
document.getElementById('btnLogin').disabled=true;

}
}
};
let emailValid=()=>{
let email=document.getElementById('t3').value;
let emailRegex=/^(([^<>()[\]\\.,;:\s@"]+(\.[^<>()[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
if(email=='' || email== null){
           console.log('Email is required');
           document.getElementById('t3').classList.add('is-invalid');
           document.getElementById('errorEmail').innerHTML='Email is required';
           document.getElementById('btnReg').disabled= true;

}else{
if(emailRegex.test(email)){
console.log(email);
           document.getElementById('t3').classList.remove('is-invalid');
           document.getElementById('errorEmail').innerHTML='';
           document.getElementById('btnReg').disabled= false;
}else{
console.log('Invalid Email');
           document.getElementById('t3').classList.add('is-invalid');
           document.getElementById('errorEmail').innerHTML='Invalid Email';
           document.getElementById('btnReg').disabled= true;
}
}


};
let validPass1=()=>{
let pass1=document.getElementById('p1').value;
let passRegex=/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[$@$!%*?&])[A-Za-z\d$@$!%*?&]{8,15}/;
if(pass1=='' || pass1== null){
console.log('PassWord is Required');
document.getElementById('p1').classList.add('is-invalid');
document.getElementById('btnReg').disabled=true;
document.getElementById('errorPass1').innerHTML='Password is required';
}else{
if(passRegex.test(pass1)){
console.log('Password taken');
document.getElementById('p1').classList.remove('is-invalid');
document.getElementById('btnReg').disabled=false;
document.getElementById('errorPass1').innerHTML='';

}else{
console.log('Invalid password');
document.getElementById('p1').classList.add('is-invalid');
document.getElementById('btnReg').disabled=true;
document.getElementById('errorPass1').innerHTML='Password must Contains Atleast <br/><small><ul><li>One UpperCase</li><li>One LowerCase</li><li>One Digit</li><li>One Special Char.</li><li>Min 8 to Max 15 Chars Long.</ul></small>';
}
}
};
let confirmPass=()=>{
let pass1=document.getElementById('p1').value;
let pass2=document.getElementById('p2').value;
if(pass2=='' || pass2==null){
console.log('Confirmation Required');
document.getElementById('p2').classList.add('is-invalid');
document.getElementById('errorPass2').innerHTML='Retype Password';
document.getElementById('btnReg').disabled=true;
        }else{
        if(pass1==pass2){
        console.log('password Confirmed');
document.getElementById('p2').classList.remove('is-invalid');
document.getElementById('errorPass2').innerHTML='';
document.getElementById('btnReg').disabled=false;

        }else{
        console.log('Password Mismatched');
document.getElementById('p2').classList.add('is-invalid');
document.getElementById('errorPass2').innerHTML='Password Mismatched';
document.getElementById('btnReg').disabled=true;
        }
        }
};
let togglePass=()=>{
	console.log('Clicked');
	pass1=document.getElementById('p1');
	pass2=document.getElementById('p2');
	if(ch1.checked){
		pass1.type=pass2.type='text';
	}else{
		pass1.type=pass2.type='password';
	}

};
let togglePass2=()=>{
        console.log('checked');
        pass1=document.getElementById('p3');
        if(ch2.checked){
                pass1.type='text';
        }else{
                pass1.type='password';
        }
};

</script>