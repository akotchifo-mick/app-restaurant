<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="Diso">
    <title>Restau-U</title>

    <!-- Styles -->
    <link rel="stylesheet" href="{{asset('assets/css/foodhut.css')}}">
    <link href="{{asset('assets/css/bootstrap.css')}}" rel="stylesheet">

    @livewireStyles
    <!-- Fonts -->
    <script src="https://kit.fontawesome.com/37e9ee2609.js" crossorigin="anonymous"></script>

</head>

<body data-spy="scroll" data-target=".navbar" data-offset="40" id="home">

    <!-- Navbar -->
    <nav class="custom-navbar navbar navbar-expand-lg navbar-dark fixed-top" data-spy="affix" data-offset-top="10">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="#home">@lang('Home')</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#about">@lang('About')</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#gallary">@lang('Menu')</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#book-table">@lang('Book-Table')</a>
                </li>
            </ul>
            <a class="navbar-brand m-auto" href="#">
                <img src="{{asset('assets/images/logo.svg')}}" class="brand-img" alt="">
                <span class="brand-txt">
                    Restau-U
                </span>
            </a>
            <ul class="navbar-nav">
                
                @auth
                <li class="nav-item">
                    <a class="nav-link" type="button" data-bs-toggle="offcanvas" data-bs-target="#sideScreen">
                        Tickets
                    </a>
                </li>
                <div class="collapse navbar-collapse" id="navbarNavDarkDropdown">
                    <ul class="navbar-nav">
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDarkDropdownMenuLink" role="button"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                <i class="fa-regular fa-user"></i> {{Auth::user()->lastName.' '.Auth::user()->firstName
                                }}
                            </a>
                            <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="navbarDarkDropdownMenuLink">
                                <li><a class="dropdown-item" href="#">@lang('Dashboard')</a></li>
                                <li>
                                    <form class="dropdown-item" action="{{route('logout')}}" method="POST">
                                        @csrf
                                        <button class="btn btn-outline-light">@lang('Logout')</button>
                                    </form>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
                @endauth
                @guest
                <!--<li class="nav-item">
                    <button class="btn btn-outline-secondary" disabled>
                        Disabled tickets
                    </button>
                </li>-->
                <li class="nav-item">
                    <a class="nav-link" type="button" data-bs-target="#modalConnexion" data-bs-toggle="modal">
                        Connexion
                    </a>
                </li>
                @endguest
            </ul>
        </div>
    </nav>

    <!-- header -->
    <header id="home" class="header">
        <div class="overlay text-white text-center">
            <h1 class="display-2 font-weight-bold my-3">Restau-U</h1>
            <h2 class="display-4 mb-5">Plus simple &amp; Plus efficace</h2>
        </div>
    </header>

    @yield('main')

    @livewireScripts
    <!-- core  -->
    <script src="{{asset('assets/js/jquery-3.4.1.js')}}"></script>
    <script src="{{asset('assets/js/bootstrap.bundle.js')}}"></script>

    <!-- bootstrap affix -->
    <script src="{{asset('assets/js/bootstrap.affix.js')}}"></script>

    <!-- wow.js -->
    <script src="{{asset('assets/js/wow.js')}}"></script>

    <!-- google maps -->
    <script async defer
        src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCtme10pzgKSPeJVJrG1O3tjR6lk98o4w8&callback=initMap">
    </script>

    <!-- FoodHut js -->
    <script src="{{asset('assets/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{asset('assets/js/foodhut.js')}}"></script>
</body>

</html>