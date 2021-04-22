<div>
  <h4>Latest movies</h4>
  @foreach($movies as $movie)
    <div>
      <a href="{{ route('movie', $movie->id) }}">{{$movie->title}}</a>
    </div>
  @endforeach
</div>