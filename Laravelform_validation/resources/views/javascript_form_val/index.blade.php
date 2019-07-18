<!DOCTYPE html>
<html lang="en">
<head>
  <title>Javascript form validation</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>

  <style type="text/css">
  	
        .erroe{

        	color: red;
        	font-size: 15px;
        }

  </style>
 
</head>
<body>

<div class="container" style="margin-bottom: 40px;">
   <div class="row">
   	    <div class="col-sm-6 col-sm-offset-3">
   	    	
              <h2 style="font-size: 20px;text-align: center;">Javascript form validation(employee)</h2>
              
			  <form action="#" method="post" name="teacherform" id="empform">
			  	{{ csrf_field() }}
			    <div class="form-group">
			      <label for="name">Name:</label>
			      <input type="text" class="form-control" id="name" placeholder="Enter name" name="name" onkeyup="validatename()">
			      <span class="erroe" id="name_error"></span>
			    </div>
			    <div class="form-group">
			      <label for="email">E-mail:</label>
			      <input type="text" class="form-control" id="email" placeholder="Enter email" name="email" onkeyup="validateemail()">
			       <span class="erroe" id="email_error"></span>
			    </div>
			    <div class="form-group">
			      <label for="phone">Phone:</label>
			      <input type="text" class="form-control" id="phone" placeholder="Enter phone" name="phone" onkeyup="validatephone()">
			      <span class="erroe" id="phone_error"></span>
			    </div>
			    <div class="form-group">
			      <label for="rollno">Roll Number:</label>
			      <input type="text" class="form-control" id="rollno" placeholder="Enter roll" name="rollno" onkeyup="validateroll()">
			       <span class="erroe" id="roll_error"></span>
			    </div>
			     <div class="form-group">
			      <label for="regno">Registration Number:</label>
			      <input type="text" class="form-control" id="regno" placeholder="Enter regno" name="regno" onkeyup="validatereg()">
			      <span class="erroe" id="reg_error"></span>
			    </div>
			    <div class="form-group">
			      <label for="password">Password:</label>
			      <input type="password" class="form-control" id="password" placeholder="Enter password" name="password" onkeyup="validatepass()">
			      <span class="erroe" id="pass_error"></span>
			    </div>
			      
			   
			    <button name="register" id="register" type="submit" class="btn btn-default">Submit</button>
			  </form>

   	    </div>
   </div>
</div>

 <script type="text/javascript" src="{{ asset('js/javascript.js') }}"></script>
 

</body>
</html>
