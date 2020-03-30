
@extends('layouts.admin')
	@section('content')
		@include('alerts.request')

		{!!Form::model($movie,['route'=> ['movies.update',$movie->id],'method'=>'PUT','files' => true])!!}
			@include('movies.forms.movies')
			{!!Form::submit('Actualizar',['class'=>'btn btn-primary'])!!}
		{!!Form::close()!!}

		{!!Form::open(['route'=> ['movies.destroy',$movie->id],'method'=>'DELETE'])!!}
			{!!Form::submit('Eliminar',['class'=>'btn btn-danger'])!!}
		{!!Form::close()!!}
	@endsection
