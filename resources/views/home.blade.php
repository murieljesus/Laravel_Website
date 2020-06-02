
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home</title>
</head>
<body>
@extends('layout')
@section('title')
@section('contenido')
    <h1>home(hace falta un index)</h1>
    @auth
        <h4> {{ Auth::user()->name }}</h4>
        
    @endauth
@endsection
</body>
</html>