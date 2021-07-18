<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="{{ URL::asset('img/favicon.ico') }}"  type="image/x-icon" /> 
    <title>Restablecer Contraseña</title>
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body class="bodys">
    <div id="d-flex flex-column my-auto">
        <nav class="navbar shadow p-1 mb-5 rounded unorder">
            <a class="navbar-brand butt" href="{{ route('index') }}">
                <img src="{{ HTML::image('img/hydro2.png', 'Example Image') }}" width="90" height="75" >
            </a>
        <ul class="nav nav-pills">
            <li class="nav-item"><a class="nav-link butt"  href="{{ route('index') }}">Inicio</a>
            </li>
            <li class="nav-item ">
                <a class="nav-link butt" href="{{ route('login') }}">Login</a>
            </li>
            <li class="nav-item">
                <a class="nav-link  butt" href="{{ route('register') }}">Registrarse</a>
            </li>
        </ul>
        </nav>
        <main class="py-4">
            @yield('content')
        </main>

    </div>
</body>
</html>
