@if ( $errors->any() )
  <div class="alert alert-danger alert-dismissible">
    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
    <ul>
      @foreach ($errors->all() as $key => $error)
        <li>{{$error}}</li>
      @endforeach
    </ul>
  </div
@endif
