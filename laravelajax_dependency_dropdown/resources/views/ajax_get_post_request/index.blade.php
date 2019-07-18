<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="csrf-token" content="{{ csrf_token() }}" />
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container" style="margin-top: 10%">
   
  <div class="row">
      <div class="col-sm-6">
        
           <h2>Ajax get request</h2>
           <button type="button" class="btn btn-warning" id="getrequest">Get request</button>

           <div id="getrequestdata"></div>
           <div id="postrequestdata"></div>


      </div>
      <div class="col-sm-6">
        
            
            <h2>Ajax post request</h2>
            <form action="#" id="register">
              {{ csrf_field() }}
              <div class="form-group">
                <label for="firstname">First Name:</label>
                <input type="text" class="form-control" id="firstname" placeholder="Enter firstname" name="firstname">
              </div>
              <div class="form-group">
                <label for="pwd">Last Name:</label>
                <input type="text" class="form-control" id="lastname" placeholder="Enter lastname" name="lastname">
              </div>
              
              <button type="submit" class="btn btn-warning">Register</button>
            </form>

      </div>
  </div>

</div>


 <script src="{{asset('js/app.js')}}"></script>
 <script type="text/javascript">
   
    $.ajaxSetup({
      headers: {
          'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
      }
   });

 </script>

 <script type="text/javascript">
   

       $(document).ready(function(){
 



             //get request

             $("#getrequest").click(function(){

                 // $.get('/getrequest',function(data){

                     
                 //      $('#getrequestdata').append(data);
                 //      console.log(data);

                 // });

                 $.ajax({

                      type:"GET",
                      url:"/getrequest",
                      success:function(data){
                           

                           console.log(data);
                           $('#getrequestdata').append(data);

                      }

                 });

             });


             //post request


             $("#register").submit(function(){

                  var fname = $("#firstname").val();
                  var lname = $("#lastname").val();


                  // $.post('/register', { firstname:fname, lastname:lname }, function(data){

                  //     console.log(data);
                  //     $('#postrequestdata').html(data);


                  // });
              

                 var dataString = "firstname="+fname+"&lastname="+lname;

                  $.ajax({

                         type:"POST",
                         url:"/register",
                         data:dataString,
                         success:function(data){

                            console.log(data);
                            $('#postrequestdata').html(data);

                         }

                  });

             });






 
       });


 </script>

</body>
</html>
