<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Pago recibido</title>
</head>
<body>
    <h1>¡Tu pago ha sido recibido satisfactoriamente!</h1>
    <p>Espero que disfrutes mi material discográfico, puedes hacer la descarga en el siguiente link:
    <a href="{{route('songs',$payment->id)}}">Ir a descarga</a></p>
    <p>Te envío saludos y bendiciones</p>
    <p><a href="www.jorgealbertoalejandre.com">Jorge Alberto Alejandre</a></p>
</body>
</html>