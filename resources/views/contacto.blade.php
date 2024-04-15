<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contacto</title>
    <link rel="stylesheet" href="{{ asset('css/contacto.css') }}">
</head>
<body>

<div class="container">
    <img src="{{ asset('images/portada.jpg') }}" alt="Imagen" class="flor">
</div>

<form method="POST" action="{{ route('contacto.enviar') }}" class="formulario">
   
    @csrf
     <H1>Contáctanos</H1>
    <div>
        <label for="nombre">Nombre:</label>
        <input type="text" name="nombre" id="nombre" required>
    </div>
    <div>
        <label for="email">Email:</label>
        <input type="email" name="email" id="email" required>
    </div>
    <div>
        <label for="mensaje">Mensaje:</label>
        <textarea name="mensaje" id="mensaje" rows="4" required></textarea>
    </div>
    <button type="submit">Enviar</button>
</form>
</body>
</html>
