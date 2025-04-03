<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Create superhero</title>
</head>
<body>
<h1>Create Superhero</h1>

<form action="{{ route('superheroes.store') }}" method="POST">
    @csrf

    <label for="name">Name</label>
    <input type="text" name="name" id="name">
    <br><br>

    <label for="real_name">Real Name</label>
    <input type="text" name="real_name" id="real_name">
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
            <option value="{{$gender->id}}">{{$gender->name}}</option>
        @endforeach
    </select>
    <br><br>

    <label for="picture">Picture URL</label>
    <input type="text" name="picture" id="picture">
    <br><br>

    <input type="submit" value="Create">
</form>
</body>
</html>
