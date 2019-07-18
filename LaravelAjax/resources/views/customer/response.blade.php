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

 
