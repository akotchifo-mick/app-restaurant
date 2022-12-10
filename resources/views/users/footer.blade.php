@extends('users.lay')


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