<div class="container"> 
    <div class="texto text-secondary p-lg-3">
    </div>
      <div class="row">
        <div class="container col-lg-6 float-md-left ">   
        <table class="table ">
                    @foreach ($user as $item)
                        <p>{{ $item->name }}</p>
                    @endforeach
        <thead>
          <tr>
            <th scope="col">Periodo</th>
            <th scope="col">Consumo</th>
            <th scope="col">Feche de emision</th>
            <th scope="col">Vencimiento</th>
          </tr>
        </thead>
        @foreach ($results as $dato)  
        <tbody>
          <tr>
            <td>{{ $dato->periodo }}</</td>
            <td>{{ $dato->consumo }}</</td>
            <td>{{ $dato->fecha   }}</</td>
            <td>{{ $dato->vencimiento}}</</td>
          </tr>
        </tbody>
        @endforeach
      </table>
    </div>  
    </div>