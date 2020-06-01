@extends('layout')
@section('title', 'editar')
    
@section('contenido')
    <h1>editar</h1>

<p> </p>
    <form method="POST" action="{{ route('portfolio.update', $datos)}}">
        @method('PATCH')
        @include('proyect.formulario')
        <button type="submit">acualiar</button>
    </form>
@endsection