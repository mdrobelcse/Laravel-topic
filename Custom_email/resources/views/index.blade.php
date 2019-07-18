@extends('layouts.app')

@section('content')
 <div class="container">
             
  <table class="table table-hover">
    <thead>
      <tr>
        <th>SL</th>
        <th>name</th>
        <th>Email</th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody>


     @foreach($users as $key=>$user)

           <tr>
  		        <td>{{ $key+1 }}</td>
  		        <td>{{ $user->name }}</td>
  		        <td>{{ $user->email }}</td>
  		        <td>
                  <form action="{{ route('send_email') }}" method="post">
                      {{ csrf_field() }}
                      <input type="hidden" name="id" value="{{ $user->id }}">
                      <input type="submit" class="btn btn-success" value="Send Email">
                  </form>
               </td>
            </tr>

     @endforeach



      
    </tbody>
  </table>
</div>
@endsection
