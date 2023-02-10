
            @include('layouts.menu')

               

            {{ Auth::user()->name }}
            {{ Auth::user()->email }}
            {{ Auth::user()->useruid }}

<form action="/alldata" method="post">
    @csrf

  <input type="submit" value="all">
</form>

<form action="/mydata" method="post">
    @csrf

  <label for="lname">Last name:</label><br>
  <input type="text" id="lname" name="lname" value="5"><br><br>
  <input type="submit" value="my">
</form>





@if(isset($data))

@foreach ($data as $pl) 
    {{$pl->name}}
    {{$pl->id}}<br>

@endforeach
@endif







       
