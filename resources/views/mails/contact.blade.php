<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contacto</title>
</head>
<body>
    <h2>Asunto: {{ $contactInfo->subject}}</h2>
    <p><strong>Nombre:</strong> {{ $contactInfo->firstname }}</p>
    <p><strong>Email:</strong> {{ $contactInfo->email}}</p>
    <p><strong>Teléfono:</strong> {{ $contactInfo->phone}}</p>
    <p><strong>Mensaje</strong></p>
    <p>
        {{ $contactInfo->message }}
    </p>
</body>
</html>