$(function(){
	$("#addcustomerform").on("submit", function(e){
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
			 
			success: function(data){

				 
				if(data == "success"){
					
					swal("Great", "Student added successfully", "success");
					$("#myModal").modal("hide");
					form[0].reset();
					return getCustomerData();
				
					 
				}
			},


		});

	});


		function getCustomerData(){
		var url = $("#getalldata").data("url");

		$.ajax({
			url: url, 
			type: "get",
			dataType: "HTMl",
			success: function(response){
				$("#showAllDataHere").html(response);
			}	
		})
	   }


	 // View Data
	$(document).on("click", "#view", function(e){
		e.preventDefault();
		var id = $(this).data("id");
		var url = $(this).attr("href");

		$.ajax({
			url: url,
			data: {id:id},
			type: "GET",
			dataType: "JSON",
			success: function(response){
				if($.isEmptyObject(response) != null){

					$("#viewstudent").modal("show");
					$("#studentname").text(response.name + "'s Data");
					$("#name").val(response.name);
					$("#phone").val(response.phone);
					$("#email").val(response.email);
					$("#district").val(response.district);
				}
			}
		});

	});


	// Edit student data
	$(document).on("click", "#edit", function(arg){
		arg.preventDefault();
		var id = $(this).data("id");
		var url = $(this).attr("href");

		$.ajax({
			url: url,
			data: {id:id},
			dataType:"JSON",
			type: "GET",
			success(response){

				 $("#UpdateCustomer").modal("show");
				 $(".name").val(response.name);
				 $(".phone").val(response.phone);
				 $(".email").val(response.email);
				 $(".district").val(response.district);
				 $("#customerid").val(response.id);
				// $("#updatecustomertitle").text("Update " + response.name + "'s Data");
			}
		})

	 });	


	//update student data

		$("#updatecustomerform").on("submit", function(arg){
		arg.preventDefault();
		var form =$(this);
		var url = form.attr("action");
		var type = form.attr("method");
		var data = form.serialize();

		$.ajax({
			url: url,
			type: type,
			dataType: "JSON",
			data: data,
			
			success: function(response){

                 
				 //console.log(response);
				if(response == "success"){
					swal("Student data updated successfully", "Success", "success");
					$("#UpdateCustomer").modal("hide");
					return getCustomerData();
				}
			},
			
		});

	});



   //delete student data

	$(document).on("click", "#delete", function(arg){
		arg.preventDefault();
		var id = $(this).data("id");
		var url = $(this).attr('href');

		console.log(url+id);

		$.ajax({
			url: url,
			data: {id:id},
			type: "GET",
			dataType: "JSON", 
			success(response){
				swal("Deleted", "Student data has been deleted", "success");
				return getCustomerData();
			}
		})

	})		




});