<!DOCTYPE html>
<html lang="en">
<head>
  <title>Laravel server side validation</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  <style type="text/css">


      .error_field{

              margin-top: 30px;
               
       }
  	
       .error_field ul li{

              list-style: none;
              color: red;

       }

  </style>
</head>
<body>

<div class="container" style="margin-bottom: 40px;">
   <div class="row">
   	    <div class="col-sm-6 col-sm-offset-3">
   	    	
              <h2 style="font-size: 20px;text-align: center;">Server side validation(Laravel/teacher)</h2>
              
              <div class="error_field">
              	
                   <ul>
                   	 
 
                   </ul>

              </div>

			  <form action="{{ url('add/teacher/data') }}" method="post" name="teacherform" id="teacherform">
			  	{{ csrf_field() }}
			    <div class="form-group">
			      <label for="name">Name:</label>
			      <input type="text" class="form-control" id="name" placeholder="Enter name" name="name">
			    </div>
			    <div class="form-group">
			      <label for="email">E-mail:</label>
			      <input type="text" class="form-control" id="email" placeholder="Enter email" name="email">
			    </div>
			    <div class="form-group">
			      <label for="phone">Phone:</label>
			      <input type="text" class="form-control" id="phone" placeholder="Enter phone" name="phone">
			    </div>
			    <div class="form-group">
			      <label for="rollno">Roll Number:</label>
			      <input type="text" class="form-control" id="rollno" placeholder="Enter roll" name="rollno">
			    </div>
			     <div class="form-group">
			      <label for="regno">Registration Number:</label>
			      <input type="text" class="form-control" id="regno" placeholder="Enter regno" name="regno">
			    </div>
			     <div class="form-group">
			      <label for="department">Department:</label>
			      <select class="form-control" id="department" name="department">
			      	   <option selected="">Select department</option>
			      	   <option value="1">CSE</option>
			      	   <option value="2">EEE</option>
			      	   <option value="3">Civil</option>
			      </select>
			     </div>
			    <div class="form-group">
			      <label for="password">Password:</label>
			      <input type="password" class="form-control" id="password" placeholder="Enter password" name="password">
			    </div>
			      
			   
			    <button type="submit" class="btn btn-default">Submit</button>
			  </form>

   	    </div>
   </div>
</div>

 <script type="text/javascript" src="{{ asset('js/script.js') }}"></script>
 <script>
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
 </script>

</body>
</html>
