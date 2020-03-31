@extends('layouts.admin')
@include('alerts.success')
@section('content')
  <input type="hidden" name="_token" value="{{ csrf_token() }}" id="token">
  {!!Form::select('state', $states, null, ['id' => 'state-select'])!!}
  {!!Form::select('town', $towns, null, ['id' => 'town-select'])!!}
@endsection
@section('scripts')
  <script type="text/javascript" src="{{ URL::asset('js/select-dinamico.js') }}"></script>
@endsection
