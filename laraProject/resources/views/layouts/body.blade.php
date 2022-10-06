<!DOCTYPE html>
<!-- Definisce il layout di base del sito -->
<html>
    <head>
        <title>e-frined | @yield('title')</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}" >
        
        
    </head>
    <body id="Body">
        @include('layouts.navbar')
        <!-- Inserisce la sezione centrale -->
        @yield('content')
        @include('layouts.footer')
    </body>
</html>

