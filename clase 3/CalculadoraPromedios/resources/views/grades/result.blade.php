<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado del Promedio</title>
</head>
<body>
    <h1>Resultado del Promedio</h1>
    <p>El promedio de las calificaciones ingresadas es: {{ number_format($average, 2) }}</p>
    <a href="{{ route('grades.create') }}">Volver</a>
</body>
</html>
