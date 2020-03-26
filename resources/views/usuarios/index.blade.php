@extends('layouts.admin')
@if ( Session::has('message') )
  <div class="alert alert-success alert-dismissible">
    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
    {{Session::get('message')}}
  </div
@endif

@section('content')
  <table class="table">
  		<thead>
  			<th>Nombre</th>
  			<th>Correo</th>
  			<th>Operación</th>
  		</thead>
  		@foreach($users as $user)
  			<tbody>
  				<td>{{$user->name}}</td>
  				<td>{{$user->email}}</td>
  				<td>
            <a href="{{ route('usuario.edit', $user->id) }}" class="btn btn-info" role="button">Edit</a>
          </td>
  			</tbody>
  		@endforeach
  	</table>
    {{ $users->onEachSide(3)->links()  }}
@endsection
