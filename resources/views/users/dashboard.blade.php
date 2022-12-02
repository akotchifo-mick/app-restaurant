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

    <!-- Navbar -->
    <nav class=" navbar navbar-dark fixed-top" data-spy="affix" data-offset-top="10">
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
                <img src="{{asset('assets/images/logo.svg')}}" class="brand-img" alt="">
                <span class="brand-txt">
                    Mon tableau de bord
                </span>
            </a>
            <ul class="navbar-nav">

                @auth
                <li class="nav-item">
                    <a class="nav-link" type="button" data-bs-toggle="offcanvas" data-bs-target="#sideScreen">
                        Tickets
                    </a>
                </li>
                <div class="collapse navbar-collapse" id="navbarNavDarkDropdown">
                    <ul class="navbar-nav">
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDarkDropdownMenuLink" role="button"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                <i class="fa-regular fa-user"></i> {{Auth::user()->lastName.' '.Auth::user()->firstName
                                }}
                            </a>
                            <ul class="dropdown-menu dropdown-menu-dark text-center"
                                aria-labelledby="navbarDarkDropdownMenuLink" style="--bs-dropdown-spacer: 0.49rem;">
                                <li><a class="dropdown-item" href="{{route('dashboard')}}">@lang('Dashboard')</a></li>
                                <li>
                                    <form action="{{route('logout')}}" method="POST">
                                        @csrf
                                        <button class="dropdown-item">@lang('Logout')</button>
                                    </form>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
                @endauth
                @guest
                <!--<li class="nav-item">
                    <button class="btn btn-outline-secondary" disabled>
                        Disabled tickets
                    </button>
                </li>-->
                <li class="nav-item">
                    <a class="nav-link" type="button" data-bs-target="#modalConnexion" data-bs-toggle="modal">
                        Connexion
                    </a>
                </li>
                @endguest
            </ul>
        </div>
    </nav>

    <header id="home">
        <div class="overlay text-white text-center"></div>
    </header>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper" style="margin-top:15%">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Starter Page</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Starter Page</li>
                        </ol>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->

        <!-- Main content -->
        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">Card title</h5>

                                <p class="card-text">
                                    Some quick example text to build on the card title and make up the bulk of the
                                    card's
                                    content.
                                </p>

                                <a href="#" class="card-link">Card link</a>
                                <a href="#" class="card-link">Another link</a>
                            </div>
                        </div>

                        <div class="card card-primary card-outline">
                            <div class="card-body">
                                <h5 class="card-title">Card title</h5>

                                <p class="card-text">
                                    Some quick example text to build on the card title and make up the bulk of the
                                    card's
                                    content.
                                </p>
                                <a href="#" class="card-link">Card link</a>
                                <a href="#" class="card-link">Another link</a>
                            </div>
                        </div><!-- /.card -->
                    </div>
                    <!-- /.col-md-6 -->
                    <div class="col-lg-6">
                        <div class="card">
                            <div class="card-header">
                                <h5 class="m-0">Featured</h5>
                            </div>
                            <div class="card-body">
                                <h6 class="card-title">Special title treatment</h6>

                                <p class="card-text">With supporting text below as a natural lead-in to additional
                                    content.</p>
                                <a href="#" class="btn btn-primary">Go somewhere</a>
                            </div>
                        </div>

                        <div class="card card-primary card-outline">
                            <div class="card-header">
                                <h5 class="m-0">Featured</h5>
                            </div>
                            <div class="card-body">
                                <h6 class="card-title">Special title treatment</h6>

                                <p class="card-text">With supporting text below as a natural lead-in to additional
                                    content.</p>
                                <a href="#" class="btn btn-primary">Go somewhere</a>
                            </div>
                        </div>
                    </div>
                    <!-- /.col-md-6 -->
                </div>
                <!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->

    <!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark">
        <!-- Control sidebar content goes here -->
        <div class="p-3">
            <h5>Title</h5>
            <p>Sidebar content</p>
        </div>
    </aside>
    <!-- /.control-sidebar -->

     <!-- Main Footer -->
    <footer class="main-footer">
        <!-- To the right -->
        <div class="float-right d-none d-sm-inline">
            Anything you want
        </div>
        <!-- Default to the left -->
        <strong>Copyright &copy; 2014-2021 <a href="https://adminlte.io">AdminLTE.io</a>.</strong> All rights reserved.
    </footer>
    </div>
    <!-- ./wrapper -->
    
    <!-- REQUIRED SCRIPTS -->
    <script src="{{asset('assets/js/jquery-3.4.1.js')}}"></script>
    <script src="{{asset('assets/js/bootstrap.bundle.js')}}"></script>
    <!-- AdminLTE App -->
    <script src="{{asset('assets/js/adminlte.min.js')}}"></script>
    <!-- jQuery -->
    <script src="{{asset('assets/js/bootstrap.affix.js')}}"></script>

    @livewireScripts

</body>

</html>