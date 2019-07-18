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
  	
      
      .list{

      	list-style: none;
      	color: red;
      }

      #error_name_msg, #error_email_msg, #error_dep_msg{

      	color: red;
      }

  </style>
</head>
<body>

<div class="container">
     <div class="row">
     	 <div class="col-sm-3"></div>
     	 <div class="col-sm-6">
     	 	
                  <h2>Employrr from validation</h2><br> 
				   
				<form action="{{ url('add/emp/data') }}" name='addemployee' method="post" id="addemployee">
                    
				    <div class="form-group">
				      <label for="email">Employrr name:</label>
				      <input type="text" class="form-control" id="name" placeholder="Enter name" name="name">
				      <span id="error_name_msg"></span>

				    </div>
				    <div class="form-group">
				      <label for="pwd">Employee e-mail:</label>
				      <input type="text" class="form-control" id="email" placeholder="Enter email" name="email">
				      <span id="error_email_msg"></span>
				    </div>

				     <div class="form-group">
				      <label for="email">Employee department:</label>
				       <select class="form-control" name="department" id="department">
				      	  <option value="0">Select department</option>
				      	  <option value="1">CSE</option>
				      	  <option value="2">EEE</option>
				      	  <option value="3">CIVIL</option>
				      </select>
				      <span id="error_dep_msg"></span>

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

<script type="text/javascript" src="{{ asset('jquery/emp.js') }}"></script>
<script>
$(document).ready(function(){

 $('#email').blur(function(){
  var error_email = '';
  var email = $('#email').val();
  var _token = $('input[name="_token"]').val();
  var filter = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
  if(email=="")
  {    
     $('#error_email_msg').html('<li class="list">please enter an email addredd</li>');
     $('#email').addClass('has-error');
     $('#register').attr('disabled', 'disabled');
  } 
  else
  {

		   	if(!filter.test(email)){
                
                   $('#error_email_msg').html('<li class="list">this is invalid email addredd</li>');
				   $('#email').addClass('has-error');
				   $('#register').attr('disabled', 'disabled');

		   	}else{


		   		  $.ajax({
					    url:"{{ route('email.check') }}",
					    method:"POST",
					    data:{email:email, _token:_token},
					    success:function(result)
					    {
					     if(result == 'unique')
					     {
					      $('#error_email_msg').html('<li class="list">the email is available</li>');
					      $('#email').removeClass('has-error');
					      $('#register').attr('disabled', false);
					     }
					     else
					     {
					      $('#error_email_msg').html('<li class="list">this email is not available</li>');
					      $('#email').addClass('has-error');
					      $('#register').attr('disabled', 'disabled');
					     }
					    }
				   })
		   	}
		  
  }
 });

 
});
</script>




  

</body>
</html>
