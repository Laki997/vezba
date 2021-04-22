@extends('layouts.app')

@section('title',$movie->title)

@section('content')

<h2>-Movie-</h2>

<h3>Title: {{$movie->title}}</h3>
<h4>Director: {{$movie->director}}</h4>
<h4><a href="{{route('genre',['genre' => $movie->genre])}}">Genre: {{$movie->genre}}</a></h4>
<h4>Godina: {{$movie->godina}}</h4>
<h5>Storyline: {{$movie->storyline}}</h5>

<br/>

  <h2>Comments</h2>

    <ul>

    @forelse($movie->comments as $comment)
    <li>{{$comment->content}} {{$comment->created_at}}</li>
    @empty
    <span>No comments</span>
    @endforelse

    </ul>

 <h3>Dodaj Komentar</h3>

    <form action="{{route('comment',['movie' => $movie])}}" method="POST">
    @csrf
  <div class="form-group">
    <label for="exampleFormControlTextarea1">Content</label>
    <textarea class="form-control @error ('content') is-invalid @enderror"  name="content" id="exampleFormControlTextarea1" rows="3"></textarea>@error('content') <div class="alert alert-danger">{{$message}}</div>@enderror
  </div>

  

  <button type="submit" class="btn btn-primary">Submit</button>
  
</form>


@endsection