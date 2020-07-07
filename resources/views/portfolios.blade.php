<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.1/Chart.min.js" charset="utf-8">
    </script>
    <title>Cosumos</title>
</head>
 @extends('layouts.log')
 @section('contenido')
<body>
    <div class="container"> 
      <div class="card">
        <div class="card-header badge-info text-center">
          <h3 class="text-white">
            Bienvenido {{ Auth::user()->name }}
          </h3>
          <blockquote class="text-center">
            <h4 class="text-white">
              Este es el estado actual de la cuenta
            </h4>
          </blockquote>
        
           
        </div>
      </div>
          <div class="row p-3">
            <div class="col-lg-4">
              <div class="card rounded">
                  <div class="card-header badge-secondary">
                    Ultimos consumos
                  </div>
                  <ul class="list-group list-group-flush text-center">
                  <li class="list-group-item">Consumo (kW): {{ DB::table('gestion')->get()->last()->consumo }}</li>
                    <li class="list-group-item">Vencimiento: {{ DB::table('gestion')->get()->last()->vencimiento }}</li>
                    <li class="list-group-item">Fecha de emision: {{ DB::table('gestion')->get()->last()->fecha }}</li>
                  </ul>
        
              </div>
              <div class="card rounded ">
                    <div class="card-body">
                      {!! $consumochart->container() !!}
                    </div>
              </div>
                {!! $consumochart->script() !!}
            </div>
            <div class="col-lg-8">   
              <div class="card rounded">
            <table class="table ">              
            <thead class="badge-secondary"> 
              <tr>
                <th scope="col">Importe</th>
                <th scope="col">Estado</th>
                <th scope="col">Vencimiento</th>
                <th scope="col">Descargar</th>
              </tr>
            </thead>
          @foreach ($datos as $datos)
            <tbody>
              <tr>
                <td>{{ $datos->monto}}</</td>
                <td>{{ $datos->estado}}</</td>
                <td>{{ $datos->vencimiento}}</</td>
                <td> <a class="btn-link" href="{{ route('Port.pdf' , $datos->id) }}"> Ver Resumen</a></td>
              </tr>
            </tbody>
          @endforeach
          </table>
              </div>
        </div>    
          </div>
        </div>
    </body>
</html>
@endsection
    
