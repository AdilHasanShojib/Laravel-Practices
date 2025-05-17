<div>
    <h1>Students List</h1>
    <form action="search" method="get">
        <input type="text" name="search" value="{{@$search}}" placeholder="search with name">
        <button>search</button>
    </form>
    
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
<td><a href="{{'edit/'.$data->id}}">Edit</a></td>

</tr>

@endforeach


</table>
</div>