<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>HOLA M</h1>
    <div class="opciones"><a onclick="cargarContenido('/admin/contenido')" href="javascript:void(0);" >Contenido</a></div>
    <div class="opciones"><a onclick="cargarHabitaciones('/admin/habitaciones')" href="javascript:void(0);" >Habitaciones</a></div>
    <div class="contenido" id="contenido">
        
    </div>


    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>