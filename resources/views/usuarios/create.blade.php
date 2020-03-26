@extends('layouts.admin')
@section('content')
  <form method="POST" action="{{ url('/usuario') }}">
    @csrf
    <div class="form-group">
      <label for="name">Nombre</label>
      <input type="text" class="form-control" id="name" name="name">
    </div>
    <div class="form-group">
      <label for="email">Correo</label>
      <input type="text" class="form-control" id="email" name="email">
    </div>
    <div class="form-group">
      <label for="password">Contraseña</label>
      <input type="password" class="form-control" id="password" name="password">
    </div>
    <button class="btn btn-primary">Registrar</button>
  </form>
@endsection
