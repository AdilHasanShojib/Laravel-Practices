<div>
<h1>List Of All Images</h1>
<a href="/upload">Upload More Image</a>
<br> <br>
@foreach ($img as $data)
<img style="width: 200px;margin:10px" src="{{url('storage/'.$data->path)}}" alt="">
@endforeach

    

</div>
