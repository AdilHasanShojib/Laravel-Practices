 <div>
 <h1> User Form </h1>
  
 <form action="/login" method="post">
    {{-- <input type="hidden" name="_method" value="PUT">
    <input type="hidden" name="_method" value="DELETE"> --}}

    @csrf
    <input type="text" name="user" placeholder="Enter name"> <br> <br>
    <input type="password" name="password" placeholder="Enter password"> <br> <br>

    <button>Submit</button>


 





 </form>
</div>