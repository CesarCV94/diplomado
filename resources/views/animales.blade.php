@forelse ($array as $item)
    <p>{{$item}} </p>
@empty
    <p> No hay animales </p>
@endforelse