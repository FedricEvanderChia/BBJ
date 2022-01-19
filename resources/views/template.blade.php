<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>ReXsteam</title>
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-dark d-flex justify-content-between" style="background-color: rgb(17, 24, 40);">
    <div class="container-fluid pt-2 pb-2">
        <a class="navbar-brand ms-3" style="font-size: 20px" href="/">BOOKSTORE UwU</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav">
                <a class="nav-link active ms-5" style="font-size: 20px" aria-current="page" href="/">Home</a>
                @if (Auth::check())
                <a class="nav-link active ms-5" style="font-size: 20px" aria-current="page" href="/manage">Manage Book</a>
                @endif
                
            </div>
        </div>
        <form class="d-flex me-3" action="/search"method="GET">
            <input name="name"class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        </form>
        @if (Auth::check())
            <div class="dropdown me-3">
                    <button class="text-dark" style="border-radius: 100%; width:fit-content; height:fit-content"type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                        <img src="{{asset('storage/images/smug.png')}}"  class="card-img img-fluid" style="border-radius: 100%; width:60px; height:60px" alt="...">
                    </button>
                <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                  <li><a class="dropdown-item" href="#">Profile</a></li>
                  <li><a class="dropdown-item" href="/logout">Sign Out</a></li>
                </ul>
              </div>
                <a href="/cart"><img class="me-3" src="{{ asset('storage/images/cart.png')}}" alt="nope" style="height: 25px"></a>
        @endif
            @guest
            <a href="/login" class="btn btn-outline-light me-3">Login</a>
            <a href="/register" class="btn btn-outline-light me-3">Register</a> 
            @endguest
            

        
        <form class="d-flex" action="/"method="GET">
            
    </div>
</nav>

<div class="container-fluid" style="background-color: rgb(187, 197, 220);">
    @yield('content')
</div>

<footer class="footer sticky-bottom text-light text-center py-3 d-flex flex-row" style="justify-content: space-between;background-color: rgb(17, 24, 40);">
    <div class="pt-3 ms-3">
        <p>© 2021 ReXsteam. All rights reserved.<p>
    </div>
    <div class="sites pt-3 me-3" >
        <a href="https://www.twitter.com/">
            <img src="{{asset('storage/images/twitter.png')}}" alt="Noimage" style="width: 50px">
        </a>
        <a href="https://www.facebook.com/">
            <img src="{{asset('storage/images/facebook.png')}}" alt="Noimage"style="width: 50px">
        </a>
    </div>
</footer>

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
</body>
</html>