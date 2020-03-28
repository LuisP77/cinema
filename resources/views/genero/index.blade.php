@extends('layouts.admin')
@include('alerts.request')
@section('content')
  <div id="msj-success" class="alert alert-success alert-dismissible" role="alert" style="display:none">
    		<strong> Genero Actualizado Correctamente.</strong>
  </div>

  <table class="table">
		<thead>
			<th>Nombre</th>
			<th>Operaciones</th>
		</thead>

		<tbody id="datos"></tbody>
	</table>
@endsection

@section('scripts')
  <script type="text/javascript" src="{{ URL::asset('js/scripts2.js') }}"></script>
@endsection
