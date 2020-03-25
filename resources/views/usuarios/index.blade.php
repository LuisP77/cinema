@extends('layouts.admin')

<?php $message = Session::get('message'); ?>
@if ($message == 'store')
  <div class="alert alert-success alert-dismissible">
    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
    Usuario creado exitosamente.
  </div
@endif

@section('content')
  <table class="table">
  		<thead>
  			<th>Nombre</th>
  			<th>Correo</th>
  			<th>Operacion</th>
  		</thead>
  		@foreach($users as $user)
  			<tbody>
  				<td>{{$user->name}}</td>
  				<td>{{$user->email}}</td>
  				<td></td>
  			</tbody>
  		@endforeach
  	</table>
@endsection
