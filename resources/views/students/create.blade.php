@extends('students.layout')
@section('content')
<div class="card">
  <div class="card-header">Students Page</div>
  <div class="card-body">
      
      <form action="{{ url('student') }}" method="post">
        {!! csrf_field() !!}
        <label>NAMA</label></br>
        <input type="text" name="nama" id="nama" class="form-control"></br>
        <label>ALAMAT</label></br>
        <input type="text" name="alamat" id="alamat" class="form-control"></br>
        <label>NO>HP</label></br>
        <input type="text" name="nohp" id="nohp" class="form-control"></br>
        <input type="submit" value="Save" class="btn btn-success"></br>
    </form>
  
  </div>
</div>
@stop