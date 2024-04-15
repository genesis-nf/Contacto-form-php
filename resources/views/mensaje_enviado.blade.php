<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mensaje Enviado</title>
    <link rel="stylesheet" href="{{ asset('css/mensaje_enviado.css') }}">

</head>
<body>
    <h1>Mensaje Enviado</h1>
    <p>{{ session('success') }}</p>
    <p>Volviendo al formulario en <span id="countdown">10</span> segundos...</p>

    <script src="{{ asset('js/countdown.js') }}"></script>
</body>
</html>
