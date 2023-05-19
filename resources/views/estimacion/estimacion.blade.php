<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Estimacion</title>
</head>
<body>
    <h1>Hola estimacion</h1>
    <button class="new"><a href="{{url('estimacion/create')}}">Nuevo Estimacion</a></button>
    <table>
        <thead>
            <tr>
                <th>#</th>
                <th>Concepto</th>
                <th>Cantidad</th>
                <th>Anterior</th>
                <th>Actual</th>
                <th>Total</th>
                <th>Faltante</th>
                <th>Unitario</th>
                <th>Importe</th>
                <th></th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            @foreach ($estimacion as $estimacion)
            <tr>
                <td>{{$estimacion->id}}</td>
                <td>{{$estimacion->catalogo->Tipo}}</td>
                <td>{{$estimacion->Cantidad}}</td>
                <td>{{$estimacion->Anterior}}</td>
                <td>{{$estimacion->Actual}}</td>
                <td>{{$estimacion->Total}}</td>
                <td>{{$estimacion->Faltante}}</td>
                <td>{{$estimacion->Unitario}}</td>
                <td>{{$estimacion->Importe}}</td>
                <td></td>
                <td></td>
                <td><a href="{{url('estimacion/'.$estimacion->id.'/edit')}}">Editar</a></td>
                <td>
                    <form action="{{url('estimacion/'.$estimacion->id)}}" method="post">
                        @method("DELETE")
                        @csrf
                        <button type="submit">Eliminar</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>