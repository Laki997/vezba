<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Movies</title>
</head>
<body>

<h2>Movies</h2>

<ul>
@foreach($movies as $movie)
<li><a href="">{{$movie->title}} </a>{{$movie->storyline}}</li>


@endforeach
</ul>

    
</body>
</html>