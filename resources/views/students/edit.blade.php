
@extends('students.layout')
@section('content')
<div class="card">
  <div class="card-header">Contactus Page</div>
  <div class="card-body">
      
      <form action="{{ url('student/' .$students->id) }}" method="post">
        {!! csrf_field() !!}
        @method("PATCH")
        <input type="hidden" name="id" id="id" value="{{$students->id}}" id="id" />
        <label>Name</label></br>
        <input type="text" name="nama" id="nama" value="{{$students->nama}}" class="form-control"></br>
        <label>Address</label></br>
        <input type="text" name="alamat" id="alamat" value="{{$students->alamat}}" class="form-control"></br>
        <label>Mobile</label></br>
        <input type="text" name="nohhp" id="nohhp" value="{{$students->nohp}}" class="form-control"></br>
        <input type="submit" value="Update" class="btn btn-success"></br>
    </form>
  
  </div>
</div>
@stop