 <div>
 <h1> Add New User </h1>

 @if(session('msg'))
 <span>{{session('msg')}}</span>
 @endif
  
 {{-- {{session()->reflash()}} --}}

 <form action="/add" method="post">
    {{-- <input type="hidden" name="_method" value="PUT">
    <input type="hidden" name="_method" value="DELETE"> --}}

    @csrf
    <input type="text" name="user" placeholder="Enter name"> <br> <br>
    <input type="text" name="email" placeholder="Enter email"> <br> <br>
    <input type="text" name="number" placeholder="Enter phone number"> <br> <br>

    <button>Submit</button>


 





 </form>
</div>