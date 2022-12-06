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
    <script>
        var popoverTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="popover"]'))
        var popoverList = popoverTriggerList.map(function (popoverTriggerEl) {
          return new bootstrap.Popover(popoverTriggerEl)
        })
    </script>
    <script>
        var toastElList = [].slice.call(document.querySelectorAll('.toast'))
        var toastList = toastElList.map(function (toastEl) {
        return new bootstrap.Toast(toastEl, option)
        });
    </script>
    @if ( session()->has('authRequired') )
    <script>         
        $( "#authRequired").modal('show')
    </script>
@endif

</body>

</html>