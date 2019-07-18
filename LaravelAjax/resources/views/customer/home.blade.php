<!DOCTYPE html>
<html lang="en">
<head>
  <title>CRUD-Laravel & Ajax</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
</head>
 
<body>

 <nav class="navbar navbar-default">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#">Brand</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li class="active"><a href="#">Link <span class="sr-only">(current)</span></a></li>
        <li><a href="#">Link</a></li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Dropdown <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="#">Action</a></li>
            <li><a href="#">Another action</a></li>
            <li><a href="#">Something else here</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="#">Separated link</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="#">One more separated link</a></li>
          </ul>
        </li>
      </ul>
      <form class="navbar-form navbar-left">
        <div class="form-group">
          <input type="text" class="form-control" placeholder="Search">
        </div>
        <button type="submit" class="btn btn-default">Submit</button>
      </form>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#">Link</a></li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Dropdown <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="#">Action</a></li>
            <li><a href="#">Another action</a></li>
            <li><a href="#">Something else here</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="#">Separated link</a></li>
          </ul>
        </li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>

@php

   $sl=1;

@endphp

<div class="container">
	<div class="row">
		<div class="col-md-12">
					  
 
                  <div class="panel panel-default">
				    <div class="panel-heading">
				    	
				    	 <a href="" class="btn btn-success btn-sm pull-right" data-toggle="modal" data-target="#myModal">Add new customer</a><br><br> 

				    </div>
				    <div class="panel-body" id="showAllDataHere">
				    	
            <table class="table table-bordered">
					    <thead>
					      <tr>
					       
					        <th width="10%">Sl</th>
					        <th width="20%">Name</th>
					        <th width="20%">Email</th>
					        <th width="20%">Phone</th>
					        <th width="10%">District</th>
					        <th width="20%">Action</th>

					      </tr>
					    </thead>
					    <tbody>


                    @foreach($students as $key=>$student) 
					      <tr>
					        <td>{{ $sl++ }}</td>
					        <td>{{ $student->name }}</td>
					        <td>{{ $student->email }}</td>
					        <td>{{ $student->phone }}</td>
					        <td>{{ $student->district }}</td>
					        <td>
					        	<a href="{{ url('view/student/data') }}" data-id="{{ $student->id }}" id="view" class="btn btn-success btn-sm">view</a>
					        	<a href="{{ url('edit/student/data') }}" data-id="{{ $student->id }}" id="edit" class="btn btn-info btn-sm">edit</a>
					        	<a onclick="return confirm('Are you sure to delete?')" href="{{ url('delete/student/data') }}" data-id="{{ $student->id }}" id="delete" class="btn btn-danger btn-sm" href="">delete</a>


					        </td>
					      </tr>

					@endforeach      
					      
					       
					    </tbody>
					  </table>

           

				    </div>
				    
				  </div>


		</div>
	</div>
</div>



<!--add customers modal-->
<div id="getalldata" data-url="{{ url('get/student/data') }}"></div>


<div class="container">
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Add new student</h4>
        </div>
        <div class="modal-body">
            
             <div class="row">
             	
                  <div class="col-sm-2"></div>
                  <div class="col-sm-8">
                  	
                         <form action="{{ url('add/student/data')}}" method="post" id="addcustomerform">
                         {{ csrf_field() }} 
              	
				                 <div class="input-group input-group-sm">
									  <span class="input-group-addon" id="sizing-addon3"><i class="fa fa-user"></i></span>
									  <input type="text" class="form-control" placeholder="name" name="name" aria-describedby="sizing-addon3">
								 </div><br>

								 <div class="input-group input-group-sm">
									  <span class="input-group-addon" id="sizing-addon3"><i class="fas fa-envelope"></i></span>
									  <input type="text" class="form-control" placeholder="email" name="email" aria-describedby="sizing-addon3">
								 </div><br>

								 <div class="input-group input-group-sm">
									  <span class="input-group-addon" id="sizing-addon3"><i class="fa fa-phone"></i></span>
									  <input type="text" class="form-control" placeholder="phone" name="phone" aria-describedby="sizing-addon3">
								 </div><br>

								 <div class="input-group input-group-sm">
									  <span class="input-group-addon" id="sizing-addon3"><i class="fa fa-map-marker"></i></span>
									  <input type="text" class="form-control" placeholder="district" name="district" aria-describedby="sizing-addon3">
								 </div><br>

								 <button type="submit" class="btn btn-primary">Save</button>	
				                 <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>

                        </form>



                  </div>
                  <div class="col-sm-2"></div>

             </div>

        </div>
      </div>
      
    </div>
  </div>
</div>


<!--view student-->


<div class="container">
  <div class="modal fade" id="viewstudent" role="dialog">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title" id="studentname"></h4>
        </div>
        <div class="modal-body">
            
             <div class="row">
              
                  <div class="col-sm-2"></div>
                    <div class="col-sm-8">
                    
                         
                
                 <div class="input-group input-group-sm">
                    <span class="input-group-addon" id="sizing-addon3"><i class="fa fa-user"></i></span>
                    <input id="name" type="text" class="form-control" name="name" aria-describedby="sizing-addon3" readonly="">
                 </div><br>

                  <div class="input-group input-group-sm">
                    <span class="input-group-addon" id="sizing-addon3"><i class="fas fa-envelope"></i></span>
                    <input id="email" type="text" class="form-control" name="email" aria-describedby="sizing-addon3" readonly="">
                 </div><br>

                  <div class="input-group input-group-sm">
                    <span class="input-group-addon" id="sizing-addon3"><i class="fa fa-phone"></i></span>
                    <input id="phone" type="text" class="form-control" name="phone" aria-describedby="sizing-addon3" readonly="">
                 </div><br>

                  <div class="input-group input-group-sm">
                    <span class="input-group-addon" id="sizing-addon3"><i class="fa fa-map-marker"></i></span>
                    <input id="district" type="text" class="form-control" name="district" aria-describedby="sizing-addon3" readonly="">
                 </div><br>

                 
                         <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>

                         
                  </div>
                  <div class="col-sm-2"></div>

             </div>

        </div>
      </div>
      
    </div>
  </div>
</div>




<!--update studnt-->



<div class="container">
  <div class="modal fade" id="UpdateCustomer" role="dialog">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Update student</h4>
        </div>
        <div class="modal-body">
            
             <div class="row">
              
                  <div class="col-sm-2"></div>
                  <div class="col-sm-8">
                    
                         <form action="{{ url('update/student/data')}}" method="post" id="updatecustomerform">
                         {{ csrf_field() }} 

                         <input type="hidden" name="id" id="customerid">
                
                         <div class="input-group input-group-sm">
                    <span class="input-group-addon" id="sizing-addon3"><i class="fa fa-user"></i></span>
                    <input type="text" class="form-control name" name="name" aria-describedby="sizing-addon3">
                 </div><br>

                 <div class="input-group input-group-sm">
                    <span class="input-group-addon" id="sizing-addon3"><i class="fas fa-envelope"></i></span>
                    <input type="text" class="form-control email" name="email" aria-describedby="sizing-addon3">
                 </div><br>

                 <div class="input-group input-group-sm">
                    <span class="input-group-addon" id="sizing-addon3"><i class="fa fa-phone"></i></span>
                    <input type="text" class="form-control phone" name="phone" aria-describedby="sizing-addon3">
                 </div><br>

                 <div class="input-group input-group-sm">
                    <span class="input-group-addon" id="sizing-addon3"><i class="fa fa-map-marker"></i></span>
                    <input type="text" class="form-control district" name="district" aria-describedby="sizing-addon3">
                 </div><br>

                 <button type="submit" class="btn btn-primary">Save</button>  
                         <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>

                        </form>



                  </div>
                  <div class="col-sm-2"></div>

             </div>

        </div>
      </div>
      
    </div>
  </div>
</div>


 



<!--jquery and ajax link-->

<script src="{{ asset('js/app.js') }}"></script>
<script>
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
</script>
<script src="{{ asset('js/script.js') }}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>
    
</body>
</html>
