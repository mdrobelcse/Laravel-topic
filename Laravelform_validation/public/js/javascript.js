//javascript form valiation



//validate name

function validatename(){


	 var getname = document.getElementById('name');
	 var name = getname.value;
	 // var nameregexress =  /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;

	 var nameregexress = /^[a-zA-Z. ]{2,30}$/;

	 getname.style.color="white";
	 if (nameregexress.test(name)) {

           getname.style.backgroundColor="green";
           getname.style.borderColor="yellow";
           document.getElementById('name_error').innerHTML="great ! this is valid name";
 
	 }else{

           getname.style.backgroundColor="red";
           getname.style.borderColor="Purple";
           document.getElementById('name_error').innerHTML="name only can contain a-z and A-Z and . operation";
	 }
    
}



//validate email

function validateemail(){


	 var getemail = document.getElementById('email');
	 var email = getemail.value;
	 var emailregexress =  /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;

	 getemail.style.color="white";
	 if (emailregexress.test(email)) {

          getemail.style.backgroundColor="green";
          document.getElementById('email_error').innerHTML="great ! this is valid email";
 
	 }else{

            getemail.style.backgroundColor="red";
            document.getElementById('email_error').innerHTML="please enter a valid email addredd";
	 }
    
}




//validate phone


function validatephone(){


	 var getphone = document.getElementById('phone');
	 var phone = getphone.value;
	 // var phoneregexress =  /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;

	 var phoneregexress = /^[\+]?[(]?[0-9]{3}[)]?[-\s\.]?[0-9]{3}[-\s\.]?[0-9]{4,6}$/im;

	 getphone.style.color="white";
	 if (phoneregexress.test(phone)) {

          getphone.style.backgroundColor="green";
          document.getElementById('phone_error').innerHTML="great ! this is valid phone";
 
	 }else{

            getphone.style.backgroundColor="red";
            document.getElementById('phone_error').innerHTML="please enter a valid phone";
	 }
    
}


//validate roll number




function validateroll(){


	 var getrollno = document.getElementById('rollno');
	 var rollno = getrollno.value;
	 var rollnoregexress =  /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;

	 getrollno.style.color="white";
	 if (rollnoregexress.test(rollno)) {

           getrollno.style.backgroundColor="green";
           document.getElementById('roll_error').innerHTML="great ! this is valid roll";
           
	 }else{

            getrollno.style.backgroundColor="red";
            document.getElementById('roll_error').innerHTML="please enter a valid roll number";

	 }
    
}



//validate registration number


function validatereg(){


	 var getregno = document.getElementById('regno');
	 var regno = getregno.value;
	 var regnoregexress =  /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;

	 getregno.style.color="white";
	 if (regnoregexress.test(regno)) {

           getregno.style.backgroundColor="green";
           document.getElementById('reg_error').innerHTML="great ! this is valid registraion";
           
	 }else{

            getregno.style.backgroundColor="red";
            document.getElementById('reg_error').innerHTML="plese enter a valid registraion";

	 }
    
}


//validate password

function validatepass(){


	 var getpassword = document.getElementById('password');
	 var password = getpassword.value;
	 // var passwordregexress =  /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;


	 var passwordregexress = /^(?=.*[0-9])(?=.*[!@#$%^&*])[a-zA-Z0-9!@#$%^&*]{6,16}$/;

	 getpassword.style.color="white";
	 if (passwordregexress.test(password)) {

           getpassword.style.backgroundColor="green";
           document.getElementById('pass_error').innerHTML="greate ! this is valid password";
           
	 }else{

            getpassword.style.backgroundColor="red";
            document.getElementById('pass_error').innerHTML="password only can contain (a-z,A-Z,0-9) and you should enter a a special character";

	 }
    
}