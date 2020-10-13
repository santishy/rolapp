<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Pago recibido</title>
</head>
<body>
    <h1>Pago recibido</h1>
    <p>Tú pago a sido recibido satisfactoriamente</p>
    Puedes descargar la cancion en el siguiente link 

    <a href="{{route('songs',$payment->id)}}">Ir a descarga</a>
</body>
</html>