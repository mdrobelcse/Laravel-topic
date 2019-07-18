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
				   
			    <form id='targets' name='targets' action='http://www.innovativephp.com' method='post'  >

					<select name="test_field" id="country">
					<option value="0">Select</option>
					<option value="LK">Sri Lanka</option>
					<option value="IN">India</option>
					<option value="UK">United Kingdom</option>
					</select><br>
					<span id="error_country"></span><br>
				    <input type='submit' value='Save' />
				</form>     

     	 </div>
     	 <div class="col-sm-3"></div>
     </div>
</div>

 
 

<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.17.0/jquery.validate.min.js"></script>

<script type="text/javascript">
	 $(document).ready(function(){
    $('#targets').submit(function() {
        var error = 0;
        var country = $('#country').val();

        if (country == '0') {
            error = 1;
            // alert('You should select a country.');
            $('#error_country').html('<label class="text-danger">please select an country</label>');
		    $('#targets').addClass('has-error');
            
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
