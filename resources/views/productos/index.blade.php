<h1> Lista de productos </h1>

<table>
    <thead>
        <th>Id</th>
        <th>Nombre</th>
        <th>Precio</th>
        <th>categoria</th>
    </thead>
    <tbody>
        @foreach($productos as $producto)
        <tr>
        <td>{{$producto->id}}</td>
            <td>{{$producto->nombre}}</td>
            <td>{{$producto->precio}}</td>
            <td>{{$producto->categoria->nombre}}</td>
        </tr>
        @endforeach
    </tbody>
</table>