@extends('layouts.app')

    @section('title','Movies')

@section('content')
<h2>Movies</h2>

<ul>
@foreach($movies as $movie)
<li><a href="{{route('movie',$movie->id)}}">{{$movie->title}} </a>{{$movie->storyline}}</li>


@endforeach
</ul>

@endsection
    
