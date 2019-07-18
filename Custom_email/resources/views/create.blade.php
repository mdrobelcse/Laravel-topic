@extends('layouts.app')

@section('content')
   
   <div class="container">
   	
       <div class="col-sm-2"></div>
       <div class="col-sm-8">
          
            <form action="{{ route('custom_mail') }}" method="post">

                 @csrf

				  <div class="form-group">
				    <label for="shippingaddress">Shipping address:</label>
				    <input type="text" class="form-control" id="shipping" name="shipping_add">
				  </div>
				  <div class="form-group">
				    <label for="phone">Phone number:</label>
				    <input type="text" class="form-control" id="phone" name="phone_num">
				  </div>
				   <div class="form-group">
				    <label for="phone">Product Price:</label>
				    <input type="text" class="form-control" id="price" name="product_pri">
				  </div>
				  
				  <button type="submit" class="btn btn-success">Submit</button>

			</form>

       </div>
       <div class="col-sm-2"></div>

   </div>

@endsection
