<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('/css/diario.css')}}">

    <title>Reporte Diario</title>
</head>
<body>

<div class="container">
<h1>Datos del Reporte Diario</h1>

 <form action="{{ route('diario.store') }}" method="POST">
    @csrf

<label for="titulo">Titulo</label>
<input type="text" name="titulo" required><br>

<label for="fecha">
    Fecha de creacion
</label>
<input type="date" name="fecha" required><br>

<label for="actividad">
    Actividad Realizada
</label>
<input type="text" name="actividad" required><br>

<label for="porcentaje">
    Porcentaje de Avance
</label>
<input type="number" name="porcentaje" required><br>

<label for="evidencia">
    Evidencia fotografica
</label>
<input type="file" name="evidencia" required><br>

<label for="autor">
    Nombre del autor
</label>
<input type="text" name="autor" required><br>


<input class="boton" type="submit" value="Terminar" name="enviar"><br>

 </form>
 </div>
</body>
</html>