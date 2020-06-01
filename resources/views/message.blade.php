<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Consulta/ Reclamo</title>
</head>
<body>
    <p>Este mail es enviado por: {{ $datos['name'] }} </p>
    <p>Direccion de correo: {{ $datos['email'] }}</p>
    <p><strong>Asunto/Reclamo: </strong> {{ $datos['cotenido'] }}</p>
</body>
</html>