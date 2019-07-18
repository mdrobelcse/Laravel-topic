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
  	 }

  </style>
</head>
<body>

<div class="container">
   <div class="row">
   	   <div class="col-sm-3"></div>
   	   <div class="col-sm-6">
   	   	
             <h2 class="text-center">Jquery from validation</h2>
			  <form action="{{ url('add/teacher/data') }}" method="post" id="teacherfrom">
			  	{{ csrf_field() }}
			    <div class="form-group">
			      <label for="name">Name:</label>
			      <input type="text" class="form-control" id="name" placeholder="Enter name" name="name">
			      <span class="error_msg" id="erro_name_msg"></span>
			    </div>
			    <div class="form-group">
			      <label for="email">E-mail:</label>
			      <input type="text" class="form-control" id="email" placeholder="Enter email" name="email">
			      <span class="error_msg" id="erro_email_msg"></span>
			       
			    </div>
			    <div class="form-group">
			      <label for="department">Department:</label>
			      <input type="text" class="form-control" id="department" placeholder="Enter department" name="department">
			      <span class="error_msg" id="erro_department_msg"></span>
			       
			    </div>
			    <div class="form-group">
			      <label for="rollno">Roll Number:</label>
			      <input type="text" class="form-control" id="rollno" placeholder="Enter roll" name="rollno">
			      <span class="error_msg" id="erro_rollno_msg"></span>
			        
			    </div>
			    <div class="form-group">
			      <label for="regno">Registration Number:</label>
			      <input type="text" class="form-control" id="regno" placeholder="Enter registration" name="regno">
			      <span class="error_msg" id="erro_regno_msg"></span>
			       
			    </div>
			   
			    <div class="form-group">
			      <label for="password">Password:</label>
			      <input type="password" class="form-control" id="password" placeholder="Enter password" name="password">
			      <span class="error_msg" id="erro_password_msg"></span>
			      
			    </div>
			    <div class="form-group">
			      <label for="re-pwd">Re-type Password:</label>
			      <input type="password" class="form-control" id="repassword" placeholder="Enter re-type password" name="repassword">
			       <span class="error_msg" id="error_repassword_msg"></span>
			       
			    </div>
			    <button type="submit" class="btn btn-primary">Submit</button>
			  </form>

   	   </div>
   	   <div class="col-sm-3"></div>
   </div>
</div>

<script>
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
</script>
<script src="{{ asset('jquery/script.js') }}"></script>
<script src="{{ asset('jquery/jquery.js') }}"></script>

</body>
</html>
