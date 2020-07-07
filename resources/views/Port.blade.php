<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Resumen</title>

    <link rel="stylesheet" href="/css/app.css">
    <link rel="stylesheet" href="/css/appstyle.css">

    <script src="{{ asset('js/app.js') }}"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>


</head>
<div class="container">
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6">
                            <img src="img/hydro2.png" width="120" height="100" >
                        </div>
                        <div class="col-md-6 text-right">
                            <div class="d-block text-uppercase">
                                @foreach ($user as $item)
                                @foreach ($results as $dato)  
                                <pre class="">
                                  <dl >
                                {{ $item->name }} {{ $item->surname}}<br>
                                {{ $item->address }}<br>
                                Mar del Plata 7600<br>
                                Provincia de Buenos Aires<br> 
                                  </dl>
                                </pre>
                            </div>
                        </div>
                    </div>

                <hr class="my-lg-n5">

                <div class="row">
                    <div class="col-md-10">
                      <h2>
                        <pre>
          Hola {{ $item->name }}
          el total a pagar es de {{ $dato->monto }}
          y vence el dia {{ $dato->vencimiento }}
                        </pre>
                      </h2>
                    </div>
               </div>
               <hr class="my-lg-n5">
               <div class="row">
                <div class="col-md-10">
                  <div class="card rounded">
                    <div class="">
                      <blockquote>
                        <dl>
                          Este mes consumiste un total de {{ $dato->consumo}} (kW) <br>
                        
                          el monto total a abonar de este periodo es de $ {{ $dato->monto}} <br>
                  
                          tu fecha de vencimiento es {{ $dato->vencimiento}} <br>
                      
                          ultima fecha para abonar en bancos 
                        </dl>
                          <small>
                            recorda que podes abonar tu factura en todos los comercios aderidos
                          </small>
                        </p>
                      </blockquote>
                    </div>
                  </div>
              </div>
            </div>
            <div class="py-3 px-5 text-center">
            <img src="img/barcode.gif" width="350" height="100">
            </div>
                </div>
            </div>
        </div> 
    </div>
</div>
@endforeach
@endforeach
</html>
