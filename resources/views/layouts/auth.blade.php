<!doctype html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="shortcut icon" href="/img/favicon.ico">
    <!-- Styles -->

    <link href="/css/app.css" rel="stylesheet">
    <link href= "/css/appstyle.css" rel="stylesheet"> 
    
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!--Script -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
  
  
    

</head>
<body class="bodys">
    <div id="d-flex flex-column my-auto">
        <nav class="navbar shadow p-1 mb-5 rounded unorder">
            <a class="navbar-brand butt" href="{{ route('index') }}">
                <img src="/img/hydro2.png" width="90" height="75" >
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
