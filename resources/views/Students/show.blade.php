@extends('students.layout')
@section('content')
 
 
<div class="card">
  <div class="card-header">Student Info</div>
  <div class="card-body">
   
 
        <div class="card-body">
        <h5 class="card-title">Name : {{ $students->firstname }} {{ $students->lastname }}</h5>
        <p class="card-text">Birthdate : {{ $students->birthdate }}</p>
        <p class="card-text">Address : {{ $students->address }}</p>
        <p class="card-text">Course : {{ $students->course }}</p>
        <p class="card-text">Year Level : {{ $students->yearlevel }}</p>
        <p class="card-text">Email : {{ $students->email }}</p>
        <p class="card-text">Phone : {{ $students->phone }}</p>
  </div>
       
    </hr>
  
  </div>
</div>