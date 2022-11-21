@extends('layout')

@section('main')

<!--Connexion Modal-->
<div class="modal" id="modalConnexion">
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
                                                <form action="{{route('login')}}" method="POST">
                                                    @csrf
                                                    <div class="section text-center">
                                                        <h1 class="pb-3">@lang('Log In')</h1>
                                                        <div class="form-floating mt-3">
                                                            <input type="integer" name="cardId"
                                                                class="form-control @error('cardId') is-invalid @enderror"
                                                                placeholder="Your Card Id" id="cardId"
                                                                value="{{old('cardId')}}" autocomplete="cardId"
                                                                autofocus>
                                                            @error('cardId')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                            @enderror
                                                            <label for="incardid">@lang('Your Card Id')</label>
                                                        </div>
                                                        <div class="form-floating mt-3">
                                                            <input type="password" name="password"
                                                                class="form-control" placeholder="Your Password"
                                                                id="password">
                                                            <label for="password">@lang('Your Password')</label>
                                                            <!--@error('password')
                                                                <span class="invalid-feedback" role="alert">
                                                                    <strong>{{$message}}</strong>
                                                                </span>
                                                            @enderror()-->
                                                        </div>
                                                        <div class="d-flex justify-content-between">
                                                            <div class="form-check mt-3">
                                                                <input class="form-check-input" type="checkbox"
                                                                    name="rememberUser" id="rememberUser">
                                                                <label class="form-check-label" for="rememberuser">
                                                                    @lang('Remember me') </label>
                                                            </div>
                                                            <a href="" class="text-danger" style="margin-top:15px">
                                                                @lang('Forgot Password ?')
                                                            </a>
                                                        </div>
                                                        <div class="mt-5 d-grid gap-2 col-6 mx-auto">
                                                            <button
                                                                class=" btn btn-primary">@lang('Submit')</button>
                                                        </div>

                                                        </h2>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                        <div class="card-back">
                                            <div class="center-wrap">
                                                <form action="{{route('register')}}" method="POST">
                                                    @csrf
                                                    <div class="section text-center">
                                                        <h1>@lang('Sign Up') </h1>
                                                        <div class="form-floating mt-2">
                                                            <input type="text" name="lastName"
                                                                class="form-control @error('lastName') is-invalid @enderror"
                                                                placeholder="Your Full Name" id="lastName"
                                                                value="{{old('lastName')}}" autocomplete="lastName"
                                                                autofocus>
                                                            @error('lastName')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                            @enderror
                                                            <label for="lastName">@lang('Your Lastname') </label>
                                                        </div>
                                                        <div class="form-floating mt-1">
                                                            <input type="text" name="firstName"
                                                                class="form-control @error('firstName') is-invalid @enderror"
                                                                placeholder="Your Full Name" id="firstName"
                                                                value="{{old('firstName')}}"
                                                                autocomplete="firstName" autofocus>
                                                            @error('firstName')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                            @enderror
                                                            <label for="firstName">@lang('Your Firstname') </label>
                                                        </div>
                                                        <div class="form-floating mt-1">
                                                            <input type="text" name="cardId"
                                                                class="form-control @error('cardId') is-invalid @enderror"
                                                                placeholder="Your Card Id" id="cardId"
                                                                value="{{old('cardId')}}" autocomplete="cardId"
                                                                autofocus>
                                                            @error('cardId')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                            @enderror
                                                            <label for="cardId">@lang('Your Card Id') </label>

                                                        </div>
                                                        <div class="form-floating mt-1">
                                                            <input type="email" name="email"
                                                                class="form-control @error('email') is-invalid @enderror"
                                                                placeholder="Your Email" id="email"
                                                                value="{{old('email')}}" autocomplete="email"
                                                                autofocus>
                                                            @error('email')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                            @enderror
                                                            <label for="email">@lang('Your Email') </label>
                                                        </div>
                                                        <div class="form-floating mt-1">
                                                            <input type="password" name="password"
                                                                class="form-control @error('password') is-invalid @enderror"
                                                                placeholder="Your Password" id="password" autofocus>
                                                            @error('password')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                            @enderror
                                                            <label for="password">@lang('Your Password')</label>
                                                        </div>
                                                        <div class="form-floating mt-1">
                                                            <input type="password" name="password_confirmation"
                                                                class="form-control"
                                                                placeholder="Confirm Your Password"
                                                                id="password_confirmation" autofocus>
                                                            <label for="password_confirmation">@lang('Confirm Your
                                                                Password')</label>
                                                        </div>
                                                        <div class="mt-2 d-grid gap-2 col-6 mx-auto"">
                                                            <button class=" btn btn-primary">
                                                            @lang('Submit')</button>
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
</div>

    @auth
    @if (session()->has('successMessage'))
    <div class="toast show position-fixed bottom-0 end-0 bg-success" role="alert"  aria-live="polite" aria-atomic="true">
        <div role="alert" aria-live="assertive" aria-atomic="true">
            <div class="toast-header">
                <strong class="me-auto"><i class="bi-globe"></i> Un nouveau message cher étudiant</strong>
                <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
            </div>
            <div class="toast-body">
                {{ session('successMessage') }}
            </div>           
        </div>
    </div>
    @elseif (session()->has('duplicateTicket'))
    <div class="toast fade show position-fixed bottom-0 end-0 bg-danger ">
        <div class="toast-header">
            <strong class="me-auto"><i class="bi-globe"></i> Un nouveau message cher étudiant</strong>
            <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
        </div>
        <div class="toast-body">
            {{ session('duplicateTicket') }}
        </div>
    </div>
    @elseif (session()->has('ticketZero'))
    <div class="toast fade show position-fixed bottom-0 end-0 bg-warning">
        <div class="toast-header">
            <strong class="me-auto"><i class="bi-globe"></i> Un nouveau message cher étudiant</strong>
            <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
        </div>
        <div class="toast-body">
            {{ session('ticketZero') }}
        </div>
    </div>
    <!--<livewire:create-ticket-failed />-->
    @endif

    @endauth

    <!--Sidescreen-->
    <div class="offcanvas offcanvas-end text-bg-dark" id="sideScreen">
        <div class="offcanvas-header">
            <h1 class="offcanvas-title ">Tickets</h1>
            <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas"></button>
        </div>
        <div class="offcanvas-body">

            @auth
            <x-ticket-component :tickets="$tickets" />
            @endauth
        </div>
    </div>


    <!--  About Section  -->
    <div id="about" class="container-fluid wow fadeIn" id="about" data-wow-duration="1.5s">
        <div class="row">
            <div class="col-lg-6 has-img-bg"></div>
            <div class="col-lg-6">
                <div class="row justify-content-center">
                    <div class="col-sm-8 py-5 my-5">
                        <h2 class="mb-4">About Us</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consectetur, quisquam accusantium
                            nostrum modi, nemo, officia veritatis ipsum facere maxime assumenda voluptatum enim! Labore
                            maiores placeat impedit, vero sed est voluptas!Lorem ipsum dolor sit amet, consectetur
                            adipisicing elit. Expedita alias dicta autem, maiores doloremque quo perferendis, ut
                            obcaecati harum, <br><br>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eum
                            necessitatibus iste,
                            nulla recusandae porro minus nemo eaque cum repudiandae quidem voluptate magnam voluptatum?
                            <br>Nobis, saepe sapiente omnis qui eligendi pariatur. quis voluptas. Assumenda facere
                            adipisci quaerat. Illum doloremque quae omnis vitae.
                        </p>
                        <p><b>Lonsectetur adipisicing elit. Blanditiis aspernatur, ratione dolore vero asperiores
                                explicabo.</b></p>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eos ab itaque modi, reprehenderit
                            fugit soluta, molestias optio repellat incidunt iure sed deserunt nemo magnam rem explicabo
                            vitae. Cum, nostrum, quidem.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--  gallary Section  -->
    <div id="gallary" class="text-center bg-dark text-light has-height-md middle-items wow fadeIn">
        <h2 class="section-title">@lang('OUR MENU')</h2>
    </div>
    <div class="gallary row">
        <div class="col-sm-4 col-lg-4 gallary-item wow fadeIn">
            <img src="{{asset('assets/images/gallary-1.jpg')}}" class="gallary-img">
            <a href="#" class="gallary-overlay">
                <i class="gallary-icon ti-plus"></i>
            </a>
        </div>
        <div class="col-sm-4 col-lg-4 gallary-item wow fadeIn">
            <img src="{{asset('assets/images/gallary-2.jpg')}}" class="gallary-img">
            <a href="#" class="gallary-overlay">
                <i class="gallary-icon ti-plus"></i>
            </a>
        </div>
        <div class="col-sm-4 col-lg-4 gallary-item wow fadeIn">
            <img src="{{asset('assets/images/gallary-3.jpg')}}" class="gallary-img">
            <a href="#" class="gallary-overlay">
                <i class="gallary-icon ti-plus"></i>
            </a>
        </div>
    </div>

    <!-- book a table Section  -->
    <div class="container-fluid has-bg-overlay text-center text-light has-height-md middle-items" id="book-table">
        <!--< livewire:ticket-form />-->
        <form class="" action="{{route('requestTicket')}}" method="POST">
            @csrf
            <h2 class="section-title ">@lang('Book-Table')</h2>
            <div class="row mb-2">
                <div class="col-sm-4 col-md-4 col-xs-2 my-2"></div>
                <div class="col-sm-2 col-md-2 col-xs-4 my-2">
                    <select name="meal" id="meal" class="form-control form-control-lg custom-form-control"
                        wire:model='meal'>
                        <option selected disabled> Select an option...</option>
                        <option value="breakfast">@lang('Breakfast')</option>
                        <option value="lunch">@lang('Lunch')</option>
                        <option value="dinner">@lang('Dinner')</option>
                    </select>
                </div>
                <div class="col-sm-2 col-md-2 col-xs-2 my-2">
                    <input type="number" id="orders" class="form-control form-control-lg custom-form-control" required
                        placeholder="Nombre de plats" max="5" min="1" wire:model='orders' name="orders">
                </div>
                <div class="col-sm-4 col-md-4 col-xs-2 my-2"></div>
            </div>
            @auth
            <div class="mt-3 d-grid gap-2 col-3 mx-auto">
                <button wire:click.prevent="create" class=" btn btn-primary">@lang('Get Ticket')</button>
            </div>
            @endauth
            @guest
            <div class="mt-3 gap-2 mx-auto">
                <span class="d-inline-block" tabindex="0" data-bs-toggle="popover" data-bs-trigger="hover focus"
                    data-bs-content="@lang('You shall log in first')">
                    <button class="btn btn-lg btn-primary" type="button" disabled>@lang('Get Ticket')</button>
                </span>


            </div>
            @endguest
        </form>
    </div>

    <!-- REVIEWS Section  -->
    <div id="testmonial" class="container-fluid wow fadeIn bg-dark text-light has-height-lg middle-items">
        <h2 class="section-title my-5 text-center">REVIEWS</h2>
        <div class="row mt-3 mb-5">
            <div class="col-md-4 my-3 my-md-0">
                <div class="testmonial-card">
                    <h3 class="testmonial-title">John Doe</h3>
                    <h6 class="testmonial-subtitle">Web Designer</h6>
                    <div class="testmonial-body">
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Earum nobis eligendi, quaerat
                            accusamus ipsum sequi dignissimos consequuntur blanditiis natus. Aperiam!</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 my-3 my-md-0">
                <div class="testmonial-card">
                    <h3 class="testmonial-title">Steve Thomas</h3>
                    <h6 class="testmonial-subtitle">UX/UI Designer</h6>
                    <div class="testmonial-body">
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laborum minus obcaecati cum
                            eligendi perferendis magni dolorum ipsum magnam, sunt reiciendis natus. Aperiam!</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 my-3 my-md-0">
                <div class="testmonial-card">
                    <h3 class="testmonial-title">Miranda Joy</h3>
                    <h6 class="testmonial-subtitle">Graphic Designer</h6>
                    <div class="testmonial-body">
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid, nam. Earum nobis eligendi,
                            dignissimos consequuntur blanditiis natus. Aperiam!</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <!-- CONTACT Section  -->
    <div id="contact" class="container-fluid bg-dark text-light border-top wow fadeIn">
        <div class="row">
            <div class="col-md-6 px-0">
                <div id="map" style="width: 100%; height: 100%; min-height: 400px"></div>
            </div>
            <div class="col-md-6 px-5 has-height-lg middle-items">
                <h3>FIND US</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sit, laboriosam doloremque odio
                    delectus,
                    sunt magnam laborum impedit molestiae, magni quae ipsum, ullam eos! Alias suscipit impedit et,
                    adipisci illo quam.</p>
                <div class="text-muted">
                    <p><span class="ti-location-pin pr-3"></span> 12345 Fake ST NoWhere, AB Country</p>
                    <p><span class="ti-support pr-3"></span> (123) 456-7890</p>
                    <p><span class="ti-email pr-3"></span>info@website.com</p>
                </div>
            </div>
        </div>
    </div>

    <!-- page footer  -->
    <div class="container-fluid bg-dark text-light has-height-md middle-items border-top text-center wow fadeIn">
        <div class="row">
            <div class="col-sm-4">
                <h3>EMAIL US</h3>
                <P class="text-muted">info@website.com</P>
            </div>
            <div class="col-sm-4">
                <h3>CALL US</h3>
                <P class="text-muted">(123) 456-7890</P>
            </div>
            <div class="col-sm-4">
                <h3>FIND US</h3>
                <P class="text-muted">12345 Fake ST NoWhere AB Country</P>
            </div>
        </div>
    </div>
    <div class="bg-dark text-light text-center border-top wow fadeIn">
        <p class="mb-0 py-3 text-muted small">&copy; Copyright <script>
                document.write(new Date().getFullYear())
            </script> Made with <i class="ti-heart text-danger"></i> By dISO</p>
    </div>
    <!-- end of page footer 
        <livewire:create-ticket/>
    -->
@endsection