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
       
        <h3>Prideti nauja mechanika</h3>

<form class="form-horizontal" action="{{route ('mechanic.new')}}" method="POST">
         
 
  

<label for="exampleInputName2">Vardas</label>
<input type="text"  name="mechanic_name">
<br>
<label for="">Pavarde</label>
<input type="text" name="mechanic_surname">
<br>
{!! csrf_field() !!}

<input type="submit" name="">
</form>


<script src="{{url('js/popper.min.js')}}"></script>
<script src="{{url('js/bootstrap.min.js')}}"></script>
</body>
</html>