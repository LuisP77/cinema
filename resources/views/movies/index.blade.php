@extends('layouts.admin')
@include('alerts.success')
@section('content')
  <div id="movies-table">
    @include('movies.movies-list')
  </div>
@endsection
@section('scripts')
  {{-- <script type="text/javascript" src="{{ URL::asset('js/scripts3.js') }}"></script> --}}
@endsection
