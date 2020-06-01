<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/app.css">
    <link rel="stylesheet" href="/css/appstyle.css">

    <link href="{{ asset('css/toastr.css') }}" rel="stylesheet">
    <script src="{{ asset('js/app.js') }}"></script>

</head>
@extends('toastr')
<body class="bodys">
<div class="d-flex flex-column my-auto">
    <nav class="navbar shadow p-3 mb-5 rounded unorder">
    <a class="navbar-brand butt" href="{{ route('index') }}">
    {{ config('app.name') }}
    </a>
        <ul class="nav nav-pills">
            <li class="nav-item"><a class="nav-link butt"  href="{{ route('index') }}">Home</a>
            </li>
            <li class="nav-item"> <a class="nav-link butt" href="{{ route('contact') }}">Contacto</a>
            </li>
            @guest  
            <li class="nav-item"> 
                <a class="nav-link butt" href="{{ route('about') }}">Nosotros</a>
            </li>
            <li class="nav-item">
                <a class="nav-link  butt" href="{{ route('login') }}">Login</a>
            </li>
            @else

            
            <li class="nav-item"> 
                <a class="nav-link butt" href="{{ route('profile') }}">Mi Perfil</a>
            </li>
            <li class="nav-item">
                 <a  class="nav-link butt" href="{{ route('portfolios') }}">Consumos</a>
            </li>
            <li class="nav-item">
                <a  class="nav-link butt" href="#"onclick="event.preventDefault();document.getElementById('logout-form').submit();"> Logout</a>    
            </li>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
            @csrf
            </form>
            @endguest
         </ul>
    </nav>
    @include('sesion')
    <main>
        @yield('contenido')
    </main>
    <footer class="fixed-bottom foots" >
        {{ config('app.name')}}
    </footer>



</div>
</body>
</html>