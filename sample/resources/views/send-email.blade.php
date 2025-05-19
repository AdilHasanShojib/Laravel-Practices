<div>
    <h1>Send Email</h1>

    <form action="send-mail" method="post">
       
    <input type="text" name="to" placeholder="To"> <br> <br>
     @csrf
    <input type="text" name="subject" placeholder="Subject"> <br> <br>
    <textarea type="text" name="msg" cols="30" rows="10" placeholder="Enter Message"></textarea> <br> <br>

    <button>Send</button>
    

    </form>
    
</div>