@extends('layouts.app')

@section('title','Form for creation')

@section('content')

<h2>Forma za kreiranje filma</h2>

    <form action="/movies" method="POST">
    @csrf
  <div class="form-group">
    <label for="title">Title</label>
    <input type="text" name="title" class="form-control @error ('title') is-invalid @enderror" id="title" aria-describedby="emailHelp" placeholder="Enter Title">
    @error('title')<div class="alert alert-danger">{{$message}}</div>
    @enderror
      </div>
    
    <div class="form-group">
    <label for="genre">Genre</label>
    <input type="text" name="genre" class="form-control  @error ('genre') is-invalid @enderror" id="genre" aria-describedby="emailHelp" placeholder="Enter Genre">
    @error('genre')<div class="alert alert-danger">{{$message}}</div> @enderror
    
  </div>

  <div class="form-group">
    <label for="director">Director</label>
    <input type="text" name="director"class="form-control @error('director') is-invalid @enderror" id="director" aria-describedby="emailHelp" placeholder="Enter Director">
    @error('director') <div class="alert alert-danger">{{$message}}</div>
    @enderror
    
  </div>

  <div class="form-group">
    <label for="godina">Godina</label>
  
    <input type="date" name="godina" class="form-control @error('godina') is-invalid @enderror" id="godina" aria-describedby="emailHelp" placeholder="Enter Godina">
    @error('godina') <div class="alert alert-danger">{{$message}}</div>
    @enderror
  </div>

  <div class="form-group">
    <label for="storyline">Storyline</label>
    <textarea class="form-control @error('storyline') is-invalid @enderror" name="storyline" id="storyline" rows="3"></textarea>
    @error('storyline') <div class="alert alert-danger">{{$message}}</div>
    @enderror
  </div>
    
 
  
  <div class="form-group">
  <button type="submit" class="btn btn-primary">Submit</button>
  </div>
</form>





@endsection