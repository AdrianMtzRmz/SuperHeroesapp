<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Genders</title>
</head>
<body>
    <h1>Name: {{$gender->name}}</h1>
    <h1>ID: {{$gender->id}}</h1>
    <br>
    <a href="{{route('genders.index')}}">All genders</a>
</body>
</html>
