<form action="{{route ('mechanic.new')}}" method="POST">
<h3>Naujas mechanikas</h3>

<label for="">name</label>
<input type="text" name="mechanic_name">
<br>
<label for="">surname</label>
<input type="text" name="mechanic_surname">
<br>
{!! csrf_field() !!}

<input type="submit" name="">
</form>