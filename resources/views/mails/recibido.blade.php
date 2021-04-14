<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Mensaje Nuevo</title>
</head>
<body>
<p>Recibiste un mensaje de: {{ $contenido['name'] }} - {{ $contenido['email'] }} </p>
<p><strong>Asunto</sotrong> {{ $contenido['subjet'] }}</p>
<p><strong>Contenido</sotrong> {{ $contenido['subjet'] }}</p>

</body>
</html>