<html>
        <head>
<base href="{{URL::asset('/')}}">
<link rel="stylesheet" href="{{url('css/bootstrap.min.css')}}">
</head>
<body>
        
<nav class="navbar navbar-dark bg-dark">
                <a class="btn btn-info" href="{{route('mechanic.index')}}">Mechaniku sarasas</a>
                <a class="btn btn-info" href="{{route('truck.index')}}">Sunkvezimiu sarasas</a>
                <a  class="btn btn-info" href="{{route('truck.new')}}">Naujas sunkvezimis</a>
                <a  class="btn btn-info" href="{{route('mechanic.new')}}">Naujas mechanikas</a>
        </nav>
<h3 class="text-center">Prideti sunkvezimi</h3>
<div class="d-flex justify-content-center align-items-center container ">  <div class="row ">
<form class="form-horizontal" action="{{route ('truck.new')}}" method="POST">
                <div class="form-group">
        <label for=>Marke</label>
        <input type="text"  name="maker">
        <br>
        <label for="">Valstybinis numerius</label>
        <input type="text" name="plate">
        <br>
        <br>
        <label for="">Pagaminimo metai</label>
        <input type="text"  name="make_year">
        <br>
        <br>
        {{-- <br>
        <label for="">Mechaniko id</label>
        <input type="number"  min="1"  name="mechanic_id">
        <br> --}}
        <br>
        <label for="">Mechaniko komentaras</label>
        <textarea class="form-control noresize" name="mechanic_notices" rows="5" cols="20">

        </textarea>
        <br>
        <br>
        {!! csrf_field() !!}


<label for="">Mechanikai</label>

<select name="mechanic_id" id="">
<option value="0">Select mechanic</option>
@foreach ($mechanics as $key =>$name)
<option value="{{$key}}">{{$name}}</option>
    
@endforeach



</select>

        
        <input type="submit" name="">
        </div>
        </form>
        </div>
</body>


        {{-- <footer>
                        

                                <p class="rights"><span>©  </span><span class="copyright-year">2018</span><span> </span><span>Waves</span><span>. </span><span>All Rights Reserved.</span></p>
                            
                                        </footer> --}}
                                
                      </html>