@extends('users.lay')
<!-- **** This is a header for register page and forgot password page
    These pages are footerless
    **** -->
@section('nav-menu')
        <!-- ***** Menu Start ***** -->
        <ul class="nav">
            <li><a href="{{ route('layout') }}" class="active">@lang('Home')</a></li>
            
        </ul>
        <!-- ***** Menu Ends ***** -->
@endsection

@yield('main')
