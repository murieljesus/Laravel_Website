@extends('layout')
@section('contenido')
<title>Contacto</title>
<div class="container">
    <div class="row">
        
        <div class="col-lg-6">
            <div class="card">
                <div class="card-header"> <h3>Contacto</h3></div>
            <div class="card-body">
 
                <form class="rounded-0 flex-column" method="post" action="{{ route('contact') }}">
                    @csrf

                        <div class="form-group row">
                        <label class="col-md-3 col-form-label text-md-right">Nombre</label>
                            <div class="col-md-7">
                                <input class="form-control is-invalid"  type="text" name="name" placeholder="nombre" value="{{ old ('name')}}">
                                @error('name')
                                <span class="invalid-feedback" role="alert" >
                                {{ $message }}
                                </span>
                                @enderror
                            </div>
                        </div>
            
                        <div class="form-group row">
                            <label class="col-md-3 col-form-label text-md-right">Email</label>
                                <div class="col-md-7">
                                <input class="form-control is-invalid" type="email" name="email" placeholder="email" value="{{ old ('email')}}">
                                @error('email')
                                <span class="invalid-feedback" role="alert" >
                                {{ $message }}
                                </span>
                                @enderror
                                </div>
                            </div>
 

                        <div class="form-group row">
                            <label class="col-md-3 col-form-label text-md-right">Contenido</label>
                            <div class="col-md-7">
                                <textarea class="form-control" name="cotenido"   rows="4" placeholder="contenido" value="{{ old ('cotenido')}}">
                                </textarea>
                                @error('contenido')
                                <span class="invalid-feedback" role="alert" >
                                {{ $message }}
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-7 offset-md-3">
                                <button class="btn btn-primary btn-block" >Enviar</button>
                            </div>
                        </div>
                </form> 
            </div>
        </div>
    </div>
         <div class="col lg-col-6">
            <img  class="img-fluid" src="img/email.svg" alt="">
        </div>
    </div>
</div>
@endsection

