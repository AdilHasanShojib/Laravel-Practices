<div>
<h1>Users List </h1>


<table border="2">
<tr>

<td>ID</td>
<td>Name </td>
<td>Area</td>
<td>Email</td>



</tr>

@foreach($xyz as $user)
<tr>

<td>{{$user->id}}</td>
<td>{{$user->name}}</td>
<td>{{$user->area}}</td>
<td>{{$user->email}}</td>
</tr>

@endforeach


</table>


 </div>