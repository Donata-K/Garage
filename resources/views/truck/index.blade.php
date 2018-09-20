<base href="{{URL::asset('/')}}">
<link rel="stylesheet" href="{{url('css/bootstrap.min.css')}}">
<nav class="navbar navbar-dark bg-dark">
        <a class="btn btn-info" href="{{route('mechanic.index')}}">Mechaniku sarasas</a>
        <a class="btn btn-info" href="{{route('truck.index')}}">Sunkvezimiu sarasas</a>
        <a  class="btn btn-info" href="{{route('truck.new')}}">Naujas sunkvezimis</a>
        <a  class="btn btn-info" href="{{route('mechanic.new')}}">Naujas mechanikas</a>
</nav>
<h1 class="text-center">Sunkvezimiu sarasas</h1>
@foreach ($truck_list as $truck)

<div class="container">

        <table class="table">
                <thead>
                  <tr>
                    <th scope="col">Sunkvezimio marke</th>
                    <th scope="col">Valstybinis numeris</th>
                    <th scope="col">Metai</th>
                    <th scope="col">Mechaniko id</th>
                    <th scope="col">Mechaniko vardas</th>
                     <th scope="col">Mechaniko komentaras</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>{{$truck->maker}}</td>
                    <td>{{$truck->plate}}</td>
                    <td>{{$truck->make_year}}</td>
                    <td>{{$truck->mechanic_id}}</td>
                    <td>{{$truck->truckMechanic->name}}</td>
                    <td>{{$truck->mechanic_notices}}</td>
                    <td><a href="{{route('truck.delete', $truck -> id)}}"> istrint </a> </td>
                  </tr>
            
</table>
    
@endforeach


