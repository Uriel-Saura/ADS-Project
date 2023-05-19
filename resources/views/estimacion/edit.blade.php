<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Edicion</h1>
    <form action="{{url('estimacion/'.$estimacion->id)}}" method="post">
        @method("PUT")
        @csrf
            <div class="camp">
                <label for="Concepto">Concepto</label>  
                    <select name="Concepto" id="Concepto" class="form-select" required>
                        <option value="">Selecionar Concepto</option>
                        @foreach ($catalogos as $catalogo)
                            <option value="{{$catalogo->id}}" @if ($catalogo->id == $estimacion->id_catalogo){{'selected'}}@endif>{{$catalogo->Tipo}}</option>
                        @endforeach
                    </select>
            </div>
            <div class="camp">
                <label for="Cantidad">Cantidad</label>  
                <input type="text" name="Cantidad" id="Cantidad" value="{{$estimacion->Cantidad}}" required>
            </div>
            <div class="camp">
                <label for="Anterior">Anterior</label>  
                <input type="text" name="Anterior" id="Anterior" value="{{$estimacion->Anterior}}" required>
            </div>
            <div class="camp">
                <label for="Actual">Actual</label>  
                <input type="text" name="Actual" id="Actual" value="{{$estimacion->Actual}}" required>
            </div>
            <div class="camp">
                <label for="Total">Total</label>  
                <input type="text" name="Total" id="Total" value="{{$estimacion->Total}}" required>
            </div>
            <div class="camp">
                <label for="Faltante">Faltante</label>  
                <input type="text" name="Faltante" id="Faltante" value="{{$estimacion->Faltante}}" required>
            </div>  
            <div class="camp">
                <label for="Unitario">Precio</label>  
                <input type="text" name="Unitario" id="Unitario" value="{{$estimacion->Unitario}}" required>
            </div> 
            <div class="camp">
                <label for="Importe">Importe</label>  
                <input type="text" name="Importe" id="Importe" value="{{$estimacion->Importe}}" required>
            </div> 
        <button class="regresar"><a href="{{url('estimacion')}}">Regresar</a></button>
        <button type="submit" class="save">Guardar</button>
    </form>
</body>
</html>