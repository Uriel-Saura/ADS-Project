<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('/css/Catalogo-css/formulario.css')}}">
    <title>Ediccion</title>
</head>
<body>
    <selection class="container">
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
    <form action="{{url('estimacion/'.$estimacion->id)}}" method="post" class="form">
        @method("PUT")
        @csrf
            <div class="input-box">
                <label for="id">id</label>  
                <input type="text" name="id" id="id" value="{{$estimacion->id}}" required>
            </div>
            <div class="input-box">
                <label for="Concepto">Concepto</label>  
                <input type="text" name="Concepto" id="Concepto" value="{{$buscata->Tipo}}" required>
            </div>
            <div class="input-box">
                <label for="Actual">Actual</label>  
                <input type="text" name="Actual" id="Actual" value="" required>
            </div>
            <div class="input-box">
                <label for="id_catalogo">Catalogo</label>  
                <input type="text" name="id_catalogo" id="id_catalogo" value="{{$estimacion->id_catalogo}}" required>
            </div>
        <button class="regresar"><a href="{{url('estimacion')}}">Regresar</a></button>
        <button type="submit" class="save">Guardar</button>
    </form>
    </selection>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</body>
</html>