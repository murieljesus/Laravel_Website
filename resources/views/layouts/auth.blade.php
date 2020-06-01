<!doctype html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name') }}</title>
    <!-- Styles -->
    <link href="css/appstyle.css" rel="stylesheet">
    <link href="css/app.css" rel="stylesheet">

    

</head>
<body class="bodys">
    <div id="d-flex flex-column my-auto">
        <nav class="navbar shadow p-3 mb-5 rounded unorder">
            <a class="navbar-brand butt" href="{{ route('index') }}">
                {{ config('app.name') }}
            </a>
        <ul class="nav nav-pills">
            <li class="nav-item"><a class="nav-link butt"  href="{{ route('index') }}">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link  butt" href="{{ route('login') }}">Login</a>
            </li>
            <li class="nav-item">
                <a class="nav-link  butt" href="{{ route('register') }}">Registrarse</a>
            </li>
        </ul>
        </nav>
        <main class="py-4">
            @yield('content')
        </main>
    <footer class="fixed-bottom foots" >
        {{ config('app.name')}}
    </footer>
    </div>
</body>
</html>
