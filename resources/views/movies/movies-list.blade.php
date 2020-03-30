<table class="table">
  <thead>
    <th>Nombre</th>
    <th>Dirección</th>
    <th>Duración</th>
    <th>Género</th>
    <th>Imagen</th>
		<th></th>
  </thead>
  @foreach($movies as $movie)
    <tbody>
      <td>{{$movie->name}}</td>
      <td>{{$movie->direction}}</td>
      <td>{{$movie->duration}}</td>
			<td>{{$movie->genre}}</td>
      <td>
      @if (!empty($movie->poster))
        <img src="{{asset('storage/app-movies/'.$movie->poster)}}" alt="no picture" height="30">
      @else
        NO FOTO
      @endif
      </td>

      <td>
        <a href="{{ route('movies.edit', $movie->id) }}" class="btn btn-info" role="button">Edit</a>
      </td>
    </tbody>
  @endforeach
</table>
