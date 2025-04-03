<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Superhero</title>
</head>
<body>
    <h1>Superhero: {{ $superhero->name }}</h1>
    <h3>Real name: {{ $superhero->real_name }}</h3>
    <h3>Universe: {{$superhero->universes->name}}</h3>
    <h3>Gender: {{$superhero->gender->name}}</h3>
    <h3>ID: {{$superhero->id}}</h3>
    <h3>Picture:<br><img src="{{ $superhero->picture }}" alt="{{ $superhero->name }}" width="250"></h3>

    <br>
    <a href="{{route('superheroes.index')}}">All superheros</a>
    <br>

</body>
</html>
