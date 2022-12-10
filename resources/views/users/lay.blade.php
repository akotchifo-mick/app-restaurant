<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="author" content="Diso">

    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap"
        rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@400;500;600;700&display=swap"
        rel="stylesheet">

    <title>Restau-U</title>

    @include('sweetalert::alert')

    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="{{asset('assets/css/bootstrap.css')}}" >
    <link rel="stylesheet" href="{{asset('assets/css/new/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/new/font-awesome.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/new/templatemo-klassy-cafe.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/new/owl-carousel.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/new/lightbox.css')}}">

    @livewireStyles
    <!-- Fonts -->
    <script src="https://kit.fontawesome.com/37e9ee2609.js" crossorigin="anonymous"></script>

</head>

<body>

    <!-- ***** Preloader Start ***** 
    <div id="preloader">
        <div class="jumper">
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>
     ***** Preloader End ***** -->

    <!-- ***** Header Area Start ***** -->
        <header class="header-area header-sticky mb-5 pb-5">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <nav class="main-nav">
                            <!-- ***** Logo Start ***** -->
                            <a href="index.html" class="logo">
                                <img src="{{asset('assets/images/klassy-logo.png')}}" align="klassy cafe html template">
                            </a>
                            <!-- ***** Logo End ***** -->
                            <!-- ***** Menu Start ***** -->
                            <ul class="nav">
                                <li class="scroll-to-section"><a href=" {{ route('welcome') }} " class="active">@lang('Home')</a></li>
                                @yield('nav-menu')
                            </ul>                            
                            <!-- ***** Menu Ends ***** -->
                            <a class='menu-trigger'>
                                <span>Menu</span>
                            </a>
                        </nav>
                    </div>
                </div>
            </div>
        </header>
    <!-- ***** Header Area Ends ***** -->

    <!-- ***** @content Area Start ***** -->
    <div class="pt-5 mt-5">
        @yield('content')
    </div>
    <!-- ***** @content Area Ends ***** -->

    <!-- ***** Footer Start ***** -->
    @yield('foot')
    <!--***** Footer Ends ***** -->

    @livewireScripts

    <!-- jQuery -->
    <script src="{{asset('assets/js/new/jquery-2.1.0.min.js')}}"></script>

    <!-- Bootstrap -->
    <script src="{{asset('assets/js/new/popper.min.js')}}"></script>
    <script src="{{asset('assets/js/new/bootstrap.min.js')}}"></script>

    <!-- Plugins -->
    <script src="{{asset('assets/js/new/owl-carousel.js')}}"></script>
    <script src="{{asset('assets/js/new/accordions.js')}}"></script>
    <script src="{{asset('assets/js/new/datepicker.js')}}"></script>
    <script src="{{asset('assets/js/new/scrollreveal.min.js')}}"></script>
    <script src="{{asset('assets/js/new/waypoints.min.js')}}"></script>
    <script src="{{asset('assets/js/new/jquery.counterup.min.js')}}"></script>
    <script src="{{asset('assets/js/new/imgfix.min.js')}}"></script>
    <script src="{{asset('assets/js/new/slick.js')}}"></script>
    <script src="{{asset('assets/js/new/lightbox.js')}}"></script>
    <script src="{{asset('assets/js/new/isotope.js')}}"></script>

    <!-- Global Init -->
    <script src="{{asset('assets/js/new/custom.js')}}"></script>
    <script>
        $(function() {
            var selectedClass = "";
            $("p").click(function(){
            selectedClass = $(this).attr("data-rel");
            $("#portfolio").fadeTo(50, 0.1);
                $("#portfolio div").not("."+selectedClass).fadeOut();
            setTimeout(function() {
              $("."+selectedClass).fadeIn();
              $("#portfolio").fadeTo(50, 1);
            }, 500);
                
            });
        });
    </script>
    <script>
        var popoverTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="popover"]'))
        var popoverList = popoverTriggerList.map(function (popoverTriggerEl) {
          return new bootstrap.Popover(popoverTriggerEl)
        })
        var toastElList = [].slice.call(document.querySelectorAll('.toast'))
        var toastList = toastElList.map(function (toastEl) {
        return new bootstrap.Toast(toastEl, option)
        });
    </script>
    <script>
        var toastElList = [].slice.call(document.querySelectorAll('.toast'))
        var toastList = toastElList.map(function (toastEl) {
        return new bootstrap.Toast(toastEl, option)
        });
        $( function () {
            $(' [data-toggle=]"popover" ').popover()
        })
    </script>
    @if ( session()->has('authRequired') )
    <script>
        $( "#authRequired").modal('show')
    </script>
    @endif
    @if ( session()->has('authFailed') )
    <script>
        $( "#modalConnexion" ).modal( 'show' )
    </script>
    @endif
    <script>
        $( "#reservationModal" ).modal( 'show' )
    </script>
    
</body>

</html>