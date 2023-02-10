//blog\resources\views\students\create.blade.php
@extends('students.layout')
@section('content')
  
<div class="card" style="margin:20px;">
  <div class="card-header">Create New Students</div>
  <div class="card-body">
       
      <form action="/adddata" method="post">
    @csrf
        <label>Name</label></br>
        <input type="text" name="name" id="name" class="form-control"></br>
        <label>fanclubname</label></br>
        <input type="text" name="fanclub" id="address" class="form-control"></br>
        <label>arenaname</label></br>
        <input type="text" name="stadium" id="mobile" class="form-control"></br>
        <input type="submit" value="Save" class="btn btn-success"></br>
    </form>
    
  </div>
</div>
  
@stop