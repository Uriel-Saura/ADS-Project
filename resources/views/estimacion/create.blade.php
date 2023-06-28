<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('/css/Catalogo-css/formulario.css')}}">
    <title>Creacion Estimacion</title>
</head>
<body>
    <section class="container">
        <header>Añadir Estimacion</header>
        <form action="{{url('estimacion')}}" method="post" class="form">
            @csrf
                <div class="input-box">
                    <label for="id">id</label>  
                    <input type="text" name="id" id="id" value="{{old ('id')}}" required>
                </div>
                <div class="input-box">
                    <label for="Concepto">Concepto</label>  
                        <select name="Concepto" id="Concepto" class="form-select" required>
                            <option value="">Selecionar Concepto</option>
                            @foreach ($cata as $cata)
                                <option value="{{$cata->id}}">{{$cata->Tipo}}</option>
                            @endforeach
                        </select>
                </div>
                <div class="input-box">
                    <label for="Actual">Actual</label>  
                    <input type="text" name="Actual" id="Actual" value="{{old ('Actual')}}" required>
                </div>
            <button class="regresar"><a href="{{url('estimacion')}}">Regresar</a></button>
            <button type="submit" class="save">Guardar</button>
        </form>
    </section>
</body>
</html>