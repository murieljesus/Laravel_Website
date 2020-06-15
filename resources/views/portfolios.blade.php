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
 @extends('layout')
 @section('contenido')
<body>
    <div class="container"> 
    <h1 class="display-4">Cosumos</h1>
        <div class="texto text-secondary p-lg-3">
            Aqui encontraras toda la informacion relacionado a tus consumos
        </div>
<div class="row">
  <body>
    <div style="width: 20%">
        {!! $consumochart->container() !!}
    </div>
</body>
    {!! $consumochart->script() !!}

          <div class="container col-lg-6 float-md-left ">   
        <table class="table ">
                        
            <thead>
              <tr>
                <th scope="col">Periodo</th>
                <th scope="col">Consumo</th>
                <th scope="col">Feche de emision</th>
                <th scope="col">Vencimiento</th>
                <th scope="col">Factura</th>
              </tr>
            </thead>
          @foreach ($datos as $datos)
            <tbody>
              <tr>
                <td>{{ $datos->periodo }}</</td>
                <td>{{ $datos->consumo }}</</td>
                <td>{{ $datos->fecha}}</</td>
                <td>{{ $datos->vencimiento}}</</td>
                <td> <a class="btn-link" href="{{ route('Port.pdf' , $datos->id) }}"> Ver Resumen</a></td>
              </tr>
            </tbody>
          @endforeach
          </table>
        <a class="btn btn-primary" href="{{ route('portfolio.create')}}"> Crear Proyecto</a>
        </div>    

        </div>
    </body>
    <div  class="col lg-col-6" id="chart_div"></div>
</div>

</html>
@endsection
    
