@extends('students.layout')
@section('content')
<div class="card">
  <div class="card-header">Students Page</div>
  <div class="card-body">
  
        <div class="card-body">
        <h5 class="card-title">Name : {{ $students->nama }}</h5>
        <p class="card-text">Address : {{ $students->alamat }}</p>
        <p class="card-text">Mobile : {{ $students->nohp }}</p>
  </div>
      
    </hr>
  
  </div>
</div>