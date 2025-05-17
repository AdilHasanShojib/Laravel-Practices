<div>
    <h1>Students List</h1>
    <form action="search" method="get">
        <input type="text" name="search" value="{{@$search}}" placeholder="search with name">
        <button>search</button>
    </form>

    <form action="delete-multi" method="post">
        @csrf
        <button>Delete</button>
        
    
    
<table border="2">
<tr>

<td>Section</td>
<td>ID</td>
<td>Name </td>
<td>Department</td>
<td>Email</td>
<td>Area</td>
<td>Operations</td>





</tr>

@foreach($user as $data)
<tr>
<td><input type="checkbox" name="ids[]" value="{{$data->id}}"></td>
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
</form>
<br> <br>
{{$user->links()}}
</div>

<style>
    .w-5.h-5{

        width: 20px;

    }
</style>