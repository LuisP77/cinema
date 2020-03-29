@extends('layouts.admin')
@include('alerts.success')
@section('content')
  <div id="users-table">
    @include('usuarios.users-list')
  </div>
  {{ $users->onEachSide(3)->links() }}
@endsection
@section('scripts')
  {{-- <script type="text/javascript" src="{{ URL::asset('js/scripts3.js') }}"></script> --}}
@endsection
