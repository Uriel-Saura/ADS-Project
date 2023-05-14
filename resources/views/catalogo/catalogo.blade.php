<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>HOla</h1>
    <button class="new"><a href="{{url('catalogo/create')}}">Nuevo Regristro</a></button>
    <table>
        <thead>
            <tr>
                <th>#</th>
                <th>Clave</th>
                <th>Tipo</th>
                <th>Area</th>
                <th>Caracteristicas</th>
                <th>Costo</th>
                <th></th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            @foreach ($catalogo as $catalogo)
            <tr>
                <td>{{$catalogo->id}}</td>
                <td>{{$catalogo->Clave}}</td>
                <td>{{$catalogo->Tipo}}</td>
                <td>{{$catalogo->Area}}</td>
                <td>{{$catalogo->Caracteristicas}}</td>
                <td>{{$catalogo->Costo}}</td>
                <td><a href="{{url('catalogo/'.$catalogo->id.'/edit')}}">Editar</a></td>
                <td>
                    <form action="{{url('catalogo/'.$catalogo->id)}}" method="post">
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