<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="author" content="Diso" />
    <title>Restau-U</title>

    <!-- Fonts -->
    <script src="https://kit.fontawesome.com/37e9ee2609.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"></script>
    <script src="{{asset('assets/js/bootstrap.bundle.min.js')}}"></script>
    <!-- Styles -->
    <link rel="stylesheet" href="{{asset('assets/css/foodhut.css')}}" />
    <link href="{{asset('assets/css/bootstrap.css')}}" rel="stylesheet" />

</head>

<body data-spy="scroll" data-target=".navbar" data-offset="40" id="home">
    <!-- Navbar -->
    <nav class="custom-navbar navbar navbar-expand-lg navbar-dark fixed-top" data-spy="affix" data-offset-top="10">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
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

    <!--Sidescreen-->
    <div class="offcanvas offcanvas-end text-bg-dark" id="sideScreen">
        <div class="offcanvas-header">
            <h1 class="offcanvas-title">Tickets</h1>
            <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas"></button>
        </div>
        <div class="offcanvas-body">
            @foreach($tickets as $ticket)
            <div class="card bg-success ">
                <div class="card-header d-flex justify-content-around">
                    <h4 class="brand-txt"> Restau-U </h4>
                    <h4>{{$ticket->meal}}</h4>
                </div>
                <div class="card-body">
                    <div class="text-center"> {{Auth::user()->cardId}}</div>
                    <table class="table table-borderless">

                        <tr>
                            <td class="text-center">{{$ticket->id}}</td>
                            <td class="text-center">{{$ticket->orders}} plat</td>
                        </tr>

                    </table>

                </div>
                <div class="card-footer">abc</div>
            </div>
            @endforeach
        </div>
    </div>

    <!--<div class="modal" id="modalConnexion">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="section">
                    <div class="container">
                        <div class="row full-height justify-content-center">
                            <div class="col-12 text-center align-self-center">
                                <div class="section">
                                    <h6 class="mt-5 d-flex justify-content-around ">
                                        <span class="h3"> @lang('Log In')</span>
                                        <span class="h3">@lang('Register') </span>
                                    </h6>
                                    <input class="checkbox" type="checkbox" id="reg-log" name="reg-log" hidden />
                                    <label for="reg-log"></label>
                                    <div class="card-3d-wrap mx-auto">
                                        <div class="card-3d-wrapper">
                                            <div class="card-front">
                                                <div class="center-wrap">
                                                    <form action="" method="">
                                                        <div class="section text-center">
                                                            <h1 class="pb-3">@lang('Log In')</h1>
                                                            <div class="form-floating mt-3">
                                                                <input type="email" name="email" class="form-control" placeholder="Your Email" id="email">
                                                                <label for="email">@lang('Your Card Id') </label>
                                                            </div>
                                                            <div class="form-floating mt-3">
                                                                <input type="password" name="password" class="form-control" placeholder="Your Password" id="password">
                                                                <label for="password">@lang('Your Password')</label>
                                                            </div>
                                                            <div class="d-flex justify-content-between">
                                                                <div class="form-check mt-3">
                                                                    <input class="form-check-input" type="checkbox" name="rememberUser" id="rememberUser">
                                                                    <label class="form-check-label" for="rememberuser"> @lang('Remember me') </label>
                                                                </div>
                                                                <a href="" class="text-danger" style="margin-top:15px">
                                                                    @lang('Forgot Your Password ?')
                                                                </a>
                                                            </div>
                                                            <div class="mt-5 d-grid gap-2 col-6 mx-auto"">
                                                                <button class=" btn btn-primary">@lang('Submit')</button>
                                                            </div>

                                                            </h2>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                            <div class="card-back">
                                                <div class="center-wrap">
                                                    <form action="" method="">
                                                        <div class="section text-center">
                                                            <h1>@lang('Sign Up') </h1>
                                                            <div class="form-floating mt-3">
                                                                <input type="text" name="name" class="form-control" placeholder="Your Full Name" id="name">
                                                                <label for="name">@lang('Your Full Name') </label>

                                                            </div>
                                                            <div class="form-floating mt-3">
                                                                <input type="text" name="cardId" class="form-control" placeholder="Your Card Id" id="cardId">
                                                                <label for="cardId">@lang('Your Card Id') </label>

                                                            </div>
                                                            <div class="form-floating mt-3">
                                                                <input type="email" name="email" class="form-control" placeholder="Your Email" id="email">
                                                                <label for="email">@lang('Your Email') </label>
                                                            </div>
                                                            <div class="form-floating mt-3">
                                                                <input type="password" name="password" class="form-control" placeholder="Your Password" id="password">
                                                                <label for="password">@lang('Your Password')</label>
                                                            </div>
                                                            <div class="form-floating mt-3">
                                                                <input type="password" name="cPassword" class="form-control" placeholder="Confirm Your Password" id="cPassword">
                                                                <label for="cPassword">@lang('Confirm Your Password')</label>
                                                            </div>
                                                            <div class="mt-5 d-grid gap-2 col-6 mx-auto"">
                                                                <button class=" btn btn-primary">@lang('Submit')</button>
                                                            </div>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>-->


    <script src="{{asset('assets/js/jquery-3.4.1.js')}}"></script>
    <script src="{{asset('assets/js/bootstrap.bundle.js')}}"></script>

    <!-- bootstrap affix -->
    <script src="{{asset('assets/js/bootstrap.affix.js')}}"></script>

    <!-- wow.js -->
    <script src="{{asset('assets/js/wow.js')}}"></script>

    <!-- google maps -->
    <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCtme10pzgKSPeJVJrG1O3tjR6lk98o4w8&callback=initMap"></script>

    <!-- FoodHut js -->
    <script src="{{asset('assets/js/foodhut.js')}}"></script>
</body>

</html>