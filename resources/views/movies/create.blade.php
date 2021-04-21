@extends('layouts.app')

@section('title','Form for creation')

@section('content')

<h2>Forma za kreiranje filma</h2>

    <form action="/movies" method="POST">
    @csrf
  <div class="form-group">
    <label for="title">Title</label>
    <input type="text" name="title" class="form-control" id="title" aria-describedby="emailHelp" placeholder="Enter Title">
    
    <div class="form-group">
    <label for="genre">Genre</label>
    <input type="text" name="genre" class="form-control" id="genre" aria-describedby="emailHelp" placeholder="Enter Genre">
    
  </div>

  <div class="form-group">
    <label for="director">Director</label>
    <input type="text" name="director"class="form-control" id="director" aria-describedby="emailHelp" placeholder="Enter Director">
    
  </div>

  <div class="form-group">
    <label for="godina">Godina</label>
    <input type="date" name="godina" class="form-control" id="godina" aria-describedby="emailHelp" placeholder="Enter Godina">
    
  </div>

  <div class="form-group">
    <label for="storyline">Storyline</label>
    <textarea class="form-control" name="storyline" id="storyline" rows="3"></textarea>
  </div>
    
 
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>





@endsection