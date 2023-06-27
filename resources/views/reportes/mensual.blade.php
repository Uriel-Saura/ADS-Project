<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/mensual.css')}}">
    <title>Reporte Mensual</title>
</head>
<body>
    <h1>Datos del reporte mensual</h1>

    <div class="container">
        <form action="{{ route('mensual.store') }}" method="post">
            @csrf
            <label for="titulo">
                Titulo
            </label>
            <input type="text" name="titulo" required> <br>
            
            <label for="inicio">
                Fecha de inicio
            </label>
            <input type="date" name="inicio" required> <br>

            <label for="termino">
                fecha de termino
            </label>
            <input type="date" name="termino" required> <br>

            <label for="actividad">
                Actividad realizada
            </label>
            <input type="text" name="actividad" required> <br>

            <label for="porcentaje">
                Porcentaje de la actividad
            </label>
            <input type="number" name="porcentaje" required> <br>

            <label for="evidencia">
                Evidencia fotografica
            </label>
            <input type="file" name="evidencia" required> <br>

            <label for="autor">
                Autor del Reporte
            </label>
            <input type="text" name="autor" required> <br>

        
            <input class="boton" type="submit" value="Terminar" name="global"> <br>
        </form>
    </div>
</body>
</html>