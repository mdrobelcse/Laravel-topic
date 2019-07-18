 <!DOCTYPE html>
<html lang="en">
<head>
  <title>ajax and laravel form validation</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
     <div class="row">
     	 <div class="col-sm-3"></div>
     	 <div class="col-sm-6">
     	 	
                  <h2>Selected option validation</h2><br> 
				   
			    <form id='adduser' action='' method='post'  >

				 
                   <div class="form-group">

				      <label for="re-pwd">Department:</label>
				      <select class="form-control" name="department" id="department">
						<option value="0">Select department</option>
						<option value="1">CSE</option>
						<option value="2">EEE</option>
						<option value="3">Civil Kingdom</option>
					  </select> 
					  <span id="error_department"></span> 
			       
			       </div>
			       <button type="submit" class="btn btn-primary">save department</button>

				</form>     

     	 </div>
     	 <div class="col-sm-3"></div>
     </div>
</div>

 
 

<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.17.0/jquery.validate.min.js"></script>

<script type="text/javascript">
	 $(document).ready(function(){
    $('#adduser').submit(function() {
        var error = 0;
        var department = $('#department').val();

        if (department == '0') {
            error = 1;
            $('#error_department').html('<label class="text-danger">please select an department</label>');
		    $('#department').addClass('has-error');
            
        }

        if (error) {
            return false;
        } else {
            return true;
        }

    });
});
</script>

 

</body>
</html>
