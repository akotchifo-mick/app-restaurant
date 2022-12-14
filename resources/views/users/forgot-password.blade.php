@extends('users.header')

@section('content')
<!--<div class=" mt-3 mr-5 row ">
    <div class="col-6"></div>
    <div class="col-6 card ">
        <div class="card-body">
            <form action="{{ route ( 'register' ) }} " method="POST">
                @csrf
                <div class="section text-center">
                    <h1> @lang ( 'Register' ) </h1>
                    <div class="form-floating mt-1">
                        <input type="text" name="lastName"
                            class="form-control @error ( 'lastName' ) is-invalid @enderror" placeholder="Your Lastname"
                            id="lastName" required autofocus>
                        @error ( 'lastName' )
                        <span class="invalid-feedback" role="alert">
                            <strong> {{ $message }} </strong>
                        </span>
                        @enderror
                        <label for="lastName"> @lang ( 'Your Lastname' )</label>
                    </div>
                    <div class="form-floating mt-1">
                        <input type="text" name="firstName"
                            class="form-control @error ( 'firstName' ) is-invalid @enderror"
                            placeholder="Your FirstName" id="firstName" required autofocus>
                        @error ( 'firstName' )
                        <span class="invalid-feedback" role="alert">
                            <strong> {{ $message }} </strong>
                        </span>
                        @enderror
                        <label for="firstName"> @lang ( 'Your Firstname' )</label>
                    </div>
                    <div class="form-floating mt-1">
                        <input type="text" name="cardId" class="form-control @error ( 'cardId' ) is-invalid @enderror"
                            placeholder="Your Card Id" id="cardId" required autofocus>
                        @error ( 'cardId' )
                        <span class="invalid-feedback" role="alert">
                            <strong> {{ $message }} </strong>
                        </span>
                        @enderror
                        <label for="cardId"> @lang ( 'Your Card Id' )</label>
                    </div>
                    <div class="form-floating mt-1">
                        <input type="email" name="email" class="form-control @error ( 'email' ) is-invalid @enderror"
                            placeholder="Your Email" id="email" value="{{ old ( 'email' ) }} " autocomplete="email"
                           required autofocus>
                        @error ( 'email' )
                        <span class="invalid-feedback" role="alert">
                            <strong> {{ $message }} </strong>
                        </span>
                        @enderror
                        <label for="email"> @lang( 'Your Email' ) </label>
                    </div>
                    <div class="form-floating mt-1">
                        <input type="password" name="password"
                            class="form-control @error ( 'password' ) is-invalid @enderror" placeholder="Your Password"
                            id="password" required autofocus>
                        @error ( 'password' )
                        <span class="invalid-feedback" role="alert">
                            <strong> {{ $message }} </strong>
                        </span>
                        @enderror
                        <label for="password"> @lang ( 'Your Password' )</label>
                    </div>
                    <div class="form-floating mt-1">
                        <input type="password" name="password_confirmation" class="form-control"
                            placeholder="Confirm Your Password" id="password_confirmation" required autofocus>
                        @error ( 'password_confirmation' )
                        <span class="invalid-feedback" role="alert">
                            <strong> {{ $message }} </strong>
                        </span>
                        @enderror
                        <label for="password_confirmation"> @lang ( 'Confirm Your
                            Password' ) </label>
                    </div>
                    <div class="mt-1 d-flex justify-content-around col-12 mx-auto">
                        <a class="mt-3" style="padding-bottom: 10px" href=" {{ route('welcome') }}"> 
                            D??j?? inscrit ? 
                        </a>
                        <button class=" btn btn-primary">
                            @lang ( 'Submit' )
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>-->
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Reset Password') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <form method="POST" action="{{ route('password.email') }}">
                        @csrf

                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Send Password Reset Link') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<a href=" {{ route('password.confirm') }} "> Confirp password</a>
@endsection