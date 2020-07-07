<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Perfil</title>
</head>
<body>
    @extends('layouts.log')
    @section('contenido')
    <div class="container mx-auto"> 
      <div class="row justify-content-center">
    <div class="col-md-7">
        <div class="card " >
            <div class="card-body">
                <div class="row">
                    <div class="col-md-12">
                        <h4>Mis Datos</h4>
                        <hr>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <form method="POST" action="{{ route('profile.update', Auth::user())}}">
                            @csrf
                            @method('PATCH')
                          <div class="form-group row">
                            <label class="col-4 col-form-label">Nombre</label> 
                            <div class="col-8">
                              <input name="name" value="{{ Auth::user()->name }}" class="form-control here" type="text">
                            </div>
                          </div>

                          <div class="form-group row">
                            <label class="col-4 col-form-label">Apellido</label> 
                            <div class="col-8">
                              <input name="surname"  value="{{ Auth::user()->surname }}" class="form-control here" type="text">
                            </div>
                          </div>

                          <div class="form-group row">
                            <label  class="col-4 col-form-label">DNI</label> 
                            <div class="col-8">
                              <input  name="dni" value="{{ Auth::user()->dni }}"  class="form-control here" type="text">
                            </div>
                          </div>

                          <div class="form-group row">
                            <label class="col-4 col-form-label">Direccion</label> 
                            <div class="col-8">
                              <input  name="address" value="{{ Auth::user()->address }}"  class="form-control here" required="required" type="text">
                            </div>
                          </div>

                          <div class="form-group row">
                            <label  class="col-4 col-form-label">Telefono</label> 
                            <div class="col-8">
                              <input  name="phone" value="{{ Auth::user()->phone }}"  class="form-control here" type="text">
                            </div>
                          </div>

                          <div class="form-group row">
                            <div class="offset-4 col-8">
                              <button type="submit" class="btn btn-primary">Actualizar</button>
                              <a class="btn btn-secondary" href="{{ route('changePassword') }}">Cambiar contraseña </a>
                            </div>
                            
                          </div>
                        </form>
                    </div>
                </div>
                
            </div>
        </div>
    </div>
      </div>

</div>
</div>
@endsection
        </div>
    </body>
</html>


    
