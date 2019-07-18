<!DOCTYPE html>
<html lang="en">
<head>
  <title>Javascript form validation</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <style type="text/css">
    
     #state{
 
           color: red;

     }

  </style>

</head>
<body>

<div class="container">

  <div class="row">
    
      <div class="col-xs-12 col-sm-12 col-md-2 col-lg-2"></div>
      <div class="col-xs-12 col-sm-12 col-md-8 col-lg-8">
        
          <h2>Form validation</h2>
          <form name="myform" action="" method="post" onsubmit="return validateForm();">
            <div class="form-group">
              <label for="name">Name:</label>
              <input type="text" class="form-control" id="name" name="name">
            </div>
            <div class="form-group">
              <label for="pwd">E-mail:</label>
              <input type="text" class="form-control" id="email" name="email">
            </div>
            <div class="form-group">
              <label for="pwd">Telephone:</label>
              <input type="text" class="form-control" name="telephone" id="telephone"email="pwd">
            </div>
            <div class="checkbox">
              <label><input type="checkbox" name="notcall" onclick="enableDisable(this);"> Please don't call me</label>
            </div>

            <div class="form-group">
                <label for="sel1">How we can help you:</label>
                <select class="form-control" id="sel1" name="subject">
                  <option>select one</option>
                  <option>customer service</option>
                  <option>Question</option>
                  <option>comment</option>
                  <option>Others</option>
                </select>
                
            </div>
             
             <div class="form-group">
                <label for="pwd">commnet:</label>
                <input type="text" class="form-control" name="comment" id="comment">
            </div>
            <div class="form-group">
                
                <p id="state"></p>

            </div> 
            
            <button type="submit" name="submit" class="btn btn-default">Submit</button>
            <button type="reset" name="reset" class="btn btn-default">Refresh</button>
          </form>

      </div>
      <div class="col-xs-12 col-sm-12 col-md-2 col-lg-2"></div>

  </div>
  
</div>



  <script type="text/javascript">
    
      function validateForm(){

           var name          = document.myform.name;
           var email         = document.myform.email;
           var telephone     = document.myform.telephone;
           var notcall       = document.myform.notcall;
           var subject       = document.myform.subject;
           var comment       = document.myform.comment;


           if (name.value == "") {

                document.getElementById("state").innerHTML = "Please enter your name...";
                return false;

           }

           if (email.value == "") {

                document.getElementById("state").innerHTML = "Please enter your email...";
                return false;

           }

           if (email.value.indexOf("@", 0) < 0) {

                document.getElementById("state").innerHTML = "Please enter valid  email address...";
                return false;

           }
           if (email.value.indexOf(".", 0) < 0) {

                document.getElementById("state").innerHTML = "Please enter valid  email address...";
                return false;

           }

           if (telephone.value == "" && notcall.checked == false) {

                document.getElementById("state").innerHTML = "Please enter your telephone  number...";
                return false;

           }

           if (subject.selectedIndex < 1) {

                document.getElementById("state").innerHTML = "Please tell us how we can help you";
                return false;

           }

           if (comment.value == "") {

                document.getElementById("state").innerHTML = "Please enter your comment...";
                return false;

           }
 

      }




      function enableDisable(chkbox){


             if (chkbox.checked==true) {
                
                 document.myform.telephone.disabled=true;

             }else{

                document.myform.telephone.disabled=false;

             }

      }

  </script>


</body>
</html>