@extends('users.lay')

@section('content')
<div class=" mt-3 mr-2 row ">
    <div class="col-sm-6"></div>
    <div class="col-sm-6 card ">
        <div class="card-body">
            <form action="{{ route ( 'register' ) }} " method="POST">
                @csrf
                <div class="section text-center">
                    <h1> @lang ( 'Register' ) </h1>
                    <div class="form-floating mt-1">
                        <input type="text" name="lastName"
                            class="form-control @error ( 'lastName' ) is-invalid @enderror" placeholder="Your Lastname"
                            id="lastName" value="{{ old ( 'lastName' ) }} " autocomplete="lastName" required autofocus>
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
                            placeholder="Your FirstName" id="firstName" value="{{ old ( 'firstName' ) }} "
                            autocomplete="firstName" required autofocus>
                        @error ( 'firstName' )
                        <span class="invalid-feedback" role="alert">
                            <strong> {{ $message }} </strong>
                        </span>
                        @enderror
                        <label for="firstName"> @lang ( 'Your Firstname' )</label>
                    </div>
                    <div class="form-floating mt-1">
                        <input type="text" name="cardId" class="form-control @error ( 'cardId' ) is-invalid @enderror"
                            placeholder="Your Card Id" id="cardId" value="{{ old ( 'cardId' ) }} " autocomplete="cardId"
                            required autofocus>
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
                            Déjà inscrit ?
                        </a>
                        <button class=" btn btn-primary">
                            @lang ( 'Submit' )
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection