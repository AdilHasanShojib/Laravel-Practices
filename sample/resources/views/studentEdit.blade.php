<div>

    <h1>Edit Student </h1>
  
 <form action="/addStudent" method="post">
    

    @csrf
    <input type="text" name="name" value="{{$user->name}}" placeholder="Enter name"> <br> <br>
    <input type="text" name="department" value="{{$user->department}}" placeholder="Enter department"> <br> <br>
    <input type="text" name="email" value="{{$user->email}}" placeholder="Enter email"> <br> <br>
    <input type="text" name="area" value="{{$user->area}}" placeholder="Enter area"> <br> <br>

    <button>Update</button>
    <a href="/slist">Cancel</a>


 





 </form>
    
</div>
