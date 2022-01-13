@extends('layout')
@section('content')
<div class="card">
  <div class="card-header">Contactus Page</div>
  <div class="card-body">
      
      <form action="{{ url('empleados/' .$empleados->id) }}" method="post">
        {!! csrf_field() !!}
        @method("PATCH")
        <input type="hidden" name="id" id="id" value="{{$empleados->id}}" id="id" />
        <label>Nombre</label></br>
        <input type="text" name="nombre" id="nombre" value="{{$empleados->nombre}}" class="form-control"></br>
        <label>Descripcion</label></br>
        <input type="text" name="descripcion" id="descripcion" value="{{$empleados->descripcion}}" class="form-control"></br>
       <input type="submit" value="Update" class="btn btn-success"></br>
    </form>
  
  </div>
</div>
@stop