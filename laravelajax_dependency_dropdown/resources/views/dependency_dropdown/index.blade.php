<!DOCTYPE html>
<html lang="en">
<head>
  <title>Dependencty dropdown menu</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>

  <style type="text/css">
  	
       button{
           

              margin-left: 14px;
              width: 200px;

       }

  </style>

</head>
<body>

<div class="container">
    
    <div class="row">
          <div class="col-sm-2"></div>
          <div class="col-sm-8">
          	
                 <h2>Dependency dropdown menu in Laravel</h2>
				  <form action="" method="post">
			 	 	 @csrf
					  <div class="row">
					  	<div class="col-md-6">
					  		<div class="form-group">
						    <label for="roll">Division</label>
						    <select name="division" class="form-control" id="division">
						    	<option value="">-- Select division --</option>
						    	 
						    		@foreach($divisions as $div)
                                    
                                        <option value="{{ $div->id }}">{{ $div->division }}</option>

						    		@endforeach
						    	 
						    </select>
						 </div>
					  	</div>
					  	<div class="col-md-6">
					  		<div class="form-group">
						    <label for="roll">District </label>
						    <select name="district" class="form-control" id="district">
						    	 
						    </select>
						 </div>
					  	</div>

                         <button type="submit" class="btn btn-danger">Send</button>

					  </div>
					</form> 

          </div>
          <div class="col-sm-2"></div>
    </div>

</div>


<!--scripts-->


<script src="{{ asset('js/app.js') }}"></script>
<script>
 $.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});
</script>

<!-- jQuery first, then Popper.js, then Bootstrap JS -->

	<script>
        $(document).ready(function() {
        $('#division').on('change', function() {
            var divisionid = $(this).val();
            if(divisionid) {
                $.ajax({
                    url: '/findddistrict/'+divisionid,
                    type: "GET",
                    dataType: "json",
                    success:function(data) {
                        //console.log(data);
                      if(data){

	                        $('#district').empty();
	                        $('#district').focus;
	                        $('#district').append('<option value="">-- Select district --</option>'); 
	                        $.each(data, function(key, value){
	                        $("#district").append('<option value="'+ value.id +'">' + value.district+ '</option>');
	                       });

	                  }else{
	                    $('#district').empty();
	                  }
                  }
                });
	            }else{
	              $('#district').empty();
	            }


           });
        });

    </script>

</body>
</html>
