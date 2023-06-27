
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reporte diario</title>
    <link rel="stylesheet" href="{{asset('css/diariopdf.css'}}">
</head>
<body>
    
    <div class="container">
    @foreach($diario as $diarios)

    <h1 class="title">Reporte diario numero: {{$diarios->id}}</h1><br>
    <p> Titulo: {{$diarios->titulo}} </p><br>
    <p> Fecha:{{$diarios->fecha}} </p><br>
    <p> Actividad:{{$diarios->actividad}} </p><br>
    <p> Porcentaje:{{$diarios->porcentaje}} </p><br>
    <p> Evidencia:{{$diarios->evidencia}} </p><br>
    <p> Autor:{{$diarios->autor}} </p><br>

    @endforeach
    </div>
</body>
</html>