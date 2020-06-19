@extends('layout')
<title>Contacto</title>
@section('contenido')
<div class="container position-relative">
    <div class="row">
        
        <div class="col-lg-7 p-md-4">
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
            <div class="col-lg-4  texto p-md-5">
                <p class="text-center">
                    <h4>Aqui podras hacer tu consulta 
                        o reclamo
                    </h4>
                </p>
                <dl class="contact-list card-about">
                  <dt>Direccion:</dt>
                  <dd>Av. Luro 9850, Mar del Plata, Argentina</dd>
                </dl>
                <dl class="contact-list card-about ">
                  <dt>Email:</dt>
                  <dd><span>questions@hydro.com</span></dd>
                </dl>
                <dl class="contact-list card-about">
                  <dt>Telefonos:</dt>
                  <dd><span>0800-666-4001</span><span> / </span><span>0800-666-4002</span>
                  </dd>
                </dl>
              </div>
    </div>
</div>
@endsection

