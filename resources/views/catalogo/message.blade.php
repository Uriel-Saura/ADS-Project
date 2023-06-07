<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('/css/Catalogo-css/message.css')}}">
    <title>Message</title>
</head>
<body>
    <section class="container">
        <div class="form">
            <header>{{$msg}}</header>
            <div class="input-text">
                <label for="">Regresa a la tabla para ver</label>
            </div>
            <div class="input-text">
                <label for="">el contenido nuevo.</label>
            </div>
            <button><a href="{{url('catalogo')}}">Regresar</a></button>
        </div>
    </section>
</body>
</html>