<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Superheroes</title>
</head>
<body>
<h1>Superheroes</h1>

<table>
    <thead>
    <tr>
        <th>Id</th>
        <th>Name</th>
        <th>Real Name</th>
        <th>Universe</th>
        <th>Gender</th>
        <th>Picture</th>
    </tr>
    </thead>

    <tbody>
    @foreach ($superheroes as $superhero)
        <tr>
            <td>{{ $superhero->id }}</td>
            <td>{{ $superhero->name }}</td>
            <td>{{ $superhero->real_name }}</td>
            <td>{{ $superhero->universes->name }}</td>
            <td>{{ $superhero->gender->name }}</td>
            <td><img src="{{ $superhero->picture }}" alt="{{ $superhero->name }}" width="50"></td>
            <td>
                <a href="{{route('superheroes.show', $superhero->id)}}">Show</a>
                <a href="{{route('superheroes.edit', $superhero->id)}}">Edit</a>

                <form action="{{route('superheroes.destroy', $superhero->id)}}" method="post">
                    @csrf
                    @method('delete')

                    <input type="submit" value="Delete" onclick="return confirm('Are you pretty sure? There is no way back')">
                </form>
            </td>
        </tr>
    @endforeach
    </tbody>

</table>

<hr>
<a href="{{ route('superheroes.create') }}">Create New Superhero</a>
<hr>

</body>
</html>
