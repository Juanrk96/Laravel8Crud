@extends('layout')
@section('content')
<div class="card">
  <div class="card-header">Contactus Page</div>
  <div class="card-body">
      
      <form action="{{ url('empleados') }}" method="post">
        {!! csrf_field() !!}
        <label>Nombre</label></br>
        <input type="text" name="nombre" id="nombre" class="form-control"></br>
        <label>Descripcion</label></br>
        <input type="text" name="descripcion" id="descripcion" class="form-control"></br>
        <input type="submit" value="Save" class="btn btn-success"></br>
    </form>
  
  </div>
</div>
@stop