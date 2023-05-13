<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="shortcut icon" href="img/favicon.ico" />

    <link rel="stylesheet" href="/css/app.css">
    <link rel="stylesheet" href="/css/appstyle.css">

    <link href="{{ asset('css/toastr.css') }}" rel="stylesheet">
    <script src="{{ asset('js/app.js') }}"></script>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>


</head>
@extends('toastr')
<body class="bodys">
<div class="d-flex flex-column my-auto">
    <nav class="navbar shadow p-1 mb-5 rounded unorder">
           
    <a class="navbar-brand butt" href="{{ route('index') }}">
    <img src="img/hydro2.png" width="90" height="75" >
    </a>
        <ul class="nav">
            <li class="nav-item"><a class="nav-link butt"  href="{{ route('index') }}">Inicio</a>
            </li>
            @guest  
            <li class="nav-item"> <a class="nav-link butt" href="{{ route('contact') }}">Contacto</a>
            </li>
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
        <footer class="foots " >
            <div class="container">
              <div class="row row-30">
                <div class="col-md-4 col-xl-5">
                  <div class="pr-xl-4 p-md-5">
                    <p class="texto"><span>© Hydro  </span><span class="copyright-year">2020</span><span> todos los derechos reservados.</span></p>
                  </div>
                </div>
                <div class="col-md-4 texto p-md-3">
                  <h5>Contacto</h5>
                  <dl class="contact-list">
                    <dt>Direccion:</dt>
                    <dd>Av. Luro 9850, Mar del Plata, Argentina</dd>
                  </dl>
                  <dl class="contact-list">
                    <dt>Email:</dt>
                    <dd><span>questions@hydro.com</span></dd>
                  </dl>
                  <dl class="contact-list">
                    <dt>Telefonos:</dt>
                    <dd><span>0800-666-4001</span><span> o </span><span>0800-666-4002</span>
                    </dd>
                  </dl>
                </div>
                <div class="col-md-4 col-xl-3 p-md-3">
                  <h5>Links</h5>
                  <ul class="nav-list">
                    <li><a class="link" href="{{ route('about') }}">Nosotros</a></li>
                    <li><a class="link" href="{{ route('contact') }}">Contacto</a></li>
                    <li><a class="link" href="{{ route('index') }}">Inicio</a></li>
                  </ul>
                </div>
              </div>
            </div>
          </footer>
    </div>
</body>
</html>