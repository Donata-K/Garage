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
    <title>Mechanikai</title>

</head>
<body>
        <a  class="btn btn-info" href="{{route('mechanic.new')}}">Naujas mechanikas</a>
    <div class="container">
    <h1 class="text-center">Mechaniku sarasas</h1>


@foreach ($mechanics_list as $mech)

<div class="container"><p class="text-center">{{$mech->name}}  {{$mech->surname}} <br> </button> <a href="{{route('mechanic.delete', $mech -> id)}}"> istrint </a> </p></div>
    
@endforeach

</div>

<script src="{{url('js/popper.min.js')}}"></script>
<script src="{{url('js/bootstrap.min.js')}}"></script>
</body>
</html>