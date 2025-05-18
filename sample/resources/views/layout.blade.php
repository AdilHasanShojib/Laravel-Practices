<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <style>
        .footer p{
            position: absolute;
            bottom: 0;
            width: 100%;
            text-align: center;
            background-color: skyblue;
            margin: 0;
            padding: 10px;

           }

           .main{
            margin-top: 100px;
            text-align: center;
           }
           h1{
            color: green !important;
           }


    </style>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4Q6Gf2aSP4eDXB8Miphtr37CMZZQ5oXLH2yaXMJ2w8e2ZtHTl7GptT4jmndRuHDT" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js" integrity="sha384-j1CDi7MgGQ12Z7Qab0qlWQ/Qqz24Gc6BM0thvEMVjHnfYGF0rmFCozFSxQBxwHKO" crossorigin="anonymous"></script>
</head>
<body>
    <div>
      <ul>
        <a href="">Home</a>
        <a href="">About </a>
        <a href="">Content</a>
      </ul>
    </div>

    <div>
        @section('main')
        @show
    </div>

    <div class="footer">
        <p>Footer</p>
    </div>
</body>
</html>