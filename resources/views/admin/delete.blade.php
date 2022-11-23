<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="Diso">
    <title>Restau-U</title>
</head>

<body>
    <div>
        <form action="{{route('deleteAll') }}" method="POST">
            @csrf
            <label for="date"> Date :</label>
            <input type="date" name="date">
            <button type="submit"> Envoyer </button>
        </form>
    </div>
</body>