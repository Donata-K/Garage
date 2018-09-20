<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <base href="{{URL::asset('/')}}">
<link rel="stylesheet" href="{{url('css/bootstrap.min.css')}}">
<link rel="stylesheet" href="{{url('css/style.css')}}">
<script src="{{url('js/jquery-3.3.1.min.js')}}"></script>
    <title>Saraso pildymas</title>

</head>
<body>
        <nav class="navbar navbar-dark bg-dark">
                <a class="btn btn-info" href="{{route('mechanic.index')}}">Mechaniku sarasas</a>
                <a class="btn btn-info" href="{{route('truck.index')}}">Sunkvezimiu sarasas</a>
                <a  class="btn btn-info" href="{{route('truck.new')}}">Naujas sunkvezimis</a>
                <a  class="btn btn-info" href="{{route('mechanic.new')}}">Naujas mechanikas</a>
        </nav>
        <h3 class="text-center">Prideti nauja mechanika</h3>
        @if($errors)
        @if($errors->count() > 0)
            <div class="alert alert-danger alert-with-icon">
                <span data-notify="icon" class="ti-close"></span>
                <b>Error!</b>
                @foreach($errors->all() as $message)
                    <p>{{ $message }}</p>
                @endforeach
            </div>
        @endif
     @endif
     
        <div class="d-flex justify-content-center align-items-center container ">  <div class="row ">
            <form class="form-horizontal" action="{{route ('mechanic.new')}}" method="POST">
         
 
        <div class="form-group">

<label for="">Vardas</label>
        <input type="text"  name="mechanic_name" value="{{old('mechanic_name', $mechanic->name)}}">
<br>
<label for="exampleInputName2">Pavarde</label>
<input type="text" name="mechanic_surname" value="{{old('mechanic_surname', $mechanic->surname)}}">
<br>
{!! csrf_field() !!}

<input type="submit" name="">
</div>
</form>
</div>

<script src="{{url('js/popper.min.js')}}"></script>
<script src="{{url('js/bootstrap.min.js')}}"></script>
</body>
</html>