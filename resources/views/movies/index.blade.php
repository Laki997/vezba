@extends('layouts.app')

    @section('title','Movies')

@section('content')


<h2>Movies</h2>

<ul>
@foreach($movies as $movie)
<li><a href="{{route('movie',$movie->id)}}">{{$movie->title}} </a>{{$movie->storyline}} ({{$movie->comments->count()}})</li>


@endforeach
</ul>

<div class="row">
  <div class="col-md-2">
    @include('movies.show_latest_movies')
  </div>
  <div class="col-md-10">
    <h2>Movies</h2>
    @foreach ($movies as $movie)
      <div>
        <h4><a href="{{ route('movie',  $movie->id) }}">{{$movie->title}}</a></h4>
        <p>{{$movie->storyline}}</p>
      </div>
    @endforeach
  </div>
</div>

@endsection
    
