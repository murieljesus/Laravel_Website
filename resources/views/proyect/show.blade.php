@extends('layout')
    <title>Proyectos</title>
@section('title')

@section('contenido')
<div class="container">
    <div class="bg-white p-5 shadow rounded">
                <h1>{{$datos->title}}</h1>

    </form>
    <p class="text-secondary">{{$datos->descripcion}}</p>
    <p class="text-black-50">{{$datos->created_at->diffForHumans()}}</p>
    <div class="btn-group">
         <a class="btn btn-primary" href="{{route('portfolio.edit',$datos)}}"> Editar</a>
         <a class=" btn btn-danger" href="#" onclick="document.getElemenyById('delete-portfolio').submit()"> Eliminar</a>
    </div>
       <form  id="delete-portfolio" action="{{ route('portfolio.destroy', $datos)}}" method="POST">
        @csrf @method('DELETE')


    </div>

</div>

@endsection



