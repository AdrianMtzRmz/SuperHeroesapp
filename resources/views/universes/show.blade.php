<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Universe</title>
</head>
<body>
<h2>Name: {{$universe->name}}</h2>
<h2>Description: {{$universe->description}}</h2>
<h2>ID: {{$universe->id}}</h2>

<br>
<a href="{{route('universes.index')}}">All universes</a>
</body>
</html>
