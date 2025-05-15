<div>
<h1>Students List </h1>


<table border="2">
<tr>

<td>ID</td>
<td>Name </td>
<td>Department</td>




</tr>

@foreach($data as $user)
<tr>

<td>{{$user->id}}</td>
<td>{{$user->name}}</td>
<td>{{$user->department}}</td>

</tr>

@endforeach


</table>