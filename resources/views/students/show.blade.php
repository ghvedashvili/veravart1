@extends('students.layout')
@section('content')
  
<div class="card" style="margin:20px;">
  <div class="card-header">Students Page</div>
  <div class="card-body">
        <div class="card-body">
        <h5 class="card-title">Name : {{ $students->name }}</h5>
        <p class="card-text">stadium : {{ $students->stadium }}</p>
        <p class="card-text">fanclub : {{ $students->fanclub }}</p>
  </div>
    </hr>
  </div>
</div>
@stop