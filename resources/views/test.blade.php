@extends('users.header')

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
        <section class="section" id="menu">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4">
                        <div class="section-heading">
                            <h6>Our Menu</h6>
                            <h2>Our selection of cakes with quality taste</h2>
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
                    <div class="col-lg-6 align-self-center">
                        <div class="left-text-content">
                            <div class="section-heading">
                                <h6>Contact Us</h6>
                                <h2>Here You Can Make A Reservation Or Just walkin to our cafe</h2>
                            </div>
                            <p>Donec pretium est orci, non vulputate arcu hendrerit a. Fusce a eleifend riqsie, namei
                                sollicitudin urna diam, sed commodo purus porta ut.</p>
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="phone">
                                        <i class="fa fa-phone"></i>
                                        <h4>Phone Numbers</h4>
                                        <span><a href="#">080-090-0990</a><br><a href="#">080-090-0880</a></span>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="message">
                                        <i class="fa fa-envelope"></i>
                                        <h4>Emails</h4>
                                        <span><a href="#">hello@company.com</a><br><a href="#">info@company.com</a></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="contact-form">
                            <form id="contact" action="" method="post">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <h4>Table Reservation</h4>
                                    </div>
                                    <div class="col-lg-6 col-sm-12">
                                        <fieldset>
                                            <input name="name" type="text" id="name" placeholder="Your Name*" required="">
                                        </fieldset>
                                    </div>
                                    <div class="col-lg-6 col-sm-12">
                                        <fieldset>
                                            <input name="email" type="text" id="email" pattern="[^ @]*@[^ @]*"
                                                placeholder="Your Email Address" required="">
                                        </fieldset>
                                    </div>
                                    <div class="col-lg-6 col-sm-12">
                                        <fieldset>
                                            <input name="phone" type="text" id="phone" placeholder="Phone Number*"
                                                required="">
                                        </fieldset>
                                    </div>
                                    <div class="col-md-6 col-sm-12">
                                        <fieldset>
                                            <select value="number-guests" name="number-guests" id="number-guests">
                                                <option value="number-guests">Number Of Guests</option>
                                                <option name="1" id="1">1</option>
                                                <option name="2" id="2">2</option>
                                                <option name="3" id="3">3</option>
                                                <option name="4" id="4">4</option>
                                                <option name="5" id="5">5</option>
                                                <option name="6" id="6">6</option>
                                                <option name="7" id="7">7</option>
                                                <option name="8" id="8">8</option>
                                                <option name="9" id="9">9</option>
                                                <option name="10" id="10">10</option>
                                                <option name="11" id="11">11</option>
                                                <option name="12" id="12">12</option>
                                            </select>
                                        </fieldset>
                                    </div>
                                    <div class="col-lg-6">
                                        <div id="filterDate2">
                                            <div class="input-group date" data-date-format="dd/mm/yyyy">
                                                <input name="date" id="date" type="text" class="form-control"
                                                    placeholder="dd/mm/yyyy">
                                                <div class="input-group-addon">
                                                    <span class="glyphicon glyphicon-th"></span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-sm-12">
                                        <fieldset>
                                            <select value="time" name="time" id="time">
                                                <option value="time">Time</option>
                                                <option name="Breakfast" id="Breakfast">Breakfast</option>
                                                <option name="Lunch" id="Lunch">Lunch</option>
                                                <option name="Dinner" id="Dinner">Dinner</option>
                                            </select>
                                        </fieldset>
                                    </div>
                                    <div class="col-lg-12">
                                        <fieldset>
                                            <textarea name="message" rows="6" id="message" placeholder="Message"
                                                required=""></textarea>
                                        </fieldset>
                                    </div>
                                    <div class="col-lg-12">
                                        <fieldset>
                                            <button type="submit" id="form-submit" class="main-button-icon">Make A
                                                Reservation</button>
                                        </fieldset>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    <!-- ***** Reservation Area Ends ***** -->

    <!-- ***** Menu Area Starts ***** -->
        <section class="section" id="offers">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 offset-lg-4 text-center">
                        <div class="section-heading">
                            <h6>Klassy Week</h6>
                            <h2>This Week’s Special Meal Offers</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="row" id="tabs">
                            <div class="col-lg-12">
                                <div class="heading-tabs">
                                    <div class="row">
                                        <div class="col-lg-6 offset-lg-3">
                                            <ul>
                                                <li><a href='#tabs-1'><img src="{{asset('assets/images/tab-icon-01.')}}"
                                                            alt="">Breakfast</a></li>
                                                <li><a href='#tabs-2'><img src="{{asset('assets/images/tab-icon-02.')}}"
                                                            alt="">Lunch</a></a></li>
                                                <li><a href='#tabs-3'><img src="{{asset('assets/images/tab-icon-03.')}}"
                                                            alt="">Dinner</a></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <section class='tabs-content'>
                                    <article id='tabs-1'>
                                        <div class="row">
                                            <div class="col-lg-6">
                                                <div class="row">
                                                    <div class="left-list">
                                                        <div class="col-lg-12">
                                                            <div class="tab-item">
                                                                <img src="{{asset('assets/images/tab-item-01.png')}}"
                                                                    alt="">
                                                                <h4>Fresh Chicken Salad</h4>
                                                                <p>Lorem ipsum dolor sit amet, consectetur koit adipiscing
                                                                    elit, sed do.</p>
                                                                <div class="price">
                                                                    <h6>$10.50</h6>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-12">
                                                            <div class="tab-item">
                                                                <img src="{{asset('assets/images/tab-item-02.png')}}"
                                                                    alt="">
                                                                <h4>Orange Juice</h4>
                                                                <p>Lorem ipsum dolor sit amet, consectetur koit adipiscing
                                                                    elit, sed do.</p>
                                                                <div class="price">
                                                                    <h6>$8.50</h6>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-12">
                                                            <div class="tab-item">
                                                                <img src="{{asset('assets/images/tab-item-03.png')}}"
                                                                    alt="">
                                                                <h4>Fruit Salad</h4>
                                                                <p>Lorem ipsum dolor sit amet, consectetur koit adipiscing
                                                                    elit, sed do.</p>
                                                                <div class="price">
                                                                    <h6>$9.90</h6>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="row">
                                                    <div class="right-list">
                                                        <div class="col-lg-12">
                                                            <div class="tab-item">
                                                                <img src="{{asset('assets/images/tab-item-04.png')}}"
                                                                    alt="">
                                                                <h4>Eggs Omelette</h4>
                                                                <p>Lorem ipsum dolor sit amet, consectetur koit adipiscing
                                                                    elit, sed do.</p>
                                                                <div class="price">
                                                                    <h6>$6.50</h6>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-12">
                                                            <div class="tab-item">
                                                                <img src="{{asset('assets/images/tab-item-05.png')}}"
                                                                    alt="">
                                                                <h4>Dollma Pire</h4>
                                                                <p>Lorem ipsum dolor sit amet, consectetur koit adipiscing
                                                                    elit, sed do.</p>
                                                                <div class="price">
                                                                    <h6>$5.00</h6>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-12">
                                                            <div class="tab-item">
                                                                <img src="{{asset('assets/images/tab-item-07.png')}}"
                                                                    alt="">
                                                                <h4>Omelette & Cheese</h4>
                                                                <p>Lorem ipsum dolor sit amet, consectetur koit adipiscing
                                                                    elit, sed do.</p>
                                                                <div class="price">
                                                                    <h6>$4.10</h6>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </article>
                                    <article id='tabs-2'>
                                        <div class="row">
                                            <div class="col-lg-6">
                                                <div class="row">
                                                    <div class="left-list">
                                                        <div class="col-lg-12">
                                                            <div class="tab-item">
                                                                <img src="{{asset('assets/images/tab-item-04.png')}}"
                                                                    alt="">
                                                                <h4>Eggs Omelette</h4>
                                                                <p>Lorem ipsum dolor sit amet, consectetur koit adipiscing
                                                                    elit, sed do.</p>
                                                                <div class="price">
                                                                    <h6>$14</h6>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-12">
                                                            <div class="tab-item">
                                                                <img src="{{asset('assets/images/tab-item-05.png')}}"
                                                                    alt="">
                                                                <h4>Dollma Pire</h4>
                                                                <p>Lorem ipsum dolor sit amet, consectetur koit adipiscing
                                                                    elit, sed do.</p>
                                                                <div class="price">
                                                                    <h6>$18</h6>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-12">
                                                            <div class="tab-item">
                                                                <img src="{{asset('assets/images/tab-item-06.png')}}"
                                                                    alt="">
                                                                <h4>Omelette & Cheese</h4>
                                                                <p>Lorem ipsum dolor sit amet, consectetur koit adipiscing
                                                                    elit, sed do.</p>
                                                                <div class="price">
                                                                    <h6>$22</h6>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="row">
                                                    <div class="right-list">
                                                        <div class="col-lg-12">
                                                            <div class="tab-item">
                                                                <img src="{{asset('assets/images/tab-item-01.png')}}"
                                                                    alt="">
                                                                <h4>Fresh Chicken Salad</h4>
                                                                <p>Lorem ipsum dolor sit amet, consectetur koit adipiscing
                                                                    elit, sed do.</p>
                                                                <div class="price">
                                                                    <h6>$10</h6>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-12">
                                                            <div class="tab-item">
                                                                <img src="{{asset('assets/images/tab-item-02.png')}}"
                                                                    alt="">
                                                                <h4>Orange Juice</h4>
                                                                <p>Lorem ipsum dolor sit amet, consectetur koit adipiscing
                                                                    elit, sed do.</p>
                                                                <div class="price">
                                                                    <h6>$20</h6>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-12">
                                                            <div class="tab-item">
                                                                <img src="{{asset('assets/images/tab-item-03.png')}}"
                                                                    alt="">
                                                                <h4>Fruit Salad</h4>
                                                                <p>Lorem ipsum dolor sit amet, consectetur koit adipiscing
                                                                    elit, sed do.</p>
                                                                <div class="price">
                                                                    <h6>$30</h6>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </article>
                                    <article id='tabs-3'>
                                        <div class="row">
                                            <div class="col-lg-6">
                                                <div class="row">
                                                    <div class="left-list">
                                                        <div class="col-lg-12">
                                                            <div class="tab-item">
                                                                <img src="{{asset('assets/images/tab-item-05.png')}}"
                                                                    alt="">
                                                                <h4>Eggs Omelette</h4>
                                                                <p>Lorem ipsum dolor sit amet, consectetur koit adipiscing
                                                                    elit, sed do.</p>
                                                                <div class="price">
                                                                    <h6>$14</h6>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-12">
                                                            <div class="tab-item">
                                                                <img src="{{asset('assets/images/tab-item-03.png')}}"
                                                                    alt="">
                                                                <h4>Orange Juice</h4>
                                                                <p>Lorem ipsum dolor sit amet, consectetur koit adipiscing
                                                                    elit, sed do.</p>
                                                                <div class="price">
                                                                    <h6>$18</h6>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-12">
                                                            <div class="tab-item">
                                                                <img src="{{asset('assets/images/tab-item-02.png')}}"
                                                                    alt="">
                                                                <h4>Fruit Salad</h4>
                                                                <p>Lorem ipsum dolor sit amet, consectetur koit adipiscing
                                                                    elit, sed do.</p>
                                                                <div class="price">
                                                                    <h6>$10</h6>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="row">
                                                    <div class="right-list">
                                                        <div class="col-lg-12">
                                                            <div class="tab-item">
                                                                <img src="{{asset('assets/images/tab-item-02.png')}}"
                                                                    alt="">
                                                                <h4>Fresh Chicken Salad</h4>
                                                                <p>Lorem ipsum dolor sit amet, consectetur koit adipiscing
                                                                    elit, sed do.</p>
                                                                <div class="price">
                                                                    <h6>$8.50</h6>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-12">
                                                            <div class="tab-item">
                                                                <img src="{{asset('assets/images/tab-item-02.png')}}"
                                                                    alt="">
                                                                <h4>Dollma Pire</h4>
                                                                <p>Lorem ipsum dolor sit amet, consectetur koit adipiscing
                                                                    elit, sed do.</p>
                                                                <div class="price">
                                                                    <h6>$9</h6>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-12">
                                                            <div class="tab-item">
                                                                <img src="{{asset('assets/images/tab-item-04.png')}}"
                                                                    alt="">
                                                                <h4>Omelette & Cheese</h4>
                                                                <p>Lorem ipsum dolor sit amet, consectetur koit adipiscing
                                                                    elit, sed do.</p>
                                                                <div class="price">
                                                                    <h6>$11</h6>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </article>
                                </section>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    <!-- ***** Menu Area Ends ***** -->

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

