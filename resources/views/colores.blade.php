@foreach ($array as $item)
    <p> {{$item}} </p>
@endforeach

@for($i = 0; $i <=3; $i++ )
    <p>{{$array[$i]}} </p>
@endfor

