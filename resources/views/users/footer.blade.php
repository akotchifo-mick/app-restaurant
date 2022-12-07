@extends('users.lay')


@section('nav-menu')
        <!-- ***** Menu Start ***** -->
        <ul class="nav">
            <li class="scroll-to-section"><a href="#top" class="active">@lang('Home')</a></li>
            <li class="scroll-to-section"><a href="#about">@lang('About')</a></li>
            <li class="scroll-to-section"><a href="#chefs">Menu</a></li>
            <li class="scroll-to-section"><a href="#reservation">Réserver</a></li>
            @auth
                <li>
                    <a type="button" data-bs-toggle="offcanvas" data-bs-target="#sideScreen">
                        Tickets
                    </a>
                </li>
                <li class="submenu">
                    <a href="javascript:;"> Outils </a>
                    <ul>
                        <li><a href="{{ route('dashboard') }} ">Mon profil</a></li>
                        <li><a href="#">Nous contacter</a></li>
                    </ul>
                </li>
                <li>
                    <form action="{{route('logout')}}" method="POST">
                        @csrf
                        <button class="btn" type="submit"> <span>
                                {{Auth::user()->lastName. ' '.Auth::user()->firstName }}
                                <i class="fa-regular fa-user"></i> </span>
                        </button>
                    </form>
                </li>
            @endauth
            @guest
                <li class="submenu">
                    <a href="javascript:;"> Authentification </a>
                    <ul>
                        <li><a href=" {{ route('register') }} ">Je m'inscris</a></li>
                        <li>
                            <a class="nav-link" type="button" data-target="#modalConnexion"
                                data-toggle="modal">
                                Je me connecte
                            </a>
                        </li>
                    </ul>
                </li>
            @endguest
            <a class='menu-trigger'>
                    <span>Menu</span>
                </a>
        </ul>
        <!-- ***** Menu Ends ***** -->
@endsection

@section('content')

    <!-- ***** Connexion Modal ***** -->
        <div class="modal" id="modalConnexion">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header ">
                    <span class="text-center">
                        <h1 class="pb-3"> @lang ('Log In' ) </h1>
                    </span>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    @if ( $errors->any() )
                    <div class="alert alert-danger">
                        <ul class="list-unstyled">
                            @foreach ($errors->all() as $error )
                            <li> {{ $error }} </li>
                            @endforeach
                        </ul>
                    </div>
                    @endif
                    <form action="{{ route ( 'login' ) }} " method="POST">
                        @csrf
                        <div class="section text-center">
                            <div class="form-floating mt-3">
                                <input type="text" name="cardId" class="form-control" placeholder="Your Card Id"
                                    id="cardId" autofocus>
                                <label for="cardId"> @lang ( 'Your Card Id' )</label>
                            </div>
                            <div class="form-floating mt-3">
                                <input type="password" name="password" class="form-control" placeholder="Your Password"
                                    id="password">
                                <label for="password"> @lang ( 'Your Password' ) </label>
                            </div>
                            <div class="d-flex justify-content-between">
                                <div class="form-check mt-3">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{
                                        old('remember') ? 'checked' : '' }}>
                                    <label class="form-check-label" for="remember">
                                        @lang ( 'Remember me' ) </label>
                                </div>
                                <a href=" {{ route('password.request')}} " class="text-danger" style="margin-top:15px">
                                    @lang ( 'Forgot Password ?' )
                                </a>
                            </div>
                            <div class="mt-5 d-grid gap-2 col-6 mx-auto">
                                <button class=" btn btn-outline-primary"> Connexion
                                </button>
                            </div>

                            </h2>
                        </div>
                    </form>
                </div>

                <div class="modal-footer text-justify ">
                    <span> Pas encore inscrit,
                        <a href="" class="text-danger" style="margin-top:15px"> Je m'inscris
                        </a>
                    </span>
                </div>
            </div>
        </div>

        </div>
    <!-- ***** Connexion Modal Ends ***** -->

    <!-- ***** Required Auth Modal Starts Here ***** -->
        <div class="modal" tabindex="-1" id="authRequired" data-backdrop="static">
            <div class="modal-dialog modal-lg modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <h2 class="modal-title ">ACCES REFUSE </h2>
                        <button type="button" class="btn-close" data-dismiss="modal"></button>
                    </div>
                    <div class="modal-body bg-fuchsia text-danger justify-content-center">
                        Vous tentez d'accéder à une ressource qui nécessite une authentification. <br>
                        Vueillez vous authetifier d'abord !!
                    </div>
                </div>
            </div>
        </div>
    <!-- ***** Required Auth Modal Ends ***** -->

    <!-- Sidescreen Starts Here-->
        <div class="offcanvas offcanvas-end text-bg-dark" id="sideScreen">
            <div class="offcanvas-header">
                <h1 class="offcanvas-title "> Tickets </h1>
                <button type="button" class="btn-close btn-close-white" data-dismiss="offcanvas"></button>
            </div>
            <div class="offcanvas-body">
                <livewire:ticket-component :tickets=" $tickets " />
            </div>
        </div>
    <!-- Sidescreen Ends Here-->
        
    <!-- ***** Main Banner Area Start ***** -->
        <div id="top">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-4">
                        <div class="left-content">
                            <div class="inner-content">
                                <h4>Restau-U</h4>
                                <h6>Plus simple &amp; Plus efficace</h6>
                                <div class="main-white-button scroll-to-section">
                                    <a href="#reservation">@lang('Book-Table')</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-8">
                        <div class="main-banner header-text">
                            <div class="Modern-Slider">
                                <div class="item">
                                    <div class="img-fill">
                                        <img src="{{asset('assets/images/slide-01.jpg')}}" alt="">
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="img-fill">
                                        <img src="{{asset('assets/images/slide-02.jpg')}}" alt="">
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="img-fill">
                                        <img src="{{asset('assets/images/slide-03.jpg')}}" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <!-- ***** Main Banner Area End ***** -->

    <!-- ***** About Area Starts ***** -->
        <section class="section" id="about">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-xs-12">
                        <div class="left-text-content">
                            <div class="section-heading">
                                <h6>About Us</h6>
                                <h2>We Leave A Delicious Memory For You</h2>
                            </div>
                            <p>Klassy Cafe is one of the best restaurant HTML templates</a> with Bootstrap v4.5.2 CSS
                                framework. You can download and feel free to use this website template layout for your
                                restaurant business. You are allowed to use this template for commercial purposes.
                                <br><br>You are NOT allowed to redistribute the template ZIP file on any template donwnload
                                website. Please contact us for more information.
                            </p>
                            <div class="row">
                                <div class="col-4">
                                    <img src="{{asset('assets/images/about-thumb-01.jpg')}}" alt="">
                                </div>
                                <div class="col-4">
                                    <img src="{{asset('assets/images/about-thumb-02.jpg')}}" alt="">
                                </div>
                                <div class="col-4">
                                    <img src="{{asset('assets/images/about-thumb-03.jpg')}}" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-xs-12">
                        <div class="right-content">
                            <div class="thumb">
                                <a rel="nofollow" href="http://youtube.com"><i class="fa fa-play"></i></a>
                                <img src="{{asset('assets/images/about-video-bg.jpg')}}" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    <!-- ***** About Area Ends ***** -->

    <!-- ***** Menu Area Starts ***** -->
        <section class="section" id="chefs">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 offset-lg-4 text-center">
                        <div class="section-heading">
                            <h6>Our Menu</h6>
                            <h2>We offer the best ingredients for you</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-4">
                        <div class="chef-item">
                            <div class="thumb">
                                <img src="assets/images/chefs-01.jpg" alt="Chef #1">
                            </div>
                            <div class="down-content">
                                <button class="btn btn-link" data-target="#reservationModal" data-toggle="modal" >
                                    <h4>Réserver </h4>
                                </button> <br>
                                <span>Pastry Chef</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="chef-item">
                            <div class="thumb">
                                <img src="assets/images/chefs-02.jpg" alt="Chef #2">
                            </div>
                            <div class="down-content">
                                <h4>David Martin</h4>
                                <span>Cookie Chef</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="chef-item">
                            <div class="thumb">
                                <img src="assets/images/chefs-03.jpg" alt="Chef #3">
                            </div>
                            <div class="down-content">
                                <h4>Peter Perkson</h4>
                                <span>Pancake Chef</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

    <!-- ***** Menu Area Ends ***** -->

    <!-- ***** Reservation Us Area Starts ***** -->
        <section class="section" id="reservation">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 offset-lg-4 text-center">
                        <div class="section-heading">
                            <h6>Our Menu</h6>
                            <h2>We offer the best ingredients for you</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-4">
                        <div class="chef-item">
                            <div class="thumb">
                                <img src="assets/images/chefs-01.jpg" alt="Chef #1">
                            </div>
                            <div class="down-content">
                                <h4>Randy Walker</h4>
                                <span>Pastry Chef</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="chef-item">
                            <div class="thumb">
                                <img src="assets/images/chefs-02.jpg" alt="Chef #2">
                            </div>
                            <div class="down-content">
                                <h4>David Martin</h4>
                                <span>Cookie Chef</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="chef-item">
                            <div class="thumb">
                                <img src="assets/images/chefs-03.jpg" alt="Chef #3">
                            </div>
                            <div class="down-content">
                                <h4>Peter Perkson</h4>
                                <span>Pancake Chef</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    <!-- ***** Reservation Area Ends ***** -->

    <!-- ***** Authentication Required Error Start ***** -->
        <div class="modal" tabindex="-1" id="authRequired" data-backdrop="static">
            <div class="modal-dialog modal-lg modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <h2 class="modal-title ">ACCES REFUSE </h2>
                        <button type="button" class="btn-close" data-dismiss="modal"></button>
                    </div>
                    <div class="modal-body bg-fuchsia text-danger justify-content-center">
                        Vous tentez d'accéder à une ressource qui nécessite une authentification. <br>
                        Veuillez vous authentifier d'abord !!
                    </div>
                </div>
            </div>
        </div>
    <!-- ***** Authentication Required Error Start ***** -->
@endsection

@section('foot')
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-xs-12">
                    <!--<div class="right-text-content">
                        <ul class="social-icons">
                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                            <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                        </ul>
                </div>-->
                </div>
                <div class="col-lg-4">
                    <div class="logo">
                        <a href="index.html"><img src="{{asset('assets/images/white-logo.png')}}" alt=""></a>
                    </div>
                </div>
                <div class="col-lg-4 col-xs-12">
                    <div class="left-text-content">
                        <p class="mb-0 py-3 small">
                            &copy; Copyright <script>document.write(new Date().getFullYear()) </script> <br>
                            Made with <i class="ti-heart text-danger"></i> By dISO
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </footer>
@endsection