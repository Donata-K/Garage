<h1>Mechanic blade php</h1>


@foreach ($mechanics_list as $mech)

<div><p>{{$mech->name}}<br>{{$mech->surname}}</p>  <a href="{{route('mechanic.delete', $mech -> id)}}">istrint</a></div>
    
@endforeach



<a href="{{route('mechanic.new')}}">Naujas mechanikas</a>