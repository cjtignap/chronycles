<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Chronycles</title>
    <link rel="stylesheet" href="/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="/css/Lora.css">
    <link rel="stylesheet" href="/css/Open%20Sans.css">
    <link rel="stylesheet" href="/fonts/font-awesome.min.css">
    <link rel="stylesheet" href="/css/Login-Form-Basic-icons.css">
    <link rel="icon" type="image/png" href="/img/chronycles.png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-avatar@latest/dist/avatar.min.css" rel="stylesheet">

</head>

<body>
    <nav class="navbar navbar-light navbar-expand-lg fixed-top bg-dark" id="mainNav">
        <div class="container"><a class="navbar-brand link-light" href="\">Chronycles</a><button data-bs-toggle="collapse" data-bs-target="#navbarResponsive" class="navbar-toggler" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"><i class="fa fa-bars link-light"></i></button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                
                <ul class="navbar-nav ms-auto">

                    
                    <li class="nav-item link-light"><a class="nav-link link-light" href="{{'\\'}}">Home</a></li>
                    <li class="nav-item"><a class="nav-link link-light"  href="{{'\\about-us'}}">About us</a></li>

                    @auth

                    <li class="nav-item dropdown"><a class="dropdown-toggle nav-link link-light" aria-expanded="false" data-bs-toggle="dropdown" data-bs-auto-close="outside" href="#">OPTIONS </a>
                        <div class="dropdown-menu text-white text-bg-dark" style="text-align: center;">
                            <a class="btn btn-dark navbar-btn"  href="{{'\\blogs\create'}}" style="color: var(--bs-navbar-active-color);background: white;">WRITE</a>
                            <a class="btn btn-dark navbar-btn" href={{ request()->fullUrlWithQuery(['written-by' => auth()->user()->username]) }} ">MANAGE BLOGS</a>
                            <form action="/logout" method="post">
                                @csrf
                                    <button  class="btn btn-dark navbar-btn" style="padding:7px;" type="submit">
                                    LOGOUT
                                  </button>
                                </form>
                        </div>
                    </li>
                    
                    <li class="nav-item link-light"><a class="nav-link link-light">Welcome {{auth()->user()->name}}</a> </li>
                    <li class="nav-item"> <img class="avatar avatar-32 bg-light rounded-circle text-white"

                        src={{auth()->user()['profile-image']? asset('storage/'.auth()->user()['profile-image']):"https://raw.githubusercontent.com/twbs/icons/main/icons/person-fill.svg"}}>    
                    
                    </li>
                    @else
                    <li class="nav-item"><a class="nav-link link-light" href="{{'\\register'}}">REGISTER</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{'\\login'}}" style="color: var(--bs-navbar-active-color);background: white;margin-right: 5px;">LOGIN</a></li>
                    @endauth
                </ul>
            </div>
        </div>
    </nav>

    
    {{$slot}}

    
    @include('partials._footer')
    <x-flash-message />
    <script src="/bootstrap/js/bootstrap.min.js"></script>
    <script src="/js/clean-blog.js"></script>
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
</body>

</html>