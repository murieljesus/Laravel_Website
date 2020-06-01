        
     @csrf   
    <p>titulo </p> 
    <input type="text" name="title" value="{{old('title',$datos->title) }}"> <br>
    {{ $errors->first('title') }} <br>
       
    <p>descripcion </p>
    <input type="text" name="desc" value="{{ old('desc',$datos->descripcion) }}"> <br>
    {{ $errors->first('desc') }} <br>