<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Editar</title>
</head>
<body>
    <h1>Creacion</h1>
    <form action="{{url('catalogo/'.$catalogo->id)}}" method="post">
        @method("PUT")
        @csrf
        <div class="camp">
            <label for="Clave">Clave</label>  
            <input type="text" name="Clave" id="Clave" value="{{$catalogo->Clave}}" required>
        </div>
        <div class="camp">
            <label for="Tipo">Tipo</label>  
            <input type="text" name="Tipo" id="Tipo" value="{{$catalogo->Tipo}}" required>
        </div>
        <div class="camp">
            <label for="Area">Area</label> 
            <input type="text" name="Area" id="Area" value="{{$catalogo->Area}}" required>
        </div>
        <div class="camp">
            <label for="Caracteristicas">Caracteristicas</label>
            <input type="text" name="Caracteristicas" id="Caracteristicas" value="{{$catalogo->Caracteristicas}}" required>
        </div>
        <div class="camp">
            <label for="Costo">Costo</label>
            <input type="text" name="Costo" id="Costo" value="{{$catalogo->Costo}}" required>
        </div>
        <button class="regresar"><a href="{{url('catalogo')}}">Regresar</a></button>
        <button type="submit" class="save">Guardar</button>
    </form>
</body>
</html>