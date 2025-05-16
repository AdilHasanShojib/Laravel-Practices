<h1> User Profile </h1>
@if(session('user'))
<h3>Welcome,{{session('user')}}</h3>
@else 
<h3>No User Found <a href="login">Login</a> </h3>
@endif

<a href="logout" >Logout</a>