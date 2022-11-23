<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="Diso">
    <title>Restau-U</title>
    <link href="{{asset('assets/css/bootstrap.css')}}" rel="stylesheet">
</head>

<body>
    <div>
        <form action="{{route('setZero') }}" method="POST">
            @csrf
            <label for="date"> Date :</label>
            <input type="date" name="date">
            <button type="submit"> Envoyer </button>
        </form>
    </div>

    <div class="toast show" role="alert"  aria-live="assertive" aria-atomic="true" data-bs-delay="5000ms">        
            <div class="toast-header">
                <strong class="me-auto"><i class="bi-globe"></i> Un nouveau message cher étudiant</strong>
                <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
            </div>
            <div class="toast-body">
                yezir
            </div>           
    </div>
    <script src="{{asset('assets/js/bootstrap.bundle.min.js')}}"></script>
</body>
</html>