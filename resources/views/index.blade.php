@extends('layout')
@extends('toastr')
@section('contenido')
<title>Hydro</title>
<div class="container position-relative p-2">
    <div class="row">
        <div class=" container-fluid">
            <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                  <div class="carousel-item active">
                    <img class="d-block"  width="1100" height="500" src="img/power.jpg" alt="First slide">
                    <div class="carousel-caption d-none d-md-block">
                         <p class="index-font">Hydro produce el 96% de la energia que se consume en argentina</p>
                    </div>
                  </div>
                  <div class="carousel-item">
                    <img class="d-block w-100" src="img/sempra.jpg" alt="Second slide">
                    <div class="carousel-caption d-none d-md-block">
                        <p class="index-font">nuestros asociados son empresas publicas y privadas</p>
                   </div>
                  </div>
                </div>
              </div>
        </div>
    </div>
</div>
<div class=" container-fluid p-md-0">
        <div class="card-font">
             <p>Bienvenidos a Hydro</p>
             <p>aqui podrán encontrar información del sector</p>
             <p> o contactarnos ante cualquier consulta.</p>
        </div>
    </div>
<div class="hydro">
    <img class="img-fluid" width="300" height="300" src="img/hydro2.png" >
</div>
@endsection
    

