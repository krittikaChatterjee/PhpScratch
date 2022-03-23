<script type="text/javascript">
  let nameValid =()=>
        {
            let name = document.getElementById('t1').value;
            if(name =='' || name ==null)
            {
                console.log('Name is Required');
                document.getElementById('errorName').innerHTML='Name is Required';
                document.getElementById('t1').classList.add('is-invalid');
                document.getElementById('btn').disabled = true;
               
            }
            else{

                 let nameRegex=/^[A-Za-z\s]{3,}/;
                 if(nameRegex.test(name))
                 {
                 console.log(name);
                 document.getElementById('t1').classList.remove('is-invalid');
                 document.getElementById('errorName').innerHTML='';
                 document.getElementById('btn').disabled=false;
                 
                 } 
                 else
              {
                console.log('Invalid name');
                document.getElementById('t1').classList.add('is-invalid');
                document.getElementById('errorName').innerHTML="Name can't contains any Number & Min 3 Chars Long.";
                document.getElementById('btn').disabled=true;
                
              }
            }
        };

         let emailValid=()=>
        {
            let email = document.getElementById('t2').value;
            let emailRegex=/^(([^<>()[\]\\.,;:\s@"]+(\.[^<>()[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{3,}))$/;

            if(email == '' || email == null)
            {
                 console.log('Email is Required');
                  document.getElementById('t2').classList.add('is-invalid');
                document.getElementById('errorEmail').innerHTML='Email is Required';
                document.getElementById('btn').disabled=true;
              
            }
            else
            {
               if(emailRegex.test(email))
               {
                console.log(email);
                 document.getElementById('t2').classList.remove('is-invalid');
                document.getElementById('errorEmail').innerHTML='';
                document.getElementById('btn').disabled=false;
                
               }
            else
            {
                console.log('Invalid Email');
                document.getElementById('t2').classList.add('is-invalid');
                document.getElementById('errorEmail').innerHTML='Invalid Email Address';
                document.getElementById('btn').disabled=true;
                
            }
        }
    };

    let phoneValid=()=>{
let phn=document.getElementById('t3').value;
if(phn=='' || phn==null){
console.log('Phone No. Required');
document.getElementById('t3').classList.add('is-invalid');
document.getElementById('errorPhone').innerHTML='Phone No. is Required';
document.getElementById('btn').disabled=true;

}else{
if(phn.length==10){
if(phn.substr(0,1)==9 || phn.substr(0,1)==8 || phn.substr(0,1)==7 || phn.substr(0,1)==6){
console.log(phn);
document.getElementById('t3').classList.remove('is-invalid');
document.getElementById('errorPhone').innerHTML='';
document.getElementById('btn').disabled=false;

}else{
console.log('PhoneNo. must Start with 9,7,6,5');
document.getElementById('t3').classList.add('is-invalid');
document.getElementById('errorPhone').innerHTML='Invalid Phone number ';
document.getElementById('btn').disabled=true;


}
}else{
console.log('Invalid Phone No.');
document.getElementById('t3').classList.add('is-invalid');
document.getElementById('errorPhone').innerHTML='Phone number must contain 10 digits';
document.getElementById('btn').disabled=true;

}
}
};
 let random_function=()=>
 
            {
                var a=document.getElementById("input").value;
                if(a==="WB")
                {
                    var arr=["Hooghly","Howrah","Bankura"];
                }
                else if(a==="ODISHA")
                {
                    var arr=["Bhubaneshwar","Cuttack","Bhadrak"];
                }
             
                var string="";
             
                for(i=0;i<arr.length;i++)
                {
                    string=string+"<option value="+arr[i]+">"+arr[i]+"</option>";
                }
                document.getElementById("output").innerHTML=string;
            };



</script>
