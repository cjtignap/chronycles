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
</head>

<body>
    <nav class="navbar navbar-light navbar-expand-lg fixed-top bg-dark" id="mainNav">
        <div class="container"><a class="navbar-brand" href="\">Chronycles</a><button data-bs-toggle="collapse" data-bs-target="#navbarResponsive" class="navbar-toggler" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"><i class="fa fa-bars"></i></button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                
                <ul class="navbar-nav ms-auto">
                    @auth
                    
                <li class="nav-item"><a class="nav-link" >Welcome {{auth()->user()->name}}</a></li>
                    @endauth
                    <li class="nav-item"><a class="nav-link" href="{{'\\'}}">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{'\\about-us'}}">About us</a></li>

                    @auth
                    
                    <li class="nav-item"><a class="nav-link" href="{{'\\blogs\create'}}" style="color: var(--bs-navbar-active-color);background: white;">write</a></li>
                    <li class="nav-item"><a class="nav-link" href={{ request()->fullUrlWithQuery(['written-by' => auth()->user()->username]) }} ">Manage Blogs</a></li>
                    <li class="nav-item">

                        <form action="/logout" method="post">
                        @csrf
                            <button  class="btn btn-dark navbar-btn" style="padding:7px;" type="submit">
                        
                            LOGOUT
                          </button>
                        </form>
                    </li>
                    @else
                    <li class="nav-item"><a class="nav-link" href="{{'\\register'}}">REGISTER</a></li>
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