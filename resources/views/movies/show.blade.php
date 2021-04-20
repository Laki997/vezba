@extends('layouts.app')

@section('title','Movie')

@section('content')

<h2>Movie</h2>

<h1>{{$movie->title}}</h1>
<h2>{{$movie->director}}</h2>
<h2>{{$movie->genre}}</h2>
<h2>{{$movie->godina}}</h2>
<h3>{{$movie->storyline}}</h3>


@endsection