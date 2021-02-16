<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contacto</title>
</head>
<body>
    <h5>Asunto: {{ $contactInfo->subject}}</h5>
    <p>Nombre: {{ $contactInfo->name}}</p>
    <p>Email: {{ $contactInfo->email}}</p>
    <p>Teléfono: {{ $contactInfo->phone}}</p>
    <p><stroong>Mensaje:</strong></p>
    <p>
        {{ $contactInfo->message }}
    </p>
</body>
</html>