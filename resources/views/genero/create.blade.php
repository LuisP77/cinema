@extends('layouts.admin')
@include('alerts.request')
@section('content')
  <form method="POST" action="{{ url('/genero') }}">
    @csrf
	  <div id="msj-success" class="alert alert-success alert-dismissible" role="alert" style="display:none">
        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
    		<strong> Genero agregado correctamente.</strong>
		</div>

    <div id="msj-error" class="alert alert-danger alert-dismissible" role="alert" style="display:none">
		</div>

		<input type="hidden" name="_token" value="{{ csrf_token() }}" id="token">
    <div class="form-group">
      <label for="name">Género</label>
      <input type="text" class="form-control" id="genre" name="genre">
    </div>
    <a href="#" id="genre-registro" class="btn btn-primary">Registrar</a>

	</form>

@endsection
