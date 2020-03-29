@extends('layouts.admin')
@include('alerts.request')
@section('content')
  {!!Form::open(['route'=>'movies.store', 'method'=>'POST','files' => true])!!}
      @include('movies.forms.movies')
			{!!Form::submit('Registrar',['class'=>'btn btn-primary'])!!}
	{!!Form::close()!!}
@endsection
