$(function(){
	$("#teacherform").on("submit", function(e){
		e.preventDefault();
		var form = $(this);
		var url = form.attr("action");
		var type = form.attr("method");
		var data = form.serialize();
     

         $.ajax({

			url: url,
			data: data,
			type: type,
			dataType: "JSON",
			 
			success: function(response){
				 
				 if($.isEmptyObject(response.error)){

                      $("#name").val("");
                      $("#email").val("");
                      $("#phone").val("");
                      $("#rollno").val("");
                      $("#regno").val("");
                      // $("#department").val("");
                      $("#password").val("");

				 }else{
                   
                     var error = response.error;
                     $(".error_field ul").empty();
                     error.forEach(function(value){

                          $(".error_field ul").append("<li>"+value+"</li>");
                     })

				 }
			},
			 

		 });
		 
	});

   

  


});