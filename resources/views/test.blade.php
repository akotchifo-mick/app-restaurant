<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="Diso">
    <title>Restau-U</title>

    <!-- Fonts -->
    <script src="https://kit.fontawesome.com/37e9ee2609.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Styles -->
    <link rel="stylesheet" href="{{asset('assets/css/foodhut.css')}}">
    <link href="{{asset('assets/css/bootstrap.css')}}" rel="stylesheet">
    @livewireStyles
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
                <img src="{{asset('assets/images/logo.svg')}}" class="brand-img" alt="" />
                <span class="brand-txt"> Restau-U </span>
            </a>
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" type="button" data-bs-toggle="offcanvas" data-bs-target="#sideScreen">
                        Tickets
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" type="button" data-bs-target="#modalConnexion" data-bs-toggle="modal">
                        Connexion
                    </a>
                </li>
            </ul>
        </div>
    </nav>

    <!-- header -->
    <header id="home" class="header">
        <div class="overlay text-white text-center">
            <h1 class="display-2 font-weight-bold my-3">Restau-U</h1>
            <h2 class="display-4 mb-5">Plus simple &amp; Plus efficace</h2>
        </div>
        @if (session('status'))
        <div class="alert alert-success">
            {{ session('status') }}
        </div>
        @endif
    </header>
    <span class="d-inline-block" tabindex="0" data-bs-toggle="popover" data-bs-trigger="hover focus"
        data-bs-content="Disabled popover">
        <button class="btn btn-primary" type="button" disabled>@lang</button>
    </span>
    @livewireScripts
    
</body>

</html>