@extends('layout')
@extends('toastr')
@section('contenido')
<title>Hydro</title>
<div class="container mx-auto position-relative p-0">
    <div class="row">
        <div class="md-col-10">
             <div id="demo" class="carousel slide p-md-3" data-ride="carousel">
                <ul class="carousel-indicators">
                    <li data-target="#demo" data-slide-to="0" class="active"></li>
                    <li data-target="#demo" data-slide-to="1"></li>
                </ul>

                <div class="carousel-inner">
                <div class="carousel-item active">
                <img  class="img-fluid" src="img/lng.jpg" width="1200" height="00">
                <div class="carousel-caption">
                    <p class="index-font">hydro produce el 96% de la energia que se consume en argentina</p>
                </div>   
                 </div>
                <div class="carousel-item">
                <img class="img-fluid" src="img/power.jpg"  width="1200" height="400">
                <div class="carousel-caption">
                    <p class="index-font">nuestros asociados son empresas publicas y privadas</p>
                </div>   
                </div>
                 </div>
                     <a class="carousel-control-prev" href="#demo" data-slide="prev">
                        <span class="carousel-control-prev-icon"></span>
                    </a>
                    <a class="carousel-control-next" href="#demo" data-slide="next">
                        <span class="carousel-control-next-icon"></span>
                    </a>
            </div>
                <div class="card-font p-md-3">
                        <p>Bienvenidos a hydro</p>
                        <p>aqui podrán encontrar información del sector</p>
                        <p> o contactarnos ante cualquier consulta.</p>
                </div>
        </div>
        
    </div>
</div>
@endsection
    

