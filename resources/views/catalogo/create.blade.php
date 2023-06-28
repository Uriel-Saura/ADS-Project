<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('/css/Catalogo-css/formulario.css')}}">
    <title>Agregar</title>
</head>
<body>
    <section class="container">
        <header>Añadir Concepto al catalogo</header>
        <form action="{{url('catalogo')}}" method="post" class="form">
            @csrf
            <div class="input-box">
                <label for="Clave">Clave</label>  
                <input type="text" name="Clave" id="Clave" value="{{old ('Clave')}}" required>
            </div>
            <div class="input-box">
                <label for="Tipo">Tipo</label>  
                <input type="text" name="Tipo" id="Tipo" value="{{old ('Tipo')}}" required>
            </div>
            <div class="input-box">
                <label for="Area">Area</label> 
                <input type="text" name="Area" id="Area" value="{{old ('Area')}}" required>
            </div>
            <div class="input-box">
                <label for="Caracteristicas">Caracteristicas</label>
                <input type="text" name="Caracteristicas" id="Caracteristicas" value="{{old ('Caracteristicas')}}" required>
            </div>
            <div class="input-box">
                <label for="Costo">Costo</label>
                <input type="text" name="Costo" id="Costo" value="{{old ('Costo')}}" required>
            </div>
            <button class="regresar"><a href="{{url('catalogo')}}">Regresar</a></button>
            <button type="submit" class="save">Guardar</button>
        </form>
    </section>
</body>
</html>