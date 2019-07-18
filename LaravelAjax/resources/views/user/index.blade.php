 <!DOCTYPE html>
<html lang="en">
<head>
  <title>ajax and laravel form validation</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  <style type="text/css">
  	
      #error_name_msg{
        
        color: red;

      }

      #error_email_msg{
        
        color: red;

      }

      #error_department_msg{
        
        color: red;

      }

      li{

      	list-style: none;
      }



  </style>
</head>
<body>

<div class="container">
     <div class="row">
     	 <div class="col-sm-3"></div>
     	 <div class="col-sm-6">
     	 	
                  <h2>Ajax email availability(Laravel)</h2><br> 
				   
				<form action="{{ url('add/user/data') }}" name='adduser' method="post" id="adduser">
                    
                   

				    <div class="form-group">
				      <label for="email">Name:</label>
				      <input type="text" class="form-control" id="name" placeholder="Enter name" name="name">
				      <span id="error_name_msg"></span>

				    </div>
				    <div class="form-group">
				      <label for="pwd">E-mail:</label>
				      <input type="text" class="form-control" id="email" placeholder="Enter email" name="email">
				      <span id="error_email_msg"></span>
				    </div>

				     <div class="form-group">
				      <label for="email">Department:</label>
				       <select class="form-control" name="department" id="department">
				      	  <option value="0">Select department</option>
				      	  <option value="1">CSE</option>
				      	  <option value="2">EEE</option>
				      	  <option value="3">CIVIL</option>
				      </select>
				      <span id="error_department_msg"></span>

				    </div>

 

				    <div class="form-group">
				      <button name="register" id="register" type="submit" class="btn btn-default">Submit</button>
				    </div>
				     
				    {{ csrf_field() }} 

              </form>     

     	 </div>
     	 <div class="col-sm-3"></div>
     </div>
</div>


<script type="text/javascript" src="{{asset('jquery/script.js')}}"></script>

<script>
$(document).ready(function(){


//email


 $('#email').blur(function(){
  var error_email = '';
  var email = $('#email').val();
  var _token = $('input[name="_token"]').val();
  var filter = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
  if(email=="")
  {    
     $('#error_email_msg').html('<li>please enter an email addredd</li>');
     $('#email').addClass('has-error');
     $('#register').attr('disabled', 'disabled');
  } 
  else
  {

		   	if(!filter.test(email)){
                
                   $('#error_email_msg').html('<li>this is invalid email addredd</li>');
				   $('#email').addClass('has-error');
				   $('#register').attr('disabled', 'disabled');

		   	}else{


		   		  $.ajax({
					    url:"{{ route('email_available.check') }}",
					    method:"POST",
					    data:{email:email, _token:_token},
					    success:function(result)
					    {
					     if(result == 'unique')
					     {
					      $('#error_email_msg').html('<li>the email is available</li>');
					      $('#email').removeClass('has-error');
					      $('#register').attr('disabled', false);
					     }
					     else
					     {
					      $('#error_email_msg').html('<li>this email is not available</li>');
					      $('#email').addClass('has-error');
					      $('#register').attr('disabled', 'disabled');
					     }
					    }
				   })
		   	}
		  
  }
 });

//name

  $('#name').blur(function(){
  var error_name = '';
  var name = $('#name').val();
  var _token = $('input[name="_token"]').val();
 
 	   if (name=="") {

              $('#error_name_msg').html('<li>please enter an username</li>');
			      $('#name').removeClass('has-error');
			      $('#register').attr('disabled', false);
 	   }else{

 	   	   $.ajax({
			    url:"{{ route('name_available.check') }}",
			    method:"POST",
			    data:{name:name, _token:_token},
			    success:function(result)
			    {
			     if(result == 'unique')
			     {
			      $('#error_name_msg').html('<li>the user name is available</li>');
			      $('#name').removeClass('has-error');
			      $('#register').attr('disabled', false);
			     }
			     else
			     {
			      $('#error_name_msg').html('<li>this name is not available</li>');
			      $('#name').addClass('has-error');
			      $('#register').attr('disabled', 'disabled');
			     }
			    }
		   })
 	   }
 
 });


//department
 



 
});
</script>


<script type="text/javascript">
	
       $(function(){
	   $("#adduser").on("submit", function(e){
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
					$('#error_name').fadeOut();
					$('#error_email').fadeOut();
					form[0].reset();
					 
				}
			},


		});

	});

  


});

</script>



</body>
</html>
