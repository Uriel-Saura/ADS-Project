<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('/css/Catalogo-css/formulario.css')}}">
    <title>Llenado Automatico</title>
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
    <form method="post" action="{{url('estimacion/'.$estimacion->id)}}" class="form">
        @method("PUT")
        @csrf
            <div class="input-box">
                <label for="id">id</label>  
                <input type="text" name="id" id="Concepto" value="{{$estimacion->id}}" required>
            </div>
            <div class="input-box">
                <label for="Concepto">Concepto</label>  
                <input type="text" name="Concepto" id="Concepto" value="{{$buscata->Tipo}}" required>
            </div>
            <div class="input-box">
                <label for="Cantidad">Cantidad</label>  
                <input type="text" name="Cantidad" id="Cantidad" value="{{$buscata->Area}}" required>
            </div>
            <div class="input-box">
                <label for="Anterior">Anterior</label>  
                <input type="text" name="Anterior" id="Anterior" 
                @if ($estimacion->Anterior == "")
                    value="0"    
                @else
                    value="{{$estimacion->Anterior}}"
                @endif
                required>
            </div>
            <div class="input-box">
                <label for="Actual">Actual</label>  
                <input type="text" name="Actual" id="Actual" value="{{$estimacion->Actual}}" required>
            </div>
            <div class="input-box">
                <label for="Total">Total</label>  
                <input type="text" name="Total" id="Total" value="{{$estimacion->Anterior + $estimacion->Actual}}" required>
            </div>
            <div class="input-box">
                <label for="Faltante">Faltante</label>  
                <input type="text" name="Faltante" id="Faltante" value="{{$buscata->Area - $estimacion->Actual}}" required>
            </div>  
            <div class="input-box">
                <label for="Unitario">Precio</label>  
                <input type="text" name="Unitario" id="Unitario" value="{{$buscata->Costo}}" required>
            </div> 
            <div class="input-box">
                <label for="Importe">Importe</label>  
                <input type="text" name="Importe" id="Importe" value="{{$buscata->Costo * $estimacion->Actual}}" required>
            </div> 
        <button class="regresar"><a href="{{url('estimacion')}}">Regresar</a></button>
        <button type="submit" class="save">Guardar</button>
    </form>
    </section>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</body>
</html>