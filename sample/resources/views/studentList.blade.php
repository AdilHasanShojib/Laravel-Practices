<div>
    <h1>Students List</h1>
    
<table border="2">
<tr>

<td>ID</td>
<td>Name </td>
<td>Department</td>
<td>Email</td>
<td>Area</td>
<td>Operations</td>





</tr>

@foreach($user as $data)
<tr>

<td>{{$data->id}}</td>
<td>{{$data->name}}</td>
<td>{{$data->department}}</td>
<td>{{$data->email}}</td>
<td>{{$data->area}}</td>
<td><a href="{{'delete/'.$data->id}}">Delete</a></td>

</tr>

@endforeach


</table>
</div>