<form action="{{route ('truck.new')}}" method="POST">
        <label for=>Marke</label>
        <input type="text"  name="maker">
        <br>
        <label for="">Valstybinis numerius</label>
        <input type="text" name="plate">
        <br>
        <br>
        <label for="">Pagaminimo metai</label>
        <input type="date"  name="make_year">
        <br>
        <br>
        <br>
        <label for="">Mechaniko id</label>
        <input type="number"  min="1"  name="mechanic_id">
        <br>
        <br>
        <label for="">Mechaniko komentaras</label>
        <textarea name="mechanic_notices" rows="10" cols="30">

        </textarea>
        <br>
        <br>
        {!! csrf_field() !!}
        
        <input type="submit" name="">
        </form>