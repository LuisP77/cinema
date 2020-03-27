@if ( Session::has('message-error') )
  <div class="alert alert-danger alert-dismissible">
    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
    {{Session::get('message-error')}}
  </div
@endif
