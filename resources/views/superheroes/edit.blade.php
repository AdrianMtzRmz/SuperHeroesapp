<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit superhero</title>
</head>
<body>
<h1>Edit Superhero</h1>

<form action="{{ route('superheroes.update', $superhero->id) }}" method="POST">
    @csrf
    @method('patch')

    <label for="name">Name</label>
    <input type="text" name="name" value="{{ $superhero->name }}">
    <br><br>

    <label for="real_name">Real Name</label>
    <input type="text" name="real_name" value="{{ $superhero->real_name }}">
    <br><br>

    <label for="universe_id">Universe</label>
    <select name="universe_id" id="universe_id">
        @foreach($universes as $universe)
            <option value="{{$universe->id}}">{{$universe->name}}</option>
        @endforeach
    </select>
    <br><br>

    <label for="gender_id">Gender</label>
    <select name="gender_id" id="gender_id">
        @foreach($genders as $gender)
            <option value="{{$gender->id}}"

            @if ($gender->id == $superhero->gender_id)
                selected
                @endif

            >{{$gender->name}}</option>
        @endforeach
    </select>
    <br><br>

    <label for="picture">Picture URL</label>
    <input type="text" name="picture" value="{{$superhero->picture}}">
    <br><br>

    <input type="submit" value="Edit">
</form>
