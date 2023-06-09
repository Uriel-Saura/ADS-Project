<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('/css/Catalogo-css/formulario.css')}}">
    <title>Editar</title>
</head>
<body>          
    <section class="container">
        @if ($errors->any())
        <div class="alert alert-warning alert-dismissible fade show" role="alert">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{$error}}</li>
                @endforeach
            </ul>
            <button type="button" class="btn-close" data-bs-dismiss="alert" arial-label="Clsoe"></button>
        </div>
    @endif
        <header>Editar Concepto al catalogo</header>
        <form action="{{url('catalogo/'.$catalogo->id)}}" method="post" class="form">
            @method("PUT")
            @csrf
            <div class="input-box">
                <label for="Clave">Clave</label>  
                <input type="text" name="Clave" id="Clave" value="{{$catalogo->Clave}}" required>
            </div>
            <div class="input-box">
                <label for="Tipo">Tipo</label>  
                <input type="text" name="Tipo" id="Tipo" value="{{$catalogo->Tipo}}" required>
            </div>
            <div class="input-box">
                <label for="Area">Area</label> 
                <input type="text" name="Area" id="Area" value="{{$catalogo->Area}}" required>
            </div>
            <div class="input-box">
                <label for="Caracteristicas">Caracteristicas</label>
                <input type="text" name="Caracteristicas" id="Caracteristicas" value="{{$catalogo->Caracteristicas}}" required>
            </div>
            <div class="input-box">
                <label for="Costo">Costo</label>
                <input type="text" name="Costo" id="Costo" value="{{$catalogo->Costo}}" required>
            </div>
            <button class="regresar"><a href="{{url('catalogo')}}">Regresar</a></button>
            <button type="submit" class="save">Guardar</button>
        </form>
    </section>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</body>
</html>