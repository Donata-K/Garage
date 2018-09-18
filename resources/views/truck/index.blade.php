<h1>Truck list</h1>
@foreach ($truck_list as $truck)

<div class="container"><p class="text-center">{{$truck->maker}}  {{$truck->plate}} {{$truck->make_year}} {{$truck->mechanic_notices}} {{$truck->mechanic_id}} </p></div>
    
@endforeach


<a  class="btn btn-info" href="{{route('truck.new')}}">Naujas sunkvezimis</a>