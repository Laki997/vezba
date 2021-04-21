@extends('layouts.app')

@section('title','Movie')

@section('content')

<h2>-Movie-</h2>

<h3>Title: {{$movie->title}}</h3>
<h4>Director: {{$movie->director}}</h4>
<h4>Genre: {{$movie->genre}}</h4>
<h4>Godina: {{$movie->godina}}</h4>
<h5>Storyline: {{$movie->storyline}}</h5>

<br/>

  <h2>Comments</h2>

    <ul>

    @forelse($movie->comments as $comment)
    <li>{{$comment->content}}</li>
    @empty
    <span>No comments</span>
    @endforelse

    </ul>


@endsection