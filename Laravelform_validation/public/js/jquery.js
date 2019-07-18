$(function(){

 

		    $("#name_error_msg").hide();
		    $("#email_error_msg").hide();
		    $("#roll_error_msg").hide();
		    $("#reg_error_msg").hide();
		    $("#dep_error_msg").hide();
		    $("#pass_error_msg").hide();
		    $("#repass_error_msg").hide();
		   
		    
			 

			var error_name = false;
			var error_email = false;
			var error_roll = false;
			var error_reg = false;
			var error_department = false;
			var error_password = false;
			var error_repassword = false;
			
			 
			 

			$("#name").focusout(function() {

				 check_name();
				
			});

			$("#email").focusout(function() {

				 check_email();
				
			});

			$("#rollno").focusout(function() {

				 check_rollno();
				
			});

			$("#regno").focusout(function() {

				 check_regno();
				
			});
			$("#department").focusout(function() {

				 check_department();
				
			});

			$("#password").focusout(function() {

				 check_password();
				
			});

			$("#repassword").focusout(function() {

				 check_repassword();
				
			});


           //check name
			function check_name() {
	
				var name_length = $("#name").val().length;


				if (name_length =='0') {

                    $("#name_error_msg").html("the name field is required");
					$("#name_error_msg").show();
					error_name = true;

				}else if(name_length < 5 || name_length > 20) {

					$("#name_error_msg").html("name should be between 5-20 characters");
					$("#name_error_msg").show();
					error_name = true;
				} else {
					$("#name_error_msg").hide();
				}
			
			}


            //check email
			function check_email() {

					var pattern = new RegExp(/^[+a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/i);
				    var email_length = $("#email").val().length;    
	            
	                if (email_length == '0') {
	                    
	                    $("#email_error_msg").html("the email field is required");
						$("#email_error_msg").show();
						error_email = true;

	                }else if(pattern.test($("#email").val())) {
						$("#email_error_msg").hide();
					} else {
						$("#email_error_msg").html("this is invalid email address");
						$("#email_error_msg").show();
						error_email = true;
					}
 

          }


          //check roll number

         	function check_rollno() {
  
                
				var pattern = /^[0-9]+$/;
				var roll = $("#rollno").val();
				var roll_length = $("#rollno").val().length;


				if (roll_length == '0') {
                   
                    $("#roll_error_msg").html("the roll number field is required");
					$("#roll_error_msg").show();
					error_roll = true;

				}else if(roll_length < 8 || roll_length > 12){
                     
                    $("#roll_error_msg").html("roll number should between 8-12 characters");
					$("#roll_error_msg").show();
					error_roll = true;

				}else if(!roll.match(pattern)){

                       $("#roll_error_msg").html("roll can contain only 0-9");
					   $("#roll_error_msg").show();
					   error_roll = true;
  
				} else {

					$("#roll_error_msg").hide();
				}

          }



          //check register number


          function check_regno() {

			    var pattern = /^[+a-zA-Z0-9-]+$/;
				var reg = $("#regno").val();
				var reg_length = $("#regno").val().length;


				if (reg_length == '0') {

                    $("#reg_error_msg").html("registration field is required");
					$("#reg_error_msg").show();
					error_reg = true;

				}else if(reg_length < 8 || reg_length > 12){
                     
                    $("#reg_error_msg").html("registration should between 8-12 characters");
					$("#reg_error_msg").show();
					error_reg = true;

				} else if(!reg.match(pattern)){

                       $("#reg_error_msg").html("registraion can contain only 0-9 a-zA-Z and -");
					   $("#reg_error_msg").show();
					   error_reg = true;
  
				} else {

					$("#reg_error_msg").hide();
				}

          }


          //check department

           function check_department() {
	
				var department = $("#department").val();

				if(department == '0') {
					$("#dep_error_msg").html("please select a department");
					$("#dep_error_msg").show();
					error_department = true;
				} else {
					$("#dep_error_msg").hide();
				}  
	
	      }


          //check password


          function check_password() {
	
				var password_length = $("#password").val().length;
				
                 if (password_length == '0') {

                    $("#pass_error_msg").html("password field is required");
					$("#pass_error_msg").show();
					error_password = true;

                 }else if(password_length  < 8 || password_length  > 18) {
					$("#pass_error_msg").html("password should between 8-18 characters");
					$("#pass_error_msg").show();
					error_password = true;
				} else {
					$("#pass_error_msg").hide();
				}
	
	      }
       
        

        //check re password

         
         	function check_repassword() {
	
				var password = $("#password").val();
				var retype_password = $("#repassword").val();
				
				if(password !=  retype_password) {
					$("#repass_error_msg").html("passwords don't match");
					$("#repass_error_msg").show();
					error_repassword = true;
				} else {
					$("#repass_error_msg").hide();
				}
			
			}




          $("#addstudent").submit(function() {
											
				error_name = false;
				error_email = false;
				error_roll = false;
				error_reg = false;
				error_department = false;
				error_password = false;
				error_repassword = false;
			    
				 
													
				check_name();
				check_email();
				check_rollno();
				check_regno();
				check_department();
				check_password();
				check_repassword();
				
				
				if(error_name == false && error_email == false && error_roll == false && error_reg == false && error_password == false && error_department == false) {
					return true;
				} else {
					return false;	
				}

			});



	 

});