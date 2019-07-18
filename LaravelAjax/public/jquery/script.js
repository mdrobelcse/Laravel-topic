$(function(){

 

		   
		    $("#error_name_msg").hide();
		    $("#error_department_msg").hide();
		   
			 var error_name = false;
			 var error_department = false;
			
			 
			  
			$("#name").focusout(function() {

				 check_name();
				
			});
			 
			$("#department").focusout(function() {

				 check_department();
				
			});

			 
          //check name

           function check_name() {
	
				var name_lenght = $("#name").val().length;

				if(name_lenght == '0') {
					$("#error_name_msg").html("the name field is required");
					$("#error_name_msg").show();
					error_name = true;
				}  
	
	      }
 
 


          //check department

           function check_department() {
	
				var department = $("#department").val();

				if(department == '0') {
					$("#error_department_msg").html("please select a department");
					$("#error_department_msg").show();
					error_department = true;
				} else {
					$("#error_department_msg").hide();
				}  
	
	      }
 



          $("#addstudent").submit(function() {
											
				 
				error_name = false;
				error_department = false;
			     
				check_name();
				check_department();
				
				
				if(error_department == false && error_name == false) {
					return true;
				} else {
					return false;	
				}

			});



	 

});