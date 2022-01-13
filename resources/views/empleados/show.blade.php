@extends('layout')
@section('content')
<div class="card">
  <div class="card-header">Contactus Page</div>
  <div class="card-body">
  
        <div class="card-body">
        <h5 class="card-title">Nombre : {{ $empleados->nombre }}</h5>
        <p class="card-text">Descripcion : {{ $empleados->descripcion }}</p>
  </div>
      
    </hr>
  
  </div>
</div>