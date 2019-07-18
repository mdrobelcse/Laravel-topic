$(function(){

 

		    $("#error_name_msg").hide();
		    $("#error_email_msg").hide();
		    $("#error_dep_msg").hide();
		   
		   
		    
			 

			var error_name = false;
			var error_email = false;
			var error_department = false;
			
			 
			 

			$("#name").focusout(function() {

				 check_name();
				
			});


			$("#name").focusout(function() {

				 check_email();
				
			});
 
			$("#department").focusout(function() {

				 check_department();
				
			});

			 


           //check name
			function check_name() {
	
				var name_length = $("#name").val().length;


				if (name_length =='0') {

                    $("#error_name_msg").html("the name field is required");
					$("#error_name_msg").show();
					error_name = true;

				}else if(name_length < 5 || name_length > 20) {

					$("#error_name_msg").html("name should be between 5-20 characters");
					$("#error_name_msg").show();
					error_name = true;
				} else {
					$("#error_name_msg").hide();
				}
			
			}


			//check email
			function check_email() {
	
				var email_length = $("#email").val().length;


				if (email_length =='0') {

                    $("#error_email_msg").html("the email field is required");
					$("#error_email_msg").show();
					error_email = true;

				}
			
			}

 


          //check department

           function check_department() {
	
				var department = $("#department").val();

				if(department == '0') {
					$("#error_dep_msg").html("please select a department");
					$("#error_dep_msg").show();
					error_department = true;
				} else {
					$("#error_dep_msg").hide();
				}  
	
	      }


          //check password
 
        

    



          $("#addemployee").submit(function() {
											
				 error_name = false;
			     error_email = false;
			     error_department = false;
			    
				 
													
				check_name();
				check_email();
				check_department();
				
				
				
				if(error_name == false && error_email == false && error_department == false) {
					return true;
				} else {
					return false;	
				}

			});



	 

});