@extends('layouts.admin')
@section('content')

  <form method="POST" action="{{url('/usuario', [$user['id']])}}">
    {{ csrf_field() }}
    {{ method_field('PUT') }}
    <div class="form-group">
      <label for="name">Nombre</label>
      <input type="text" class="form-control" id="name" name="name" value="{{$user->name}}" required>
    </div>
    <div class="form-group">
      <label for="email">Correo</label>
      <input type="text" class="form-control" id="email" name="email" value="{{$user->email}}" required>
    </div>
    <div class="form-group">
      <label for="password">Contraseña</label>
      <input type="password" class="form-control" id="password" name="password">
    </div>
    <button class="btn btn-primary">Editar</button>
  </form>

  <form method="POST" action="{{url('/usuario', [$user['id']])}}">
    {{ csrf_field() }}
    {{ method_field('DELETE') }}
    <button class="btn btn-warning">Eliminar</button>
  </form>

@endsection
