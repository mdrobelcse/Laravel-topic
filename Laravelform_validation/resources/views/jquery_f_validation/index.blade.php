 <!DOCTYPE html>
<html lang="en">
<head>
  <title>Jquery from validation</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
 

  <style type="text/css">
  	
  	 .error_msg{

  	 	color: red;
  	 	font-size: 16px;
  	 	list-style: none;
  	 }
  
     .success{

     	 color: green;
  	 	 font-size: 16px;
  	 	 list-style: none;
     }
  </style>
</head>
<body>

<div class="container">
   <div class="row">
   	   <div class="col-sm-3"></div>
   	   <div class="col-sm-6">
   	   	
             <h2 class="text-center">Jquery from validation(students)</h2>
			  <form name="myform" id="addstudent" action="{{ url('add/student/data') }}" method="post" onsubmit="return validateForm();">
			  	 {{ csrf_field() }}


			    <div class="form-group">

			      <label for="name">Name:</label>
			      <input type="text" class="form-control" id="name" placeholder="Enter name" name="name">
			      <span class="error_msg" id="name_error_msg"></span>
			     
			    </div>

			    <div class="form-group">
			      <label for="email">E-mail:</label>
			      <input type="text" class="form-control" id="email" placeholder="Enter email" name="email">
			      <span class="error_msg" id="email_error_msg"></span>
			       
			       
			     
			    </div>

			     <div class="form-group">
			      <label for="rollno">Roll Number:</label>
			      <input type="text" class="form-control" id="rollno" placeholder="Enter rollno" name="rollno">
			       <span class="error_msg" id="roll_error_msg"></span>
			     
			    </div>

			    <div class="form-group">
			      <label for="regno">Reg Number:</label>
			      <input type="text" class="form-control" id="regno" placeholder="Enter regno" name="regno">
			       <span class="error_msg" id="reg_error_msg"></span> 
			     
			    </div>
			    <div class="form-group">
			      <label for="regno">Department:</label>
			      <select class="form-control" id="department" name="department">
			      	  <option value="0">select department</option>
			      	  <option value="1">CSE</option>
			      	  <option value="2">EEE</option>
			      	  <option value="3">Civil</option>
			      </select>

			      <span class="error_msg" id="dep_error_msg"></span> 
			     
			    </div>
			     <div class="form-group">
			        <label for="password">Password:</label>
			         <input type="password" class="form-control" id="password" placeholder="Enter password" name="password">

			         <span class="error_msg" id="pass_error_msg"></span> 
			     
			     </div>
			     <div class="form-group">
			        <label for="repassword">Re-type Password:</label>
			         <input type="password" class="form-control" id="repassword" placeholder="Enter password" name="repassword">

			          <span class="error_msg" id="repass_error_msg"></span> 
			     
			     </div>
			     
			    
			     
			    
			    <button name="register" id="register" type="submit" class="btn btn-primary">Submit</button>
			  </form>

			 

   	   </div>
   	   <div class="col-sm-3"></div>
   </div>
</div>


<!--existing data availablity in database-->

<!-----> 
<script>
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
</script>
 <script src="{{ asset('js/jquery.js') }}"></script> 

 

</body>
</html>
