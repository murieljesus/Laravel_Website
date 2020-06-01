@extends('layout')

@section('title')
    
@section('contenido')
    <h1>CREAR PROYECTO</h1>
    
    <form method="POST" action="{{ route('portfolio.store')}}">
        @include('proyect.formulario')
        <button type="submit">guardar</button>
    </form>
@endsection

