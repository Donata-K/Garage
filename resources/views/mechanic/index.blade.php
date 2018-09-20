{{-- @if($errors)
   @if($errors->count() > 0)
       <div class="alert alert-danger alert-with-icon">
           <span data-notify="icon" class="ti-close"></span>
           <b>Error!</b>
           @foreach($errors->all() as $message)
               <p>{{ $message }}</p>
           @endforeach
       </div>
   @endif
@endif --}}

@if(session()->has('success'))
   <div class="alert alert-success alert-with-icon">
       <span data-notify="icon" class="ti-check"></span>
       <b>Ok!</b>
       @foreach(session()->get('success') as $message)
           <p>{{ $message }}</p>
       @endforeach
   </div>
@endif

@if(session()->has('uzimtas'))
   <div class="alert alert-success alert-with-icon">
       <span data-notify="icon" class="ti-check"></span>
       <b>neimanoma istrinti!</b>
       @foreach(session()->get('uzimtas') as $message)
           <p>{{ $message }}</p>
       @endforeach
   </div>
@endif


    <base href="{{URL::asset('/')}}">
<link rel="stylesheet" href="{{url('css/bootstrap.min.css')}}">
<link rel="stylesheet" href="{{url('css/style.css')}}">
<script src="{{url('js/jquery-3.3.1.min.js')}}"></script>
    <title>Mechanikai</title>

</head>
<body>
        <nav class="navbar navbar-dark bg-dark">
                <a class="btn btn-info" href="{{route('mechanic.index')}}">Mechaniku sarasas</a>
                <a class="btn btn-info" href="{{route('truck.index')}}">Sunkvezimiu sarasas</a>
                <a  class="btn btn-info" href="{{route('truck.new')}}">Naujas sunkvezimis</a>
                <a  class="btn btn-info" href="{{route('mechanic.new')}}">Naujas mechanikas</a>
        </nav>
        
    <div class="container">
    <h1 class="text-center">Mechaniku sarasas</h1>


@foreach ($mechanics_list as $mech)
<table class="table">
        <thead>
          <tr>
                <th scope="col">Mechaniko vardas</th>
                <th scope="col">Mechaniko pavarde</th>
               
        </tr>
    </thead>
    <tbody>
      <tr>
            <td>{{$mech->name}}</td>
            <td>{{$mech->surname}}</td>
           <td><a href="{{route('mechanic.delete', $mech -> id)}}"> istrint </a> </td>
    </tr>
    <br>

    
@endforeach

</div>

<script src="{{url('js/popper.min.js')}}"></script>
<script src="{{url('js/bootstrap.min.js')}}"></script>


    </body>
</html>