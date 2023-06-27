<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reporte mensual</title>
    <link rel="stylesheet" href="{{asset('css/mensualpdf.css')}}">
</head>
<body>

    <div class="container">
    @foreach($mensual as $mensuales)

    <h1 class="title">Reporte mensual numero : {{$mensuales->id}}</h1><br>
    <p> Titulo: {{$mensuales->titulo}} </p><br>
    <p> Fecha de inicio: {{$mensuales->inicio}} </p><br>
    <p> Fecha de termino: {{$mensuales->termino}} </p><br>
    <p> Actividad: {{$mensuales->actividad}} </p><br>
    <p> Porcentaje: {{$mensuales->porcentaje}} </p><br>
    <p> Evidencia: {{$mensuales->evidencia}} </p><br>
    <p> Autor:{{$mensuales->autor}} </p><br>
    
    @endforeach
    </div>
</body>
</html>